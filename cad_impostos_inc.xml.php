<?php
<object class="cadimpostosinc" name="cadimpostosinc" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadimpostosinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadimpostosincCreate</property>
  <property name="jsOnLoad">cadimpostosincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Impostos/Taxas - Alteracao/Consulta/Inclusao]]></property>
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
      <property name="Caption">Imposto</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label1</property>
      <property name="Top">25</property>
      <property name="Width">47</property>
    </object>
    <object class="Edit" name="mgt_imposto_taxa_tipo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">70</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_imposto_taxa_tipo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_imposto_taxa_tipoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_imposto_taxa_tipoJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Porcentagem do Imposto</property>
      <property name="Height">13</property>
      <property name="Left">178</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">142</property>
    </object>
    <object class="Edit" name="mgt_imposto_taxa_porcentagem" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">325</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_imposto_taxa_porcentagem</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_imposto_taxa_porcentagemJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_imposto_taxa_porcentagemJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">103</property>
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
      <property name="Caption">Alterar / Incluir</property>
      <property name="Height">25</property>
      <property name="Left">288</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">104</property>
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
      <property name="Top">19</property>
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
        <property name="Top">165</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
