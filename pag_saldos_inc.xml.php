<?php
<object class="pagsaldosinc" name="pagsaldosinc" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">pagsaldosinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">pagsaldosincCreate</property>
  <property name="jsOnLoad">pagsaldosincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A PAGAR - Saldos - Inclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">57</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
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
      <property name="Caption">Data</property>
      <property name="Height">13</property>
      <property name="Left">454</property>
      <property name="Name">Label3</property>
      <property name="Top">25</property>
      <property name="Width">27</property>
    </object>
    <object class="Edit" name="mgt_saldo_data" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">486</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_saldo_data</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_saldo_dataJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_saldo_dataJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">567</property>
      <property name="Name">Label4</property>
      <property name="Top">25</property>
      <property name="Width">59</property>
    </object>
    <object class="Edit" name="mgt_saldo_valor" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">630</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_saldo_valor</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_saldo_valorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_saldo_valorJSKeyUp</property>
    </object>
    <object class="ComboBox" name="mgt_saldo_conta" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">50</property>
      <property name="Name">mgt_saldo_conta</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">400</property>
      <property name="jsOnKeyPress">mgt_saldo_contaJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">99</property>
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
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">693</property>
        <property name="Top">157</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
