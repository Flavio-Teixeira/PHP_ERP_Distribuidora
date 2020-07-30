<?php
<object class="pagsaldosalt" name="pagsaldosalt" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">pagsaldosalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">pagsaldosaltCreate</property>
  <property name="jsOnLoad">pagsaldosaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CONTAS A PAGAR - Saldos - Alteracao]]></property>
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
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">25</property>
      <property name="Width">43</property>
    </object>
    <object class="Edit" name="mgt_saldo_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">54</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_saldo_nro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">33</property>
      <property name="jsOnKeyPress">mgt_saldo_nroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_saldo_nroJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Conta</property>
      <property name="Height">13</property>
      <property name="Left">94</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">35</property>
    </object>
    <object class="ComboBox" name="mgt_saldo_conta" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">130</property>
      <property name="Name">mgt_saldo_conta</property>
      <property name="ParentColor">0</property>
      <property name="Top">21</property>
      <property name="Width">328</property>
      <property name="jsOnKeyPress">mgt_saldo_contaJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Data</property>
      <property name="Height">13</property>
      <property name="Left">462</property>
      <property name="Name">Label4</property>
      <property name="Top">25</property>
      <property name="Width">27</property>
    </object>
    <object class="Edit" name="mgt_saldo_data" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">494</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_saldo_data</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">73</property>
      <property name="jsOnKeyPress">mgt_saldo_dataJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_saldo_dataJSKeyUp</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption">Valor (R$)</property>
      <property name="Height">13</property>
      <property name="Left">570</property>
      <property name="Name">Label5</property>
      <property name="Top">25</property>
      <property name="Width">59</property>
    </object>
    <object class="Edit" name="mgt_saldo_valor" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">631</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_saldo_valor</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_saldo_valorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_saldo_valorJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">100</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">645</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">279</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">360</property>
      <property name="Name">bt_excluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_excluirClick</property>
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
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
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
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">188</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">157</property>
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
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label11</property>
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
        <property name="Left">677</property>
        <property name="Top">158</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
