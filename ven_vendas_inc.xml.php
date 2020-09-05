<?php
<object class="venvendasinc" name="venvendasinc" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">1454</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">venvendasinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">venvendasincCreate</property>
  <property name="jsOnLoad">venvendasincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[VENDAS - Historico de Vendas - Inclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="dados_faturamento" >
    <property name="Caption">Faturamentos</property>
    <property name="Height">407</property>
    <property name="Left">8</property>
    <property name="Name">dados_faturamento</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">50</property>
      <property name="Width">47</property>
    </object>
    <object class="Edit" name="mgt_faturamento_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_faturamento_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">46</property>
      <property name="Width">91</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">161</property>
      <property name="Name">Label2</property>
      <property name="Top">50</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="mgt_faturamento_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">208</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_faturamento_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption">Cliente Nome</property>
      <property name="Height">13</property>
      <property name="Left">382</property>
      <property name="Name">Label3</property>
      <property name="Top">32</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_faturamento_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">382</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_faturamento_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">270</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Cliente Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">252</property>
      <property name="Name">Label4</property>
      <property name="Top">32</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_faturamento_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">252</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_faturamento_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">126</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Produtos</property>
      <property name="Height">180</property>
      <property name="Left">6</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">69</property>
      <property name="Width">718</property>
      <object class="Button" name="bt_adicionar" >
        <property name="Caption">Adicionar Produto</property>
        <property name="Height">25</property>
        <property name="Left">119</property>
        <property name="Name">bt_adicionar</property>
        <property name="Top">148</property>
        <property name="Width">116</property>
        <property name="OnClick">bt_adicionarClick</property>
      </object>
      <object class="Button" name="bt_remover" >
        <property name="Caption">Remover Produto Selecionado</property>
        <property name="Height">25</property>
        <property name="Left">525</property>
        <property name="Name">bt_remover</property>
        <property name="Top">148</property>
        <property name="Width">184</property>
        <property name="OnClick">bt_removerClick</property>
      </object>
      <object class="DBGrid" name="registros_produtos" >
        <property name="Columns"><![CDATA[a:11:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Qtde.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_faturamento_produto_quantidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Cod.Produto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_faturamento_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_faturamento_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_faturamento_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;270&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:18:&quot;Vlr. Unitario (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:38:&quot;mgt_faturamento_produto_valor_unitario&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Total (R$)&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:35:&quot;mgt_faturamento_produto_valor_total&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:30:&quot;mgt_faturamento_produto_numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_faturamento_produto_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:28:&quot;mgt_faturamento_produto_lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_faturamento_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:31:&quot;mgt_faturamento_produto_unidade&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_faturamento_produto_unidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:27:&quot;mgt_faturamento_produto_ipi&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_faturamento_produto_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:33:&quot;mgt_faturamento_produto_valor_ipi&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_faturamento_produto_valor_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}}]]></property>
        <property name="DataSource">conexaoprincipal.DS_MGT_Faturamentos_Produtos</property>
        <property name="Height">130</property>
        <property name="Left">9</property>
        <property name="Name">registros_produtos</property>
        <property name="ReadOnly">1</property>
        <property name="Top">15</property>
        <property name="Width">700</property>
        <property name="jsOnRowChanged">registros_produtosJSRowChanged</property>
        <property name="jsOnRowSaved"></property>
      </object>
      <object class="Button" name="bt_alterar" >
        <property name="Caption">Alterar Produto Selecionado</property>
        <property name="Height">25</property>
        <property name="Left">335</property>
        <property name="Name">bt_alterar</property>
        <property name="Top">148</property>
        <property name="Width">184</property>
        <property name="OnClick">bt_alterarClick</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados do Faturamento</property>
      <property name="Height">151</property>
      <property name="Left">6</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">249</property>
      <property name="Width">718</property>
      <object class="PageControl" name="dados_faturamentos" >
        <property name="ActiveLayer">Adicionais</property>
        <property name="Height">123</property>
        <property name="Left">8</property>
        <property name="Name">dados_faturamentos</property>
        <property name="TabIndex">0</property>
        <property name="Tabs"><![CDATA[a:2:{i:0;s:10:&quot;Adicionais&quot;;i:1;s:22:&quot;Condicoes de Pagamento&quot;;}]]></property>
        <property name="Top">15</property>
        <property name="Width">481</property>
        <object class="Label" name="Label11" >
          <property name="Caption">Cond.Pgto-01</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">6</property>
          <property name="Name">Label11</property>
          <property name="Top">30</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_1" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">87</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_1</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">26</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_1JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_1JSKeyUp</property>
        </object>
        <object class="Label" name="Label12" >
          <property name="Caption">Cond.Pgto-02</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">6</property>
          <property name="Name">Label12</property>
          <property name="Top">53</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_2" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">87</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_2</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">49</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_2JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_2JSKeyUp</property>
        </object>
        <object class="Label" name="Label13" >
          <property name="Caption">Cond.Pgto-03</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">6</property>
          <property name="Name">Label13</property>
          <property name="Top">76</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_3" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">87</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_3</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">72</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_3JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_3JSKeyUp</property>
        </object>
        <object class="Label" name="Label14" >
          <property name="Caption">Cond.Pgto-04</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">6</property>
          <property name="Name">Label14</property>
          <property name="Top">99</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_4" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">87</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_4</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">95</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_4JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_4JSKeyUp</property>
        </object>
        <object class="Label" name="Label15" >
          <property name="Caption">Cond.Pgto-05</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">187</property>
          <property name="Name">Label15</property>
          <property name="Top">30</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_5" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">268</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_5</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">26</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_5JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_5JSKeyUp</property>
        </object>
        <object class="Label" name="Label16" >
          <property name="Caption">Cond.Pgto-06</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">187</property>
          <property name="Name">Label16</property>
          <property name="Top">53</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_6" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">268</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_6</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">49</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_6JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_6JSKeyUp</property>
        </object>
        <object class="Label" name="Label17" >
          <property name="Caption">Cond.Pgto-07</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">187</property>
          <property name="Name">Label17</property>
          <property name="Top">76</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_7" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">268</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_7</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">72</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_7JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_7JSKeyUp</property>
        </object>
        <object class="Label" name="Label18" >
          <property name="Caption">Cond.Pgto-08</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">187</property>
          <property name="Name">Label18</property>
          <property name="Top">99</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_8" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">268</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_8</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">95</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_8JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_8JSKeyUp</property>
        </object>
        <object class="Label" name="Label19" >
          <property name="Caption">Cond.Pgto-09</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">363</property>
          <property name="Name">Label19</property>
          <property name="Top">30</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_9" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">444</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_9</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">26</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_9JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_9JSKeyUp</property>
        </object>
        <object class="Label" name="Label20" >
          <property name="Caption">Cond.Pgto-10</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">363</property>
          <property name="Name">Label20</property>
          <property name="Top">53</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_10" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">444</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_10</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">49</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_10JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_10JSKeyUp</property>
        </object>
        <object class="Label" name="Label21" >
          <property name="Caption">Cond.Pgto-11</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">363</property>
          <property name="Name">Label21</property>
          <property name="Top">76</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_11" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">444</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_11</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">72</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_11JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_11JSKeyUp</property>
        </object>
        <object class="Label" name="Label22" >
          <property name="Caption">Cond.Pgto-12</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">363</property>
          <property name="Name">Label22</property>
          <property name="Top">99</property>
          <property name="Width">78</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_condicao_pgto_12" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">444</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_faturamento_cliente_condicao_pgto_12</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">95</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_condicao_pgto_12JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_condicao_pgto_12JSKeyUp</property>
        </object>
        <object class="Label" name="Label23" >
          <property name="Caption"><![CDATA[DT.Inclusao]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">124</property>
          <property name="Name">Label23</property>
          <property name="Top">31</property>
          <property name="Width">69</property>
        </object>
        <object class="Edit" name="mgt_faturamento_data" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">194</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_faturamento_data</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">27</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_faturamento_dataJSKeyPress</property>
        </object>
        <object class="Label" name="Label24" >
          <property name="Caption"><![CDATA[Previsao Entrega]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">276</property>
          <property name="Name">Label24</property>
          <property name="Top">30</property>
          <property name="Width">95</property>
        </object>
        <object class="Label" name="Label25" >
          <property name="Caption">Desconto (%)</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="Name">Label25</property>
          <property name="Top">31</property>
          <property name="Width">77</property>
        </object>
        <object class="Edit" name="mgt_faturamento_cliente_desconto" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">88</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_faturamento_cliente_desconto</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">26</property>
          <property name="Width">29</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_descontoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_cliente_descontoJSKeyUp</property>
        </object>
        <object class="Label" name="Label48" >
          <property name="Caption">Transportadora</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">212</property>
          <property name="Name">Label48</property>
          <property name="Top">54</property>
          <property name="Width">85</property>
        </object>
        <object class="ComboBox" name="mgt_faturamento_cliente_transportadora" >
          <property name="Height">21</property>
          <property name="Items">a:0:{}</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">301</property>
          <property name="Name">mgt_faturamento_cliente_transportadora</property>
          <property name="Top">50</property>
          <property name="Width">175</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_transportadoraJSKeyPress</property>
        </object>
        <object class="Label" name="Label26" >
          <property name="Caption"><![CDATA[Solicitacao]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">23</property>
          <property name="Name">Label26</property>
          <property name="Top">53</property>
          <property name="Width">61</property>
        </object>
        <object class="ComboBox" name="mgt_faturamento_cliente_tipo_faturamento" >
          <property name="Height">21</property>
          <property name="ItemIndex">0</property>
          <property name="Items"><![CDATA[a:2:{s:11:&quot;Nota Fiscal&quot;;s:11:&quot;Nota Fiscal&quot;;s:16:&quot;Venda Programada&quot;;s:16:&quot;Venda Programada&quot;;}]]></property>
          <property name="Layer">Adicionais</property>
          <property name="Left">88</property>
          <property name="Name">mgt_faturamento_cliente_tipo_faturamento</property>
          <property name="Top">49</property>
          <property name="Width">117</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_tipo_faturamentoJSKeyPress</property>
        </object>
        <object class="Label" name="Label27" >
          <property name="Caption">Nro. Ordem de Compra</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="Name">Label27</property>
          <property name="Top">79</property>
          <property name="Width">133</property>
        </object>
        <object class="Edit" name="mgt_faturamento_ordem_compra" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_faturamento_ordem_compra</property>
          <property name="TabOrder">1</property>
          <property name="Top">95</property>
          <property name="Width">131</property>
          <property name="jsOnKeyPress">mgt_faturamento_ordem_compraJSKeyPress</property>
        </object>
        <object class="Label" name="Label46" >
          <property name="Caption"><![CDATA[Observacoes]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">224</property>
          <property name="Name">Label46</property>
          <property name="Top">87</property>
          <property name="Width">74</property>
        </object>
        <object class="Memo" name="mgt_faturamento_cliente_observacao" >
          <property name="Height">43</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">301</property>
          <property name="Lines">a:0:{}</property>
          <property name="Name">mgt_faturamento_cliente_observacao</property>
          <property name="Top">72</property>
          <property name="Width">175</property>
          <property name="jsOnKeyPress">mgt_faturamento_cliente_observacaoJSKeyPress</property>
        </object>
        <object class="DateTimePicker" name="mgt_faturamento_data_entrega" >
          <property name="Caption">mgt_faturamento_data_entrega</property>
          <property name="Height">21</property>
          <property name="IfFormat">%d/%m/%Y</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">374</property>
          <property name="Name">mgt_faturamento_data_entrega</property>
          <property name="Top">27</property>
          <property name="Width">102</property>
        </object>
      </object>
      <object class="GroupBox" name="GroupBox5" >
        <property name="Caption">Valores</property>
        <property name="Height">134</property>
        <property name="Left">490</property>
        <property name="Name">GroupBox5</property>
        <property name="Top">9</property>
        <property name="Width">218</property>
        <object class="Label" name="Label5" >
          <property name="Caption">Vlr. Desconto (R$)</property>
          <property name="Height">13</property>
          <property name="Left">7</property>
          <property name="Name">Label5</property>
          <property name="Top">37</property>
          <property name="Width">104</property>
        </object>
        <object class="Edit" name="mgt_faturamento_valor_desconto" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Left">113</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_faturamento_valor_desconto</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">33</property>
          <property name="Width">98</property>
        </object>
        <object class="Label" name="Label6" >
          <property name="Caption">Vlr. Pedido (R$)</property>
          <property name="Height">13</property>
          <property name="Left">21</property>
          <property name="Name">Label6</property>
          <property name="Top">15</property>
          <property name="Width">90</property>
        </object>
        <object class="Edit" name="mgt_faturamento_valor_pedido" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Left">113</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_faturamento_valor_pedido</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">11</property>
          <property name="Width">98</property>
        </object>
        <object class="Label" name="Label7" >
          <property name="Caption">Vlr. Frete (R$)</property>
          <property name="Height">13</property>
          <property name="Left">30</property>
          <property name="Name">Label7</property>
          <property name="Top">59</property>
          <property name="Width">81</property>
        </object>
        <object class="Edit" name="mgt_faturamento_valor_frete" >
          <property name="Height">21</property>
          <property name="Left">113</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_faturamento_valor_frete</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">55</property>
          <property name="Width">98</property>
          <property name="jsOnKeyPress">mgt_faturamento_valor_freteJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_faturamento_valor_freteJSKeyUp</property>
        </object>
        <object class="Label" name="Label8" >
          <property name="Caption">Vlr. IPI (R$)</property>
          <property name="Height">13</property>
          <property name="Left">41</property>
          <property name="Name">Label8</property>
          <property name="Top">81</property>
          <property name="Width">70</property>
        </object>
        <object class="Edit" name="mgt_faturamento_valor_ipi" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Left">113</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_faturamento_valor_ipi</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">77</property>
          <property name="Width">98</property>
        </object>
        <object class="Label" name="Label9" >
          <property name="Caption">Vlr. Total (R$)</property>
          <property name="Height">13</property>
          <property name="Left">30</property>
          <property name="Name">Label9</property>
          <property name="Top">112</property>
          <property name="Width">81</property>
        </object>
        <object class="Edit" name="mgt_faturamento_valor_total" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Left">113</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_faturamento_valor_total</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">108</property>
          <property name="Width">98</property>
        </object>
        <object class="Label" name="Label10" >
          <property name="Caption">------------------------------</property>
          <property name="Height">10</property>
          <property name="Left">60</property>
          <property name="Name">Label10</property>
          <property name="Top">98</property>
          <property name="Width">154</property>
        </object>
      </object>
    </object>
    <object class="Button" name="bt_procurar" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Procurar</property>
      <property name="Height">25</property>
      <property name="Left">653</property>
      <property name="Name">bt_procurar</property>
      <property name="Top">44</property>
      <property name="Width">67</property>
      <property name="OnClick">bt_procurarClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Informe os Dados do Faturamento&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FFFF80</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">15</property>
      <property name="Width">717</property>
    </object>
  </object>
  <object class="GroupBox" name="opcoes_faturamento" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">opcoes_faturamento</property>
    <property name="Top">447</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">649</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
    </object>
    <object class="Panel" name="Panel12" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel12</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label62" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label62</property>
      <property name="Top">16</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel13" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel13</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label63" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label63</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
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
    <property name="Caption">Adiciona Clientes</property>
    <property name="Height">284</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_clientes</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">504</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="GroupBox" name="GroupBox6" >
      <property name="Caption">Busca</property>
      <property name="Height">59</property>
      <property name="Left">11</property>
      <property name="Name">GroupBox6</property>
      <property name="ParentColor">0</property>
      <property name="Top">32</property>
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
      <property name="Top">93</property>
      <property name="Width">139</property>
    </object>
    <object class="DBGrid" name="registros" >
      <property name="Columns"><![CDATA[a:13:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Numero&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_numero&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Tipo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_codigo_tipo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:4:&quot;true&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_cliente_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;110&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Nome&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:16:&quot;mgt_cliente_nome&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:12:&quot;Razao Social&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:24:&quot;mgt_cliente_razao_social&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Desconto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:20:&quot;mgt_cliente_desconto&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 1&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_1&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 2&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_2&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 3&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_3&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Pgto. 4&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_cliente_condicao_pgto_4&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:14:&quot;Transportadora&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_transportadora&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Observacao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:23:&quot;mgt_cliente_observacoes&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Bloqueado&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:26:&quot;mgt_cliente_status_credito&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;62&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Clientes</property>
      <property name="Height">97</property>
      <property name="Left">13</property>
      <property name="Name">registros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">107</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registrosJSRowChanged</property>
      <property name="jsOnRowSaved"></property>
    </object>
    <object class="Label" name="Label31" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">15</property>
      <property name="Name">Label31</property>
      <property name="Top">224</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="adiciona_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">64</property>
      <property name="MaxLength">11</property>
      <property name="Name">adiciona_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">41</property>
    </object>
    <object class="Label" name="Label32" >
      <property name="Caption"><![CDATA[Cliente Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">106</property>
      <property name="Name">Label32</property>
      <property name="Top">207</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="adiciona_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">106</property>
      <property name="MaxLength">80</property>
      <property name="Name">adiciona_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">126</property>
    </object>
    <object class="Label" name="Label33" >
      <property name="Caption">Cliente Nome</property>
      <property name="Height">13</property>
      <property name="Left">236</property>
      <property name="Name">Label33</property>
      <property name="Top">207</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="adiciona_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">236</property>
      <property name="MaxLength">100</property>
      <property name="Name">adiciona_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">413</property>
    </object>
    <object class="Button" name="bt_adiciona_cliente" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Cliente</property>
      <property name="Height">25</property>
      <property name="Left">300</property>
      <property name="Name">bt_adiciona_cliente</property>
      <property name="Top">243</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adiciona_clienteClick</property>
    </object>
    <object class="Panel" name="adiciona_clientes_borda" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Cliente&lt;/b&gt;&lt;/center&gt;]]></property>
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
    <object class="Label" name="Label64" >
      <property name="Caption">Bloqueado</property>
      <property name="Height">13</property>
      <property name="Left">653</property>
      <property name="Name">Label64</property>
      <property name="Top">207</property>
      <property name="Width">62</property>
    </object>
    <object class="Edit" name="adiciona_cliente_bloqueado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">653</property>
      <property name="MaxLength">80</property>
      <property name="Name">adiciona_cliente_bloqueado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">220</property>
      <property name="Width">62</property>
    </object>
    <object class="Edit" name="MSG_Alerta" >
      <property name="BorderStyle">bsNone</property>
      <property name="Color">#EBE9ED</property>
      <property name="Font">
            <property name="Color">#FF0000</property>
      </property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">80</property>
      <property name="Name">MSG_Alerta</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">245</property>
      <property name="Width">234</property>
    </object>
  </object>
  <object class="GroupBox" name="adiciona_produtos" >
    <property name="Caption">Adiciona Produtos</property>
    <property name="Height">284</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_produtos</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">792</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label36" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label36</property>
      <property name="Top">89</property>
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
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">227</property>
      <property name="Name">Label39</property>
      <property name="Top">194</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_produto_descricao" >
      <property name="Height">21</property>
      <property name="Left">227</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">288</property>
      <property name="jsOnKeyPress">mgt_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_adicionar_produto" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Produto</property>
      <property name="Height">25</property>
      <property name="Left">170</property>
      <property name="Name">bt_adicionar_produto</property>
      <property name="Top">238</property>
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
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="GroupBox" name="GroupBox1" >
      <property name="Caption">Busca</property>
      <property name="Height">58</property>
      <property name="Left">13</property>
      <property name="Name">GroupBox1</property>
      <property name="Top">31</property>
      <property name="Width">705</property>
      <object class="Label" name="Label34" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label34</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">459</property>
        <property name="Name">Label35</property>
        <property name="Top">15</property>
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
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_busca_produtoJSKeyPress</property>
      </object>
      <object class="Button" name="bt_busca_produto" >
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">622</property>
        <property name="Name">bt_busca_produto</property>
        <property name="Top">24</property>
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
      <property name="Top">103</property>
      <property name="Width">701</property>
      <property name="jsOnRowChanged">registros_produtos_buscaJSRowChanged</property>
      <property name="jsOnRowSaved"></property>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">145</property>
      <property name="Name">Label40</property>
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_produto_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_produto_qtde" >
      <property name="Height">21</property>
      <property name="Left">517</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_qtde</property>
      <property name="Top">207</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_produto_qtdeJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_qtdeJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_produto_preco" >
      <property name="Height">21</property>
      <property name="Left">577</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_preco</property>
      <property name="Top">207</property>
      <property name="Width">68</property>
      <property name="jsOnKeyPress">mgt_produto_precoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_precoJSKeyUp</property>
    </object>
    <object class="Label" name="Label41" >
      <property name="Caption">Qtde</property>
      <property name="Height">13</property>
      <property name="Left">517</property>
      <property name="Name">Label41</property>
      <property name="Top">194</property>
      <property name="Width">58</property>
    </object>
    <object class="Label" name="Label42" >
      <property name="Caption"><![CDATA[Vlr.Unitario]]></property>
      <property name="Height">13</property>
      <property name="Left">577</property>
      <property name="Name">Label42</property>
      <property name="Top">194</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="Label43" >
      <property name="Caption">Vlr.Total</property>
      <property name="Height">13</property>
      <property name="Left">647</property>
      <property name="Name">Label43</property>
      <property name="Top">194</property>
      <property name="Width">68</property>
    </object>
    <object class="Edit" name="mgt_produto_valor_total" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">647</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">207</property>
      <property name="Width">68</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">720</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel3" >
      <property name="Color">#FF0000</property>
      <property name="Height">242</property>
      <property name="Left">6</property>
      <property name="Name">Panel3</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel4" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel4</property>
      <property name="ParentColor">0</property>
      <property name="Top">270</property>
      <property name="Width">711</property>
    </object>
    <object class="Label" name="Label44" >
      <property name="Caption">Vlr.IPI</property>
      <property name="Height">13</property>
      <property name="Left">577</property>
      <property name="Name">Label44</property>
      <property name="Top">229</property>
      <property name="Width">68</property>
    </object>
    <object class="Edit" name="mgt_produto_valor_ipi" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">577</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_valor_ipi</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">242</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="Label45" >
      <property name="Caption">Unidade</property>
      <property name="Height">13</property>
      <property name="Left">457</property>
      <property name="Name">Label45</property>
      <property name="Top">229</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_produto_unidade" >
      <property name="Height">21</property>
      <property name="Left">457</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_unidade</property>
      <property name="Top">242</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_produto_unidadeJSKeyPress</property>
    </object>
    <object class="Label" name="Label47" >
      <property name="Caption">Lote</property>
      <property name="Height">13</property>
      <property name="Left">364</property>
      <property name="Name">Label47</property>
      <property name="Top">229</property>
      <property name="Width">91</property>
    </object>
    <object class="Edit" name="mgt_produto_lote" >
      <property name="Height">21</property>
      <property name="Left">364</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_lote</property>
      <property name="Top">242</property>
      <property name="Width">91</property>
      <property name="jsOnKeyPress">mgt_produto_loteJSKeyPress</property>
    </object>
    <object class="Label" name="Label49" >
      <property name="Caption">IPI (%)</property>
      <property name="Height">13</property>
      <property name="Left">517</property>
      <property name="Name">Label49</property>
      <property name="Top">229</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_produto_ipi" >
      <property name="Height">21</property>
      <property name="Left">517</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_produto_ipi</property>
      <property name="Top">242</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_produto_ipiJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_produto_ipiJSKeyUp</property>
    </object>
    <object class="Button" name="bt_fechar_produto" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">663</property>
      <property name="Name">bt_fechar_produto</property>
      <property name="Top">238</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_produtoClick</property>
    </object>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">96</property>
    <property name="IsVisible">0</property>
    <property name="Left">56</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">1087</property>
    <property name="Width">619</property>
    <property name="jsOnClose"></property>
    <property name="jsOnMaximize"></property>
    <property name="jsOnMinimize"></property>
    <property name="jsOnMove"></property>
    <property name="jsOnRestore"></property>
    <object class="Label" name="confirmacao_mensagem" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[Voce deseja realmente remover o Produto: XXX do Faturamento?]]></property>
      <property name="Height">23</property>
      <property name="Left">16</property>
      <property name="Name">confirmacao_mensagem</property>
      <property name="Top">31</property>
      <property name="Width">592</property>
    </object>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">236</property>
      <property name="Name">bt_nao</property>
      <property name="Top">62</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">319</property>
      <property name="Name">bt_sim</property>
      <property name="Top">62</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_numero" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_alterar_produto_numero</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_codigo" >
    <property name="Height">18</property>
    <property name="Left">31</property>
    <property name="Name">hd_alterar_produto_codigo</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_referencia" >
    <property name="Height">18</property>
    <property name="Left">54</property>
    <property name="Name">hd_alterar_produto_referencia</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_descricao" >
    <property name="Height">18</property>
    <property name="Left">78</property>
    <property name="Name">hd_alterar_produto_descricao</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_qtde" >
    <property name="Height">18</property>
    <property name="Left">102</property>
    <property name="Name">hd_alterar_produto_qtde</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_preco" >
    <property name="Height">18</property>
    <property name="Left">126</property>
    <property name="Name">hd_alterar_produto_preco</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_valor_total" >
    <property name="Height">18</property>
    <property name="Left">149</property>
    <property name="Name">hd_alterar_produto_valor_total</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_lote" >
    <property name="Height">18</property>
    <property name="Left">171</property>
    <property name="Name">hd_alterar_produto_lote</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_unidade" >
    <property name="Height">18</property>
    <property name="Left">195</property>
    <property name="Name">hd_alterar_produto_unidade</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_ipi" >
    <property name="Height">18</property>
    <property name="Left">220</property>
    <property name="Name">hd_alterar_produto_ipi</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_alterar_produto_valor_ipi" >
    <property name="Height">18</property>
    <property name="Left">244</property>
    <property name="Name">hd_alterar_produto_valor_ipi</property>
    <property name="Top">1369</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="produto_remover_numero" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">produto_remover_numero</property>
    <property name="Top">1391</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="produto_remover_numero_faturamento" >
    <property name="Height">18</property>
    <property name="Left">31</property>
    <property name="Name">produto_remover_numero_faturamento</property>
    <property name="Top">1391</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="produto_remover_codigo" >
    <property name="Height">18</property>
    <property name="Left">54</property>
    <property name="Name">produto_remover_codigo</property>
    <property name="Top">1391</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="produto_remover_descricao" >
    <property name="Height">18</property>
    <property name="Left">78</property>
    <property name="Name">produto_remover_descricao</property>
    <property name="Top">1391</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_desconto" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_faturamento_cliente_desconto</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_transportadora" >
    <property name="Height">18</property>
    <property name="Left">31</property>
    <property name="Name">hd_faturamento_cliente_transportadora</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_observacao" >
    <property name="Height">18</property>
    <property name="Left">54</property>
    <property name="Name">hd_faturamento_cliente_observacao</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_condicao_pgto_1" >
    <property name="Height">18</property>
    <property name="Left">78</property>
    <property name="Name">hd_faturamento_cliente_condicao_pgto_1</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_condicao_pgto_2" >
    <property name="Height">18</property>
    <property name="Left">102</property>
    <property name="Name">hd_faturamento_cliente_condicao_pgto_2</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_condicao_pgto_3" >
    <property name="Height">18</property>
    <property name="Left">126</property>
    <property name="Name">hd_faturamento_cliente_condicao_pgto_3</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="HiddenField" name="hd_faturamento_cliente_condicao_pgto_4" >
    <property name="Height">18</property>
    <property name="Left">149</property>
    <property name="Name">hd_faturamento_cliente_condicao_pgto_4</property>
    <property name="Top">1412</property>
    <property name="Width">20</property>
  </object>
  <object class="GroupBox" name="alterar_produto" >
    <property name="Caption"><![CDATA[Alteracao de Produto]]></property>
    <property name="Height">177</property>
    <property name="Left">15</property>
    <property name="Name">alterar_produto</property>
    <property name="Top">1188</property>
    <property name="Visible">0</property>
    <property name="Width">716</property>
    <object class="Label" name="Label50" >
      <property name="Caption">Alterar?</property>
      <property name="Height">13</property>
      <property name="Left">221</property>
      <property name="Name">Label50</property>
      <property name="Top">135</property>
      <property name="Width">48</property>
    </object>
    <object class="Button" name="bt_alterar_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">277</property>
      <property name="Name">bt_alterar_nao</property>
      <property name="Top">129</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterar_naoClick</property>
    </object>
    <object class="Button" name="bt_alterar_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">360</property>
      <property name="Name">bt_alterar_sim</property>
      <property name="Top">129</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterar_simClick</property>
    </object>
    <object class="Panel" name="Panel8" >
      <property name="Color">#004080</property>
      <property name="Height">136</property>
      <property name="Left">6</property>
      <property name="Name">Panel8</property>
      <property name="ParentColor">0</property>
      <property name="Top">30</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel9" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Alteracao de Produto&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#004080</property>
      <property name="Font">
            <property name="Color">#FFFFFF</property>
      </property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">Panel9</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">16</property>
      <property name="Width">701</property>
    </object>
    <object class="Panel" name="Panel10" >
      <property name="Color">#004080</property>
      <property name="Height">136</property>
      <property name="Left">704</property>
      <property name="Name">Panel10</property>
      <property name="ParentColor">0</property>
      <property name="Top">30</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel11" >
      <property name="Color">#004080</property>
      <property name="Font">
            <property name="Color">#FFFFFF</property>
      </property>
      <property name="Height">3</property>
      <property name="Left">6</property>
      <property name="Name">Panel11</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">166</property>
      <property name="Width">701</property>
    </object>
    <object class="Label" name="Label51" >
      <property name="Caption">Produto</property>
      <property name="Height">13</property>
      <property name="Left">23</property>
      <property name="Name">Label51</property>
      <property name="Top">61</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label52" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">69</property>
      <property name="Name">Label52</property>
      <property name="Top">44</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">69</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_alterar_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">57</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label53" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">150</property>
      <property name="Name">Label53</property>
      <property name="Top">44</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">150</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_alterar_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">57</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label54" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">231</property>
      <property name="Name">Label54</property>
      <property name="Top">44</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_descricao" >
      <property name="Height">21</property>
      <property name="Left">231</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_alterar_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">57</property>
      <property name="Width">257</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label55" >
      <property name="Caption">Qtde</property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label55</property>
      <property name="Top">44</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_qtde" >
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_qtde</property>
      <property name="Top">57</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_qtdeJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_alterar_produto_qtdeJSKeyUp</property>
    </object>
    <object class="Label" name="Label56" >
      <property name="Caption"><![CDATA[Vlr.Unitario]]></property>
      <property name="Height">13</property>
      <property name="Left">550</property>
      <property name="Name">Label56</property>
      <property name="Top">44</property>
      <property name="Width">68</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_preco" >
      <property name="Height">21</property>
      <property name="Left">550</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_preco</property>
      <property name="Top">57</property>
      <property name="Width">68</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_precoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_alterar_produto_precoJSKeyUp</property>
    </object>
    <object class="Label" name="Label57" >
      <property name="Caption">Vlr.Total</property>
      <property name="Height">13</property>
      <property name="Left">620</property>
      <property name="Name">Label57</property>
      <property name="Top">44</property>
      <property name="Width">68</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_valor_total" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">620</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_valor_total</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">57</property>
      <property name="Width">68</property>
    </object>
    <object class="Label" name="Label58" >
      <property name="Caption">Lote</property>
      <property name="Height">13</property>
      <property name="Left">338</property>
      <property name="Name">Label58</property>
      <property name="Top">81</property>
      <property name="Width">91</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_lote" >
      <property name="Height">21</property>
      <property name="Left">338</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_lote</property>
      <property name="Top">95</property>
      <property name="Width">91</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_loteJSKeyPress</property>
    </object>
    <object class="Label" name="Label59" >
      <property name="Caption">Unidade</property>
      <property name="Height">13</property>
      <property name="Left">431</property>
      <property name="Name">Label59</property>
      <property name="Top">82</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_unidade" >
      <property name="Height">21</property>
      <property name="Left">431</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_unidade</property>
      <property name="Top">95</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_unidadeJSKeyPress</property>
    </object>
    <object class="Label" name="Label60" >
      <property name="Caption">IPI (%)</property>
      <property name="Height">13</property>
      <property name="Left">491</property>
      <property name="Name">Label60</property>
      <property name="Top">82</property>
      <property name="Width">58</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_ipi" >
      <property name="Height">21</property>
      <property name="Left">491</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_ipi</property>
      <property name="Top">95</property>
      <property name="Width">58</property>
      <property name="jsOnKeyPress">mgt_alterar_produto_ipiJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_alterar_produto_ipiJSKeyUp</property>
    </object>
    <object class="Label" name="Label61" >
      <property name="Caption">Vlr.IPI</property>
      <property name="Height">13</property>
      <property name="Left">550</property>
      <property name="Name">Label61</property>
      <property name="Top">82</property>
      <property name="Width">68</property>
    </object>
    <object class="Edit" name="mgt_alterar_produto_valor_ipi" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">550</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_alterar_produto_valor_ipi</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">95</property>
      <property name="Width">68</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">717</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
