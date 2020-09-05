<?php
<object class="nfemissaonotaimp" name="nfemissaonotaimp" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">974</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfemissaonotaimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfemissaonotaimpCreate</property>
  <property name="jsOnLoad">nfemissaonotaimpJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Emissao da Nota Fiscal - Emissao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="dados_faturamento" >
    <property name="Caption">Nota Fiscal</property>
    <property name="Height">720</property>
    <property name="Left">8</property>
    <property name="Name">dados_faturamento</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption">Faturamento</property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label1</property>
      <property name="Top">50</property>
      <property name="Width">71</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_faturamento" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">85</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_faturamento</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">46</property>
      <property name="Width">61</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_faturamentoJSKeyPress</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">161</property>
      <property name="Name">Label2</property>
      <property name="Top">50</property>
      <property name="Width">44</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">208</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_nota_fiscal_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">41</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_numeroJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption">Cliente Nome</property>
      <property name="Height">13</property>
      <property name="Left">382</property>
      <property name="Name">Label3</property>
      <property name="Top">32</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">382</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_nota_fiscal_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">339</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Cliente Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">252</property>
      <property name="Name">Label4</property>
      <property name="Top">32</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">252</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_nota_fiscal_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">46</property>
      <property name="Width">126</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_codigoJSKeyPress</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Produtos</property>
      <property name="Height">142</property>
      <property name="Left">6</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">217</property>
      <property name="Width">718</property>
      <object class="DBGrid" name="registros_produtos" >
        <property name="Columns"><![CDATA[a:15:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:11:&quot;Cod.Produto&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:30:&quot;mgt_faturamento_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_faturamento_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;200&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:4:&quot;Lote&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:28:&quot;mgt_faturamento_produto_lote&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Cl.Fisc.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:44:&quot;mgt_faturamento_produto_classificacao_fiscal&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;60&quot;;}i:4;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Sit.Trib.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:43:&quot;mgt_faturamento_produto_situacao_tributaria&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:5;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:5:&quot;Unid.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_faturamento_produto_unidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:6;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Quant.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_faturamento_produto_quantidade&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:7;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Vlr.Unit.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:38:&quot;mgt_faturamento_produto_valor_unitario&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:8;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Vlr.Total&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:35:&quot;mgt_faturamento_produto_valor_total&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:9;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:8:&quot;Aliq.IPI&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_faturamento_produto_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;50&quot;;}i:10;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:7:&quot;Vlr.IPI&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:33:&quot;mgt_faturamento_produto_valor_ipi&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;100&quot;;}i:11;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:34:&quot;mgt_faturamento_produto_referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:34:&quot;mgt_faturamento_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:12;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:31:&quot;mgt_faturamento_produto_posicao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:31:&quot;mgt_faturamento_produto_posicao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:13;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:43:&quot;mgt_faturamento_produto_descricao_detalhada&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:43:&quot;mgt_faturamento_produto_descricao_detalhada&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:5:&quot;false&quot;;s:5:&quot;Width&quot;;s:1:&quot;0&quot;;}i:14;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;N.C.M.&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:27:&quot;mgt_faturamento_produto_ncm&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}}]]></property>
        <property name="DataSource">conexaoprincipal.DS_MGT_Faturamentos_Produtos</property>
        <property name="Height">111</property>
        <property name="Left">9</property>
        <property name="Name">registros_produtos</property>
        <property name="ReadOnly">1</property>
        <property name="Top">19</property>
        <property name="Width">699</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados do Faturamento</property>
      <property name="Height">352</property>
      <property name="Left">6</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">359</property>
      <property name="Width">718</property>
      <object class="PageControl" name="itens_faturamento" >
        <property name="ActiveLayer">Adicionais</property>
        <property name="Height">322</property>
        <property name="Left">9</property>
        <property name="Name">itens_faturamento</property>
        <property name="TabIndex">0</property>
        <property name="Tabs"><![CDATA[a:5:{i:0;s:10:&quot;Adicionais&quot;;i:1;s:22:&quot;Condicoes de Pagamento&quot;;i:2;s:22:&quot;Observacoes Adicionais&quot;;i:3;s:13:&quot;Transportador&quot;;i:4;s:20:&quot;Calculo dos Impostos&quot;;}]]></property>
        <property name="Top">20</property>
        <property name="Width">701</property>
        <object class="Label" name="Label26" >
          <property name="Caption"><![CDATA[Solicitacao]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="Name">Label26</property>
          <property name="Top">34</property>
          <property name="Width">61</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_tipo_faturamento" >
          <property name="Enabled">0</property>
          <property name="Height">21</property>
          <property name="ItemIndex">Nota Fiscal</property>
          <property name="Items"><![CDATA[a:2:{s:11:&quot;Nota Fiscal&quot;;s:11:&quot;Nota Fiscal&quot;;s:16:&quot;Venda Programada&quot;;s:16:&quot;Venda Programada&quot;;}]]></property>
          <property name="Layer">Adicionais</property>
          <property name="Left">70</property>
          <property name="Name">mgt_nota_fiscal_tipo_faturamento</property>
          <property name="Top">30</property>
          <property name="Width">132</property>
          <property name="OnChange">mgt_nota_fiscal_tipo_faturamentoChange</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_faturamentoJSKeyPress</property>
        </object>
        <object class="Label" name="Label75" >
          <property name="Caption">Emite o Lote</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">557</property>
          <property name="Name">Label75</property>
          <property name="Top">82</property>
          <property name="Width">76</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_emite_lote" >
          <property name="Height">21</property>
          <property name="ItemIndex">N</property>
          <property name="Items"><![CDATA[a:2:{s:1:&quot;S&quot;;s:3:&quot;Sim&quot;;s:1:&quot;N&quot;;s:3:&quot;Nao&quot;;}]]></property>
          <property name="Layer">Adicionais</property>
          <property name="Left">638</property>
          <property name="Name">mgt_nota_fiscal_emite_lote</property>
          <property name="Top">78</property>
          <property name="Width">56</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_emite_loteJSKeyPress</property>
        </object>
        <object class="Label" name="Label25" >
          <property name="Caption">Desconto (%)</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">379</property>
          <property name="Name">Label25</property>
          <property name="Top">59</property>
          <property name="Width">77</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_desconto" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">458</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_cliente_desconto</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">55</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_descontoJSKeyPress</property>
        </object>
        <object class="Label" name="Label23" >
          <property name="Caption"><![CDATA[DT.Inclusao]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">546</property>
          <property name="Name">Label23</property>
          <property name="Top">59</property>
          <property name="Width">73</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_data" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">622</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_data</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">55</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dataJSKeyPress</property>
        </object>
        <object class="Label" name="Label24" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Saida&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">379</property>
          <property name="Name">Label24</property>
          <property name="Top">34</property>
          <property name="Width">53</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_data_entrega" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">433</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_data_entrega</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">30</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_data_entregaJSKeyPress</property>
        </object>
        <object class="Label" name="Label27" >
          <property name="Caption">Nro. Ordem de Compra</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">352</property>
          <property name="Name">Label27</property>
          <property name="Top">126</property>
          <property name="Width">133</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_ordem_compra" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">488</property>
          <property name="MaxLength">20</property>
          <property name="Name">mgt_nota_fiscal_ordem_compra</property>
          <property name="TabOrder">1</property>
          <property name="Top">122</property>
          <property name="Width">207</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_ordem_compraJSKeyPress</property>
        </object>
        <object class="Label" name="Label77" >
          <property name="Caption">Dados Adicionais da Nota Fiscal</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="Name">Label77</property>
          <property name="Top">226</property>
          <property name="Width">182</property>
        </object>
        <object class="Memo" name="mgt_nota_fiscal_observacao_nota" >
          <property name="Height">55</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">4</property>
          <property name="Lines">a:0:{}</property>
          <property name="Name">mgt_nota_fiscal_observacao_nota</property>
          <property name="Top">239</property>
          <property name="Width">340</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_notaJSKeyPress</property>
        </object>
        <object class="Memo" name="mgt_nota_fiscal_observacao_faturamento" >
          <property name="Height">55</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">352</property>
          <property name="Lines">a:0:{}</property>
          <property name="Name">mgt_nota_fiscal_observacao_faturamento</property>
          <property name="Top">239</property>
          <property name="Width">340</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_faturamentoJSKeyPress</property>
        </object>
        <object class="Label" name="Label46" >
          <property name="Caption"><![CDATA[Observacoes do Faturamento]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">352</property>
          <property name="Name">Label46</property>
          <property name="Top">226</property>
          <property name="Width">171</property>
        </object>
        <object class="CheckBox" name="mgt_nota_fiscal_imprime_observacao_nota" >
          <property name="Caption">Imprime os Dados Adicionais na Nota Fiscal</property>
          <property name="Checked">1</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">4</property>
          <property name="Name">mgt_nota_fiscal_imprime_observacao_nota</property>
          <property name="Top">297</property>
          <property name="Width">270</property>
          <property name="jsOnClick">mgt_nota_fiscal_imprime_observacao_notaJSClick</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_imprime_observacao_notaJSKeyPress</property>
        </object>
        <object class="Label" name="Label11" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-01]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label11</property>
          <property name="Top">47</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_1" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">339</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_1</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">43</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_1JSKeyUp</property>
        </object>
        <object class="Label" name="Label12" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-02]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label12</property>
          <property name="Top">70</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_2" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">339</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_2</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">66</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_2JSKeyUp</property>
        </object>
        <object class="Label" name="Label13" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-03]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label13</property>
          <property name="Top">93</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_3" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">339</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_3</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_3JSKeyUp</property>
        </object>
        <object class="Label" name="Label14" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-04]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label14</property>
          <property name="Top">116</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_4" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">339</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_4</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">112</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_4JSKeyUp</property>
        </object>
        <object class="Label" name="Label15" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-05]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label15</property>
          <property name="Top">139</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_5" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_5</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">135</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_5JSKeyUp</property>
        </object>
        <object class="Label" name="Label16" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-06]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label16</property>
          <property name="Top">162</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_6" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_6</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">158</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_6JSKeyUp</property>
        </object>
        <object class="Label" name="Label22" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-12]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label22</property>
          <property name="Top">300</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_12" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_12</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">296</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_12JSKeyUp</property>
        </object>
        <object class="Label" name="Label21" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-11]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label21</property>
          <property name="Top">277</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_11" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_11</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">273</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_11JSKeyUp</property>
        </object>
        <object class="Label" name="Label20" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-10]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label20</property>
          <property name="Top">254</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_10" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_10</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">250</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_10JSKeyUp</property>
        </object>
        <object class="Label" name="Label19" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-09]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label19</property>
          <property name="Top">231</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_9" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_9</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">227</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_9JSKeyUp</property>
        </object>
        <object class="Label" name="Label18" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-08]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label18</property>
          <property name="Top">208</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_8" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_8</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">204</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_8JSKeyUp</property>
        </object>
        <object class="Label" name="Label17" >
          <property name="Caption"><![CDATA[Condicao de Pagamento-07]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">178</property>
          <property name="Name">Label17</property>
          <property name="Top">185</property>
          <property name="Width">157</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cliente_condicao_pgto_7" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">338</property>
          <property name="MaxLength">3</property>
          <property name="Name">mgt_nota_fiscal_cliente_condicao_pgto_7</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">181</property>
          <property name="Width">30</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cliente_condicao_pgto_7JSKeyUp</property>
        </object>
        <object class="Label" name="Label86" >
          <property name="Caption"><![CDATA[Informe abaixo as Observacoes Adicionais que sairao no Corpo da Nota Fiscal:]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">17</property>
          <property name="Name">Label86</property>
          <property name="Top">29</property>
          <property name="Width">468</property>
        </object>
        <object class="Label" name="Label87" >
          <property name="Caption">Linha 01</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label87</property>
          <property name="Top">51</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label88" >
          <property name="Caption">Linha 02</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label88</property>
          <property name="Top">74</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label89" >
          <property name="Caption">Linha 03</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label89</property>
          <property name="Top">98</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label90" >
          <property name="Caption">Linha 04</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label90</property>
          <property name="Top">120</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label91" >
          <property name="Caption">Linha 05</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label91</property>
          <property name="Top">143</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label92" >
          <property name="Caption">Linha 06</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label92</property>
          <property name="Top">166</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label93" >
          <property name="Caption">Linha 07</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">17</property>
          <property name="Name">Label93</property>
          <property name="Top">190</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label94" >
          <property name="Caption">Linha 08</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label94</property>
          <property name="Top">212</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label95" >
          <property name="Caption">Linha 09</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label95</property>
          <property name="Top">235</property>
          <property name="Width">51</property>
        </object>
        <object class="Label" name="Label96" >
          <property name="Caption">Linha 10</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">16</property>
          <property name="Name">Label96</property>
          <property name="Top">257</property>
          <property name="Width">51</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_10" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_10</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">253</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_10JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_9" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_9</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">231</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_9JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_8" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_8</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">208</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_8JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_7" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_7</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">186</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_7JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_6" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_6</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">162</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_6JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_5" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_5</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">139</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_5JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_4" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_4</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">116</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_4JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_3" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_3</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">93</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_3JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_2" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_2</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">70</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_2JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_observacao_adicional_1" >
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">71</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_observacao_adicional_1</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Top">47</property>
          <property name="Width">595</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_observacao_adicional_1JSKeyPress</property>
        </object>
        <object class="Label" name="Label72" >
          <property name="Caption">Pagamento do Frete</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">8</property>
          <property name="Name">Label72</property>
          <property name="Top">52</property>
          <property name="Width">117</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_pagamento_frete" >
          <property name="Height">21</property>
          <property name="ItemIndex">Cliente</property>
          <property name="Items"><![CDATA[a:2:{s:7:&quot;Cliente&quot;;s:7:&quot;Cliente&quot;;s:7:&quot;Empresa&quot;;s:7:&quot;Empresa&quot;;}]]></property>
          <property name="Layer">Transportador</property>
          <property name="Left">130</property>
          <property name="Name">mgt_nota_fiscal_pagamento_frete</property>
          <property name="Top">48</property>
          <property name="Width">88</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_pagamento_freteJSKeyPress</property>
        </object>
        <object class="Label" name="Label70" >
          <property name="Caption">Transporte</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">226</property>
          <property name="Name">Label70</property>
          <property name="Top">52</property>
          <property name="Width">61</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_tipo_transporte" >
          <property name="Height">21</property>
          <property name="ItemIndex"><![CDATA[Rodoviario]]></property>
          <property name="Items"><![CDATA[a:4:{s:10:&quot;Rodoviario&quot;;s:10:&quot;Rodoviario&quot;;s:5:&quot;Aereo&quot;;s:5:&quot;Aereo&quot;;s:8:&quot;Maritimo&quot;;s:8:&quot;Maritimo&quot;;s:11:&quot;Ferroviario&quot;;s:11:&quot;Ferroviario&quot;;}]]></property>
          <property name="Layer">Transportador</property>
          <property name="Left">294</property>
          <property name="Name">mgt_nota_fiscal_tipo_transporte</property>
          <property name="Top">48</property>
          <property name="Width">95</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_transporteJSKeyPress</property>
        </object>
        <object class="Label" name="Label48" >
          <property name="Caption">Transportadora</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">398</property>
          <property name="Name">Label48</property>
          <property name="Top">52</property>
          <property name="Width">85</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_transportadora" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Items">a:0:{}</property>
          <property name="Layer">Transportador</property>
          <property name="Left">491</property>
          <property name="Name">mgt_nota_fiscal_transportadora</property>
          <property name="ParentColor">0</property>
          <property name="Top">48</property>
          <property name="Width">201</property>
          <property name="OnChange">mgt_nota_fiscal_transportadoraChange</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadoraJSKeyPress</property>
        </object>
        <object class="Label" name="Label73" >
          <property name="Caption">Aliquota do ICMS</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">163</property>
          <property name="Name">Label73</property>
          <property name="Top">60</property>
          <property name="Width">100</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_aliquota_icms" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">269</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_aliquota_icms</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">56</property>
          <property name="Width">40</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_aliquota_icmsJSKeyPress</property>
        </object>
        <object class="Label" name="Label74" >
          <property name="Caption"><![CDATA[Base de Caculo do ICMS Reduzida (%)]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">44</property>
          <property name="Name">Label74</property>
          <property name="Top">87</property>
          <property name="Width">220</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_base_aliquota_icms_reduzida" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">269</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_base_aliquota_icms_reduzida</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">82</property>
          <property name="Width">40</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_base_aliquota_icms_reduzidaJSKeyPress</property>
        </object>
        <object class="Label" name="Label7" >
          <property name="Caption">Vlr. Frete</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">5</property>
          <property name="Name">Label7</property>
          <property name="Top">247</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_frete" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">5</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_frete</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">260</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_freteJSKeyPress</property>
        </object>
        <object class="Label" name="Label8" >
          <property name="Caption">Vlr. Total do IPI</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">397</property>
          <property name="Name">Label8</property>
          <property name="Top">246</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_ipi" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">397</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_ipi</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">260</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_ipiJSKeyPress</property>
        </object>
        <object class="Label" name="Label9" >
          <property name="Caption">Vlr. Total</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">547</property>
          <property name="Name">Label9</property>
          <property name="Top">245</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_total" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">547</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_total</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">260</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_totalJSKeyPress</property>
        </object>
        <object class="CheckBox" name="mgt_nota_fiscal_zerar_base_icms" >
          <property name="Caption"><![CDATA[Zerar a Base de Calculo do ICMS]]></property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">440</property>
          <property name="Name">mgt_nota_fiscal_zerar_base_icms</property>
          <property name="Top">117</property>
          <property name="Width">209</property>
          <property name="jsOnClick">mgt_nota_fiscal_zerar_base_icmsJSClick</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_zerar_base_icmsJSKeyPress</property>
        </object>
        <object class="CheckBox" name="mgt_nota_fiscal_consumo" >
          <property name="Caption">Nota Fiscal para Consumo</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">440</property>
          <property name="Name">mgt_nota_fiscal_consumo</property>
          <property name="Top">89</property>
          <property name="Width">173</property>
          <property name="jsOnClick">mgt_nota_fiscal_consumoJSClick</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_consumoJSKeyPress</property>
        </object>
        <object class="CheckBox" name="mgt_nota_fiscal_revenda" >
          <property name="Caption">Revenda</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">440</property>
          <property name="Name">mgt_nota_fiscal_revenda</property>
          <property name="Top">60</property>
          <property name="Width">83</property>
          <property name="jsOnClick">mgt_nota_fiscal_revendaJSClick</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_revendaJSKeyPress</property>
        </object>
        <object class="Label" name="Label78" >
          <property name="Caption">Qtde</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">10</property>
          <property name="Name">Label78</property>
          <property name="Top">272</property>
          <property name="Width">30</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_qtde" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">46</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_qtde</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">268</property>
          <property name="Width">29</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_qtdeJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_qtdeJSKeyUp</property>
        </object>
        <object class="Label" name="Label79" >
          <property name="Caption"><![CDATA[Especie]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">84</property>
          <property name="Name">Label79</property>
          <property name="Top">272</property>
          <property name="Width">44</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_especie" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">130</property>
          <property name="MaxLength">100</property>
          <property name="Name">mgt_nota_fiscal_especie</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">268</property>
          <property name="Width">70</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_especieJSKeyPress</property>
        </object>
        <object class="Label" name="Label80" >
          <property name="Caption">Marca</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">207</property>
          <property name="Name">Label80</property>
          <property name="Top">272</property>
          <property name="Width">34</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_marca" >
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">250</property>
          <property name="MaxLength">100</property>
          <property name="Name">mgt_nota_fiscal_marca</property>
          <property name="TabOrder">1</property>
          <property name="Top">268</property>
          <property name="Width">70</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_marcaJSKeyPress</property>
        </object>
        <object class="Label" name="Label81" >
          <property name="Caption">Peso Bruto</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">433</property>
          <property name="Name">Label81</property>
          <property name="Top">272</property>
          <property name="Width">62</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_peso_bruto" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">499</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_peso_bruto</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">268</property>
          <property name="Width">55</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_peso_brutoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_peso_brutoJSKeyUp</property>
        </object>
        <object class="Label" name="Label82" >
          <property name="Caption">Peso Liquido</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">559</property>
          <property name="Name">Label82</property>
          <property name="Top">272</property>
          <property name="Width">72</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_peso_liquido" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">634</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_peso_liquido</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Text">0</property>
          <property name="Top">268</property>
          <property name="Width">55</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_peso_liquidoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_peso_liquidoJSKeyUp</property>
        </object>
        <object class="Label" name="Label10" >
          <property name="Caption"><![CDATA[Nome / Razao Social]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">10</property>
          <property name="Name">Label10</property>
          <property name="Top">76</property>
          <property name="Width">121</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_razao_social" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">10</property>
          <property name="MaxLength">100</property>
          <property name="Name">mgt_nota_fiscal_transportadora_razao_social</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">313</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_razao_socialJSKeyPress</property>
        </object>
        <object class="Label" name="Label98" >
          <property name="Caption"><![CDATA[Placa do Veiculo]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">329</property>
          <property name="Name">Label98</property>
          <property name="Top">76</property>
          <property name="Width">93</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_veiculo_placa" >
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">329</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_transportadora_veiculo_placa</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">92</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_veiculo_placaJSKeyPress</property>
        </object>
        <object class="Label" name="Label99" >
          <property name="Caption"><![CDATA[Estado do Veiculo]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">426</property>
          <property name="Name">Label99</property>
          <property name="Top">76</property>
          <property name="Width">101</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_veiculo_estado" >
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">426</property>
          <property name="MaxLength">2</property>
          <property name="Name">mgt_nota_fiscal_transportadora_veiculo_estado</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">101</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_veiculo_estadoJSKeyPress</property>
        </object>
        <object class="Label" name="Label100" >
          <property name="Caption">CNPJ / CPF</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">532</property>
          <property name="Name">Label100</property>
          <property name="Top">76</property>
          <property name="Width">101</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_cnpj" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">532</property>
          <property name="MaxLength">20</property>
          <property name="Name">mgt_nota_fiscal_transportadora_cnpj</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">160</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_cnpjJSKeyPress</property>
        </object>
        <object class="Label" name="Label101" >
          <property name="Caption"><![CDATA[Numero]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">326</property>
          <property name="Name">Label101</property>
          <property name="Top">272</property>
          <property name="Width">46</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_vol_numero" >
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">377</property>
          <property name="MaxLength">100</property>
          <property name="Name">mgt_nota_fiscal_vol_numero</property>
          <property name="TabOrder">1</property>
          <property name="Top">268</property>
          <property name="Width">50</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_vol_numeroJSKeyPress</property>
        </object>
        <object class="Label" name="Label102" >
          <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">8</property>
          <property name="Name">Label102</property>
          <property name="Top">176</property>
          <property name="Width">177</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_endereco" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">8</property>
          <property name="MaxLength">100</property>
          <property name="Name">mgt_nota_fiscal_transportadora_endereco</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">189</property>
          <property name="Width">579</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_enderecoJSKeyPress</property>
        </object>
        <object class="Label" name="Label103" >
          <property name="Caption">Complemento</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">590</property>
          <property name="Name">Label103</property>
          <property name="Top">176</property>
          <property name="Width">85</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_complemento" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">590</property>
          <property name="MaxLength">80</property>
          <property name="Name">mgt_nota_fiscal_transportadora_complemento</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">189</property>
          <property name="Width">100</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_complementoJSKeyPress</property>
        </object>
        <object class="Label" name="Label104" >
          <property name="Caption">Bairro</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">9</property>
          <property name="Name">Label104</property>
          <property name="Top">211</property>
          <property name="Width">50</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_bairro" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">8</property>
          <property name="MaxLength">80</property>
          <property name="Name">mgt_nota_fiscal_transportadora_bairro</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">224</property>
          <property name="Width">260</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_bairroJSKeyPress</property>
        </object>
        <object class="Label" name="Label105" >
          <property name="Caption">Cidade</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">272</property>
          <property name="Name">Label105</property>
          <property name="Top">211</property>
          <property name="Width">75</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_cidade" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">272</property>
          <property name="MaxLength">80</property>
          <property name="Name">mgt_nota_fiscal_transportadora_cidade</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">224</property>
          <property name="Width">270</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_cidadeJSKeyPress</property>
        </object>
        <object class="Label" name="Label106" >
          <property name="Caption">Estado</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">544</property>
          <property name="Name">Label106</property>
          <property name="Top">211</property>
          <property name="Width">69</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_estado" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">544</property>
          <property name="MaxLength">2</property>
          <property name="Name">mgt_nota_fiscal_transportadora_estado</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">224</property>
          <property name="Width">72</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_estadoJSKeyPress</property>
        </object>
        <object class="Label" name="Label107" >
          <property name="Caption">CEP</property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">618</property>
          <property name="Name">Label107</property>
          <property name="Top">211</property>
          <property name="Width">69</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_cep" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">618</property>
          <property name="MaxLength">9</property>
          <property name="Name">mgt_nota_fiscal_transportadora_cep</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="Top">224</property>
          <property name="Width">72</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_cepJSKeyPress</property>
        </object>
        <object class="Label" name="Label108" >
          <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">10</property>
          <property name="Name">Label108</property>
          <property name="Top">113</property>
          <property name="Width">101</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_insc_est" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">10</property>
          <property name="MaxLength">20</property>
          <property name="Name">mgt_nota_fiscal_transportadora_insc_est</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">126</property>
          <property name="Width">160</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_insc_estJSKeyPress</property>
        </object>
        <object class="Label" name="Label109" >
          <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">172</property>
          <property name="Name">Label109</property>
          <property name="Top">113</property>
          <property name="Width">131</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_transportadora_insc_mun" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Transportador</property>
          <property name="Left">172</property>
          <property name="MaxLength">20</property>
          <property name="Name">mgt_nota_fiscal_transportadora_insc_mun</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">126</property>
          <property name="Width">151</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_transportadora_insc_munJSKeyPress</property>
        </object>
        <object class="Label" name="Label110" >
          <property name="Caption"><![CDATA[Base de Calculo do ICMS]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">5</property>
          <property name="Name">Label110</property>
          <property name="Top">185</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_base_icms" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">5</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_base_icms</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">198</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_base_icmsJSKeyPress</property>
        </object>
        <object class="Label" name="Label111" >
          <property name="Caption">Valor do ICMS</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">154</property>
          <property name="Name">Label111</property>
          <property name="Top">185</property>
          <property name="Width">90</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_icms" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">154</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_icms</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">198</property>
          <property name="Width">90</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_icmsJSKeyPress</property>
        </object>
        <object class="Label" name="Label112" >
          <property name="Caption"><![CDATA[B.Calc.ICMS Substituicao]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">250</property>
          <property name="Name">Label112</property>
          <property name="Top">185</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_base_icms_sub" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">250</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_base_icms_sub</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">198</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_base_icms_subJSKeyPress</property>
        </object>
        <object class="Label" name="Label113" >
          <property name="Caption"><![CDATA[Vlr.ICMS Substituicao]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">397</property>
          <property name="Name">Label113</property>
          <property name="Top">185</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_icms_sub" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">398</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_icms_sub</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">198</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_icms_subJSKeyPress</property>
        </object>
        <object class="Label" name="Label114" >
          <property name="Caption">Vlr. Total dos Produtos</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">548</property>
          <property name="Name">Label114</property>
          <property name="Top">185</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_produtos" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">547</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_produtos</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">198</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_produtosJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_valor_produtosJSKeyUp</property>
        </object>
        <object class="Label" name="Label115" >
          <property name="Caption">Valor do Seguro</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">153</property>
          <property name="Name">Label115</property>
          <property name="Top">247</property>
          <property name="Width">90</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_seguro" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">153</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_seguro</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">260</property>
          <property name="Width">90</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_seguroJSKeyPress</property>
        </object>
        <object class="Label" name="Label5" >
          <property name="Caption"><![CDATA[Outras Desp. Acessorias]]></property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">249</property>
          <property name="Name">Label5</property>
          <property name="Top">247</property>
          <property name="Width">140</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_outras_despesas" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">249</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_outras_despesas</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">260</property>
          <property name="Width">140</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_outras_despesasJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_outras_despesasJSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_1" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_1</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">43</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_1JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_1JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_1" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_1</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">43</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_1JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_1JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_2" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_2</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">66</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_2JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_2JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_3" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_3</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_3JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_3JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_4" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_4</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">112</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_4JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_4JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_5" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_5</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">135</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_5JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_5JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_6" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_6</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">158</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_6JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_6JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_2" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_2</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">66</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_2JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_2JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_3" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_3</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_3JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_3JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_4" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_4</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">112</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_4JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_4JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_5" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_5</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">135</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_5JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_5JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_6" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_6</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">158</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_6JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_6JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_7" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_7</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">181</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_7JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_7JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_8" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_8</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">204</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_8JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_8JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_9" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_9</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">227</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_9JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_9JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_10" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_10</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">250</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_10JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_10JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_11" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_11</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">273</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_11JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_11JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_dt_vcto_12" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_dup_dt_vcto_12</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">296</property>
          <property name="Width">75</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_dt_vcto_12JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_dt_vcto_12JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_7" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_7</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">181</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_7JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_7JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_8" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_8</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">204</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_8JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_8JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_9" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_9</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">227</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_9JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_9JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_10" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_10</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">250</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_10JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_10JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_11" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_11</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">273</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_11JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_11JSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_vlr_12" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_dup_vlr_12</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">296</property>
          <property name="Width">64</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_vlr_12JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_dup_vlr_12JSKeyUp</property>
        </object>
        <object class="Label" name="Label6" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;DT.Emissao&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">223</property>
          <property name="Name">Label6</property>
          <property name="Top">34</property>
          <property name="Width">69</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_data_emissao" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">296</property>
          <property name="MaxLength">10</property>
          <property name="Name">mgt_nota_fiscal_data_emissao</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">30</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_data_emissaoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_data_emissaoJSKeyUp</property>
        </object>
        <object class="Label" name="Label116" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;Nro. Nota (NF-e)&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">522</property>
          <property name="Name">Label116</property>
          <property name="Top">34</property>
          <property name="Width">96</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_numero" >
          <property name="Color">#EBE9ED</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">622</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_numero</property>
          <property name="ParentColor">0</property>
          <property name="ReadOnly">1</property>
          <property name="TabOrder">1</property>
          <property name="Top">30</property>
          <property name="Width">73</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_numeroJSKeyUp</property>
        </object>
        <object class="Label" name="opcao_vista" >
          <property name="Font">
          <property name="Color">#FF0000</property>
          </property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">opcao_vista</property>
          <property name="ParentColor">0</property>
          <property name="ParentFont">0</property>
          <property name="Top">30</property>
          <property name="Width">54</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_1" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_1</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">43</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_1JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_2" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_2</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">66</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_2JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_3" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_3</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">89</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_3JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_4" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_4</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">112</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_4JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_5" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_5</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">135</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_5JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_6" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_6</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">158</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_6JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_7" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_7</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">181</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_7JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_8" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_8</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">204</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_8JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_9" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_9</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">227</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_9JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_10" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_10</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">250</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_10JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_11" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_11</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">273</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_11JSKeyPress</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_dup_nro_12" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="MaxLength">11</property>
          <property name="Name">mgt_nota_fiscal_dup_nro_12</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">296</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_dup_nro_12JSKeyPress</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_1" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_1</property>
          <property name="Top">44</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_2" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_2</property>
          <property name="Top">68</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_3" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_3</property>
          <property name="Top">91</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_4" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_4</property>
          <property name="Top">114</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_5" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_5</property>
          <property name="Top">136</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_6" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_6</property>
          <property name="Top">159</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_7" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_7</property>
          <property name="Top">182</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_8" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_8</property>
          <property name="Top">205</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_9" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_9</property>
          <property name="Top">228</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_10" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_10</property>
          <property name="Top">251</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_11" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_11</property>
          <property name="Top">274</property>
          <property name="Width">10</property>
        </object>
        <object class="HiddenField" name="mgt_nota_fiscal_dup_forma_12" >
          <property name="Height">18</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">618</property>
          <property name="Name">mgt_nota_fiscal_dup_forma_12</property>
          <property name="Top">297</property>
          <property name="Width">10</property>
        </object>
        <object class="Label" name="Label117" >
          <property name="Caption">Valor Desconto (R$)</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">89</property>
          <property name="Name">Label117</property>
          <property name="Top">113</property>
          <property name="Width">113</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_valor_desconto" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer"><![CDATA[Calculo dos Impostos]]></property>
          <property name="Left">207</property>
          <property name="MaxLength">13</property>
          <property name="Name">mgt_nota_fiscal_valor_desconto</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">2</property>
          <property name="Text">0.00</property>
          <property name="Top">109</property>
          <property name="Width">102</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_valor_descontoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_valor_descontoJSKeyUp</property>
        </object>
        <object class="Label" name="Label118" >
          <property name="Caption">Banco</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">6</property>
          <property name="Name">Label118</property>
          <property name="Top">43</property>
          <property name="Width">37</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_banco" >
          <property name="Height">21</property>
          <property name="Items">a:0:{}</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">7</property>
          <property name="Name">mgt_nota_fiscal_banco</property>
          <property name="Top">56</property>
          <property name="Width">167</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_bancoJSKeyPress</property>
        </object>
        <object class="Label" name="Label119" >
          <property name="Caption">Representante</property>
          <property name="Height">13</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">9</property>
          <property name="Name">Label119</property>
          <property name="Top">90</property>
          <property name="Width">85</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_representante" >
          <property name="Height">21</property>
          <property name="Items">a:0:{}</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">8</property>
          <property name="Name">mgt_nota_fiscal_representante</property>
          <property name="Top">105</property>
          <property name="Width">167</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_representanteJSKeyPress</property>
        </object>
        <object class="Label" name="Label120" >
          <property name="Caption">DD</property>
          <property name="Height">15</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">339</property>
          <property name="Name">Label120</property>
          <property name="Top">28</property>
          <property name="Width">30</property>
        </object>
        <object class="Label" name="Label121" >
          <property name="Caption">Duplicata</property>
          <property name="Height">15</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">371</property>
          <property name="Name">Label121</property>
          <property name="Top">28</property>
          <property name="Width">101</property>
        </object>
        <object class="Label" name="Label122" >
          <property name="Caption">Vencto</property>
          <property name="Height">15</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">475</property>
          <property name="Name">Label122</property>
          <property name="Top">28</property>
          <property name="Width">75</property>
        </object>
        <object class="Label" name="Label123" >
          <property name="Caption">Valor</property>
          <property name="Height">15</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">552</property>
          <property name="Name">Label123</property>
          <property name="Top">28</property>
          <property name="Width">63</property>
        </object>
        <object class="Label" name="Label65" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;Natureza de Operacao&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">6</property>
          <property name="Name">Label65</property>
          <property name="Top">133</property>
          <property name="Width">127</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_natureza_operacao" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Items">a:0:{}</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">6</property>
          <property name="Name">mgt_nota_fiscal_natureza_operacao</property>
          <property name="ParentColor">0</property>
          <property name="Top">146</property>
          <property name="Width">685</property>
          <property name="OnChange">mgt_nota_fiscal_natureza_operacaoChange</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_natureza_operacaoJSKeyPress</property>
        </object>
        <object class="Label" name="Label76" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;CFOP 1&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">7</property>
          <property name="Name">Label76</property>
          <property name="Top">202</property>
          <property name="Width">45</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cfop" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">53</property>
          <property name="MaxLength">4</property>
          <property name="Name">mgt_nota_fiscal_cfop</property>
          <property name="ParentColor">0</property>
          <property name="TabOrder">1</property>
          <property name="Top">198</property>
          <property name="Width">43</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cfopJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cfopJSKeyUp</property>
        </object>
        <object class="Label" name="Label97" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;CFOP 2&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">116</property>
          <property name="Name">Label97</property>
          <property name="Top">202</property>
          <property name="Width">45</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_cfop_2" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">162</property>
          <property name="MaxLength">4</property>
          <property name="Name">mgt_nota_fiscal_cfop_2</property>
          <property name="TabOrder">1</property>
          <property name="Top">197</property>
          <property name="Width">43</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_cfop_2JSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_cfop_2JSKeyUp</property>
        </object>
        <object class="Label" name="Label71" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;Tipo da Nota Fiscal:&lt;/STRONG&gt;]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">232</property>
          <property name="Name">Label71</property>
          <property name="Top">202</property>
          <property name="Width">112</property>
        </object>
        <object class="RadioGroup" name="mgt_nota_fiscal_tipo_nota" >
          <property name="Columns">2</property>
          <property name="Height">20</property>
          <property name="ItemIndex">1</property>
          <property name="Items"><![CDATA[a:2:{i:0;s:7:&quot;Entrada&quot;;i:1;s:5:&quot;Saida&quot;;}]]></property>
          <property name="Layer">Adicionais</property>
          <property name="Left">349</property>
          <property name="Name">mgt_nota_fiscal_tipo_nota</property>
          <property name="Top">197</property>
          <property name="Width">145</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_notaJSKeyPress</property>
        </object>
        <object class="Panel" name="Panel2" >
          <property name="BorderColor">#000000</property>
          <property name="BorderWidth">1</property>
          <property name="Height">68</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">8</property>
          <property name="Name">Panel2</property>
          <property name="Top">57</property>
          <property name="Width">335</property>
          <object class="Label" name="Label124" >
            <property name="Caption">Desconto de:    ICMS (%)</property>
            <property name="Height">13</property>
            <property name="Left">7</property>
            <property name="Name">Label124</property>
            <property name="Top">21</property>
            <property name="Width">132</property>
          </object>
          <object class="Edit" name="mgt_nota_fiscal_suframa_desconto_icms" >
            <property name="Height">21</property>
            <property name="Left">140</property>
            <property name="MaxLength">255</property>
            <property name="Name">mgt_nota_fiscal_suframa_desconto_icms</property>
            <property name="Text">7</property>
            <property name="Top">17</property>
            <property name="Width">44</property>
            <property name="jsOnKeyPress">mgt_nota_fiscal_suframa_desconto_icmsJSKeyPress</property>
            <property name="jsOnKeyUp">mgt_nota_fiscal_suframa_desconto_icmsJSKeyUp</property>
          </object>
          <object class="Label" name="Label125" >
            <property name="Caption">Pis e Cofins (%)</property>
            <property name="Height">13</property>
            <property name="Left">194</property>
            <property name="Name">Label125</property>
            <property name="Top">21</property>
            <property name="Width">91</property>
          </object>
          <object class="Edit" name="mgt_nota_fiscal_suframa_desconto_pis_cofins" >
            <property name="Height">21</property>
            <property name="Left">287</property>
            <property name="MaxLength">255</property>
            <property name="Name">mgt_nota_fiscal_suframa_desconto_pis_cofins</property>
            <property name="Text">9.25</property>
            <property name="Top">17</property>
            <property name="Width">44</property>
            <property name="jsOnKeyPress">mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyPress</property>
            <property name="jsOnKeyUp">mgt_nota_fiscal_suframa_desconto_pis_cofinsJSKeyUp</property>
          </object>
          <object class="Label" name="Label85" >
            <property name="Caption"><![CDATA[Codigo do Suframa]]></property>
            <property name="Height">13</property>
            <property name="Left">27</property>
            <property name="Name">Label85</property>
            <property name="Top">45</property>
            <property name="Width">110</property>
          </object>
          <object class="Edit" name="mgt_nota_fiscal_suframa" >
            <property name="Height">21</property>
            <property name="Left">140</property>
            <property name="MaxLength">255</property>
            <property name="Name">mgt_nota_fiscal_suframa</property>
            <property name="Top">41</property>
            <property name="Width">191</property>
            <property name="jsOnKeyPress">mgt_nota_fiscal_suframaJSKeyPress</property>
          </object>
          <object class="Label" name="Label126" >
            <property name="Caption"><![CDATA[&lt;STRONG&gt;Suframa (So sera calculado se tiver o Codigo do Suframa)&lt;/STRONG&gt;]]></property>
            <property name="Height">13</property>
            <property name="Left">3</property>
            <property name="Name">Label126</property>
            <property name="Top">3</property>
            <property name="Width">329</property>
          </object>
        </object>
        <object class="Label" name="Label127" >
          <property name="Caption"><![CDATA[Natureza que sera Impressa na Nota]]></property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">6</property>
          <property name="Name">Label127</property>
          <property name="Top">174</property>
          <property name="Width">207</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_natureza_operacao_imp" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">218</property>
          <property name="MaxLength">255</property>
          <property name="Name">mgt_nota_fiscal_natureza_operacao_imp</property>
          <property name="Top">170</property>
          <property name="Width">473</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_natureza_operacao_impJSKeyPress</property>
        </object>
        <object class="Label" name="Label128" >
          <property name="Caption"><![CDATA[&lt;STRONG&gt;Opcoes para a Condicao de Pagamento&lt;/STRONG&gt;]]></property>
          <property name="Height">25</property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">7</property>
          <property name="Name">Label128</property>
          <property name="Top">265</property>
          <property name="Width">160</property>
        </object>
        <object class="ComboBox" name="mgt_nota_fiscal_descricao_condicao_pgto" >
          <property name="Height">21</property>
          <property name="ItemIndex">0</property>
          <property name="Items"><![CDATA[a:4:{i:0;s:6:&quot;Normal&quot;;i:1;s:7:&quot;A Vista&quot;;i:2;s:19:&quot;Sem Valor Comercial&quot;;i:3;s:10:&quot;Antecipado&quot;;}]]></property>
          <property name="Layer"><![CDATA[Condicoes de Pagamento]]></property>
          <property name="Left">7</property>
          <property name="Name">mgt_nota_fiscal_descricao_condicao_pgto</property>
          <property name="Top">292</property>
          <property name="Width">167</property>
          <property name="jsOnChange">mgt_nota_fiscal_descricao_condicao_pgtoJSChange</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_descricao_condicao_pgtoJSKeyPress</property>
        </object>
        <object class="GroupBox" name="GroupBox1" >
          <property name="Caption"><![CDATA[Dados para Exportacao]]></property>
          <property name="Height">42</property>
          <property name="Layer"><![CDATA[Observacoes Adicionais]]></property>
          <property name="Left">15</property>
          <property name="Name">GroupBox1</property>
          <property name="Top">277</property>
          <property name="Width">654</property>
          <object class="Label" name="Label129" >
            <property name="Caption">UF de Embarque:</property>
            <property name="Height">13</property>
            <property name="Left">14</property>
            <property name="Name">Label129</property>
            <property name="Top">20</property>
            <property name="Width">99</property>
          </object>
          <object class="Label" name="Label130" >
            <property name="Caption">Local de Embarque:</property>
            <property name="Height">13</property>
            <property name="Left">146</property>
            <property name="Name">Label130</property>
            <property name="Top">20</property>
            <property name="Width">113</property>
          </object>
          <object class="Edit" name="mgt_nota_fiscal_exportacao_uf_emb" >
            <property name="Height">21</property>
            <property name="Left">115</property>
            <property name="MaxLength">2</property>
            <property name="Name">mgt_nota_fiscal_exportacao_uf_emb</property>
            <property name="Top">15</property>
            <property name="Width">23</property>
            <property name="jsOnKeyPress">mgt_nota_fiscal_exportacao_uf_embJSKeyPress</property>
          </object>
          <object class="Edit" name="mgt_nota_fiscal_exportacao_local_emb" >
            <property name="Height">21</property>
            <property name="Left">260</property>
            <property name="MaxLength">60</property>
            <property name="Name">mgt_nota_fiscal_exportacao_local_emb</property>
            <property name="Top">15</property>
            <property name="Width">387</property>
            <property name="jsOnKeyPress">mgt_nota_fiscal_exportacao_local_embJSKeyPress</property>
          </object>
        </object>
        <object class="Label" name="Label131" >
          <property name="Caption"><![CDATA[&lt;B&gt;ATENCAO:&lt;/B&gt; Para que o Pagamento do Frete saia corretamente, estabeleca este campo como ultima selecao antes da Transmissao.]]></property>
          <property name="Height">13</property>
          <property name="Layer">Transportador</property>
          <property name="Left">9</property>
          <property name="Name">Label131</property>
          <property name="Top">29</property>
          <property name="Width">630</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_tipo_operacao" >
          <property name="Color">#F4F1AA</property>
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">538</property>
          <property name="MaxLength">1</property>
          <property name="Name">mgt_nota_fiscal_tipo_operacao</property>
          <property name="ParentColor">0</property>
          <property name="Text">1</property>
          <property name="Top">78</property>
          <property name="Width">16</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_tipo_operacaoJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_tipo_operacaoJSKeyUp</property>
        </object>
        <object class="Edit" name="mgt_nota_fiscal_referenciada" >
          <property name="Height">21</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">488</property>
          <property name="MaxLength">44</property>
          <property name="Name">mgt_nota_fiscal_referenciada</property>
          <property name="Top">100</property>
          <property name="Width">206</property>
          <property name="jsOnKeyPress">mgt_nota_fiscal_referenciadaJSKeyPress</property>
          <property name="jsOnKeyUp">mgt_nota_fiscal_referenciadaJSKeyUp</property>
        </object>
        <object class="Label" name="Label132" >
          <property name="Caption">Nro.Ch.NFe Referenciada:</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">352</property>
          <property name="Name">Label132</property>
          <property name="Top">104</property>
          <property name="Width">133</property>
        </object>
        <object class="Label" name="Label133" >
          <property name="Caption">Operac:1-Nor./2-Com./3-Aju./4-Dev.</property>
          <property name="Height">13</property>
          <property name="Layer">Adicionais</property>
          <property name="Left">352</property>
          <property name="Name">Label133</property>
          <property name="Top">82</property>
          <property name="Width">185</property>
        </object>
      </object>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Dados da Nota Fiscal&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FFFF80</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">15</property>
      <property name="Width">717</property>
    </object>
    <object class="Label" name="Label69" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label69</property>
      <property name="Top">70</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_razao_social" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">8</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_nota_fiscal_razao_social</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">84</property>
      <property name="Width">476</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_razao_socialJSKeyPress</property>
    </object>
    <object class="Label" name="Label83" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label83</property>
      <property name="Top">70</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_inscricao_estadual" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">490</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_nota_fiscal_inscricao_estadual</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">84</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_inscricao_estadualJSKeyPress</property>
    </object>
    <object class="Label" name="Label84" >
      <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
      <property name="Height">13</property>
      <property name="Left">608</property>
      <property name="Name">Label84</property>
      <property name="Top">70</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_inscricao_municipal" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">608</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_nota_fiscal_inscricao_municipal</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">84</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_inscricao_municipalJSKeyPress</property>
    </object>
    <object class="PageControl" name="dados_cliente" >
      <property name="ActiveLayer"><![CDATA[Endereco de Faturamento]]></property>
      <property name="Height">108</property>
      <property name="Left">8</property>
      <property name="Name">dados_cliente</property>
      <property name="TabIndex">0</property>
      <property name="Tabs"><![CDATA[a:4:{i:0;s:23:&quot;Endereco de Faturamento&quot;;i:1;s:19:&quot;Endereco de Entrega&quot;;i:2;s:20:&quot;Endereco de Cobranca&quot;;i:3;s:16:&quot;Dados de Contato&quot;;}]]></property>
      <property name="Top">109</property>
      <property name="Width">713</property>
      <object class="Label" name="Label28" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">13</property>
        <property name="Name">Label28</property>
        <property name="Top">29</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_endereco" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">13</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_endereco</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">43</property>
        <property name="Width">579</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_enderecoJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_complemento" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">596</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_complemento</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">43</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_complementoJSKeyPress</property>
      </object>
      <object class="Label" name="Label61" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">597</property>
        <property name="Name">Label61</property>
        <property name="Top">29</property>
        <property name="Width">85</property>
      </object>
      <object class="Label" name="Label29" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">13</property>
        <property name="Name">Label29</property>
        <property name="Top">66</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_bairro" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_bairro</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_bairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label30" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">145</property>
        <property name="Name">Label30</property>
        <property name="Top">66</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cidade" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">145</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_cidade</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label31" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">269</property>
        <property name="Name">Label31</property>
        <property name="Top">66</property>
        <property name="Width">69</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_estado" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">269</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_estado</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_estadoJSKeyPress</property>
      </object>
      <object class="Label" name="Label32" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">344</property>
        <property name="Name">Label32</property>
        <property name="Top">66</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cep" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">346</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_cep</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cepJSKeyPress</property>
      </object>
      <object class="Label" name="Label33" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">423</property>
        <property name="Name">Label33</property>
        <property name="Top">66</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_pais" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_pais</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_paisJSKeyPress</property>
      </object>
      <object class="Label" name="Label34" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">547</property>
        <property name="Name">Label34</property>
        <property name="Top">66</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">547</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_foneJSKeyPress</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">623</property>
        <property name="Name">Label35</property>
        <property name="Top">66</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fax" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Faturamento]]></property>
        <property name="Left">623</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fax</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">79</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_faxJSKeyPress</property>
      </object>
      <object class="Label" name="Label36" >
        <property name="Caption"><![CDATA[Opcao]]></property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">12</property>
        <property name="Name">Label36</property>
        <property name="Top">30</property>
        <property name="Width">69</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_opcao_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">13</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_opcao_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">43</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_opcao_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label37" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">96</property>
        <property name="Name">Label37</property>
        <property name="Top">30</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_endereco_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">96</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_endereco_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">43</property>
        <property name="Width">497</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_endereco_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label45" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">597</property>
        <property name="Name">Label45</property>
        <property name="Top">30</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_complemento_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">596</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_complemento_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">43</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_complemento_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label38" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">13</property>
        <property name="Name">Label38</property>
        <property name="Top">68</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_bairro_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">12</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_bairro_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_bairro_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label39" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">143</property>
        <property name="Name">Label39</property>
        <property name="Top">68</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cidade_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">143</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_cidade_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cidade_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label40" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">267</property>
        <property name="Name">Label40</property>
        <property name="Top">68</property>
        <property name="Width">69</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_estado_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">267</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_estado_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_estado_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label41" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">342</property>
        <property name="Name">Label41</property>
        <property name="Top">68</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cep_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">344</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_cep_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cep_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label42" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">421</property>
        <property name="Name">Label42</property>
        <property name="Top">68</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_pais_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">421</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_pais_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_pais_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label43" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">546</property>
        <property name="Name">Label43</property>
        <property name="Top">68</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">546</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fone_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label44" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">623</property>
        <property name="Name">Label44</property>
        <property name="Top">68</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fax_entrega" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Entrega]]></property>
        <property name="Left">623</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fax_entrega</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">81</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fax_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label56" >
        <property name="Caption"><![CDATA[Opcao]]></property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">12</property>
        <property name="Name">Label56</property>
        <property name="Top">29</property>
        <property name="Width">69</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_opcao_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">13</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_opcao_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">42</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_opcao_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label47" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">96</property>
        <property name="Name">Label47</property>
        <property name="Top">29</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_endereco_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">96</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_nota_fiscal_endereco_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">42</property>
        <property name="Width">497</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_endereco_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label57" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">596</property>
        <property name="Name">Label57</property>
        <property name="Top">28</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_complemento_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">596</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_complemento_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">42</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_complemento_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label49" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">14</property>
        <property name="Name">Label49</property>
        <property name="Top">67</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_bairro_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_bairro_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_bairro_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label50" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">144</property>
        <property name="Name">Label50</property>
        <property name="Top">67</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cidade_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">144</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_cidade_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cidade_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label51" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">268</property>
        <property name="Name">Label51</property>
        <property name="Top">67</property>
        <property name="Width">69</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_estado_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">268</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_estado_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_estado_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label52" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">343</property>
        <property name="Name">Label52</property>
        <property name="Top">67</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_cep_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">345</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_nota_fiscal_cep_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_cep_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label53" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">422</property>
        <property name="Name">Label53</property>
        <property name="Top">67</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_pais_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_pais_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_pais_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label54" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">548</property>
        <property name="Name">Label54</property>
        <property name="Top">67</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">548</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fone_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label55" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">624</property>
        <property name="Name">Label55</property>
        <property name="Top">67</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fax_cobranca" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer"><![CDATA[Endereco de Cobranca]]></property>
        <property name="Left">623</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fax_cobranca</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fax_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label59" >
        <property name="Caption">Contato</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">11</property>
        <property name="Name">Label59</property>
        <property name="Top">43</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_contato" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">11</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_contato</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_contatoJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_ddd" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">115</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_nota_fiscal_ddd</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">32</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_dddJSKeyPress</property>
      </object>
      <object class="Label" name="Label64" >
        <property name="Caption">DDD</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">115</property>
        <property name="Name">Label64</property>
        <property name="Top">43</property>
        <property name="Width">29</property>
      </object>
      <object class="Label" name="Label58" >
        <property name="Caption">Comercial</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">152</property>
        <property name="Name">Label58</property>
        <property name="Top">43</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone_comercial" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">152</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone_comercial</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fone_comercialJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone_celular" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">234</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone_celular</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fone_celularJSKeyPress</property>
      </object>
      <object class="Label" name="Label66" >
        <property name="Caption">Celular</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">234</property>
        <property name="Name">Label66</property>
        <property name="Top">43</property>
        <property name="Width">75</property>
      </object>
      <object class="Label" name="Label67" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">316</property>
        <property name="Name">Label67</property>
        <property name="Top">43</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_fone_fax" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">316</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_nota_fiscal_fone_fax</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_fone_faxJSKeyPress</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_email" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">397</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_email</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">150</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_emailJSKeyPress</property>
      </object>
      <object class="Label" name="Label60" >
        <property name="Caption">E-mail</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">397</property>
        <property name="Name">Label60</property>
        <property name="Top">43</property>
        <property name="Width">41</property>
      </object>
      <object class="Label" name="Label68" >
        <property name="Caption">Site</property>
        <property name="Height">13</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">551</property>
        <property name="Name">Label68</property>
        <property name="Top">43</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_nota_fiscal_site" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Layer">Dados de Contato</property>
        <property name="Left">551</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_nota_fiscal_site</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">56</property>
        <property name="Width">150</property>
        <property name="jsOnKeyPress">mgt_nota_fiscal_siteJSKeyPress</property>
      </object>
    </object>
  </object>
  <object class="GroupBox" name="opcoes_faturamento" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">opcoes_faturamento</property>
    <property name="Top">761</property>
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
    <object class="Button" name="bt_imprimir" >
      <property name="Caption">Transmitir</property>
      <property name="Height">25</property>
      <property name="Left">526</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_imprimirClick</property>
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
    <object class="CheckBox" name="mgt_nota_fiscal_nao_imprimir" >
      <property name="Caption"><![CDATA[Gerar DANFE de Contingencia no Formulario Fiscal]]></property>
      <property name="Height">17</property>
      <property name="Left">187</property>
      <property name="Name">mgt_nota_fiscal_nao_imprimir</property>
      <property name="Top">10</property>
      <property name="Width">300</property>
      <property name="jsOnClick">mgt_nota_fiscal_nao_imprimirJSClick</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_nao_imprimirJSKeyPress</property>
    </object>
    <object class="CheckBox" name="mgt_apenas_registra" >
      <property name="Caption"><![CDATA[Apenas registrar a Nota Fiscal, nao gerar DANFE]]></property>
      <property name="Height">17</property>
      <property name="Left">187</property>
      <property name="Name">mgt_apenas_registra</property>
      <property name="Top">28</property>
      <property name="Width">290</property>
      <property name="jsOnClick">mgt_apenas_registraJSClick</property>
      <property name="jsOnKeyPress">mgt_apenas_registraJSKeyPress</property>
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
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">111</property>
    <property name="IsVisible">0</property>
    <property name="Left">189</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">825</property>
    <property name="Width">369</property>
    <object class="Label" name="msg_confirmacao" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Gerar o XML da NFe&lt;/b&gt;&lt;/center&gt;Voce deseja realmente gerar o XML da NFe e Transmitir?&lt;br&gt;&lt;font color=#FF0000&gt;&lt;b&gt;Obs.: Clique somente uma vez no botao escolhido e aguarde a proxima tela.&lt;/b&gt;&lt;/font&gt;]]></property>
      <property name="Height">51</property>
      <property name="Left">15</property>
      <property name="Name">msg_confirmacao</property>
      <property name="Top">26</property>
      <property name="Width">343</property>
    </object>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">106</property>
      <property name="Name">bt_nao</property>
      <property name="Top">78</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">186</property>
      <property name="Name">bt_sim</property>
      <property name="Top">78</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
  </object>
  <object class="HiddenField" name="hd_numero_pedido" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_numero_pedido</property>
    <property name="Top">820</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_tipo_codigo" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_tipo_codigo</property>
    <property name="Top">841</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_imprime_observacao_nota" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_nota_fiscal_imprime_observacao_nota</property>
    <property name="Top">862</property>
    <property name="Value">1</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_revenda" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_nota_fiscal_revenda</property>
    <property name="Top">884</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_consumo" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_nota_fiscal_consumo</property>
    <property name="Top">905</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_zerar_base_icms" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_nota_fiscal_zerar_base_icms</property>
    <property name="Top">927</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_nao_imprimir" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_nota_fiscal_nao_imprimir</property>
    <property name="Top">820</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_nota_fiscal_descricao_condicao_pgto" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_nota_fiscal_descricao_condicao_pgto</property>
    <property name="Top">841</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_cfop_st" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_cfop_st</property>
    <property name="Top">862</property>
    <property name="Value">N</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_cfop_cst" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_cfop_cst</property>
    <property name="Top">883</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_cfop_cst_natureza" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_cfop_cst_natureza</property>
    <property name="Top">904</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_apenas_registra" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_apenas_registra</property>
    <property name="Top">927</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_bt_sim_clicado" >
    <property name="Height">18</property>
    <property name="Left">567</property>
    <property name="Name">hd_bt_sim_clicado</property>
    <property name="Top">948</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">570</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
