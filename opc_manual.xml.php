<?php
<object class="opcmanual" name="opcmanual" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">490</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">opcmanual</property>
  <property name="Width">755</property>
  <property name="OnCreate">opcmanualCreate</property>
  <property name="jsOnLoad">opcmanualJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[OPCOES - Manual de Utilizacao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">738</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Observacoes Gerais]]></property>
    <property name="Height">80</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">16</property>
    <property name="Width">616</property>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[&lt;UL&gt;
&lt;LI&gt;Nesta area se encontra todos os Manuais de Treinamento do Sistema;&lt;/LI&gt;
&lt;LI&gt;As opcoes apresentadas sao uma copia do Menu de Acesso de forma vertical;&lt;/LI&gt;
&lt;LI&gt;Clique na Opcao desejada e clique no botao &quot;Visualizar o Treinamento&quot;;&lt;/LI&gt;
&lt;LI&gt;Os Treinamentos sao apresentados em &quot;Screencast&quot;.&lt;/LI&gt;&lt;/UL&gt;]]></property>
      <property name="Height">53</property>
      <property name="Left">8</property>
      <property name="Name">Label2</property>
      <property name="Top">16</property>
      <property name="Width">595</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">80</property>
    <property name="Left">634</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">16</property>
    <property name="Width">104</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">16</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">28</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes / Item escolhido]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">433</property>
    <property name="Width">730</property>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">16</property>
      <property name="Width">131</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">18</property>
      <property name="Width">10</property>
    </object>
    <object class="Panel" name="Panel2" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#EBE9ED</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel2</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">30</property>
      <property name="Width">148</property>
    </object>
    <object class="Edit" name="opcao_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">221</property>
      <property name="Name">opcao_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">18</property>
      <property name="Width">33</property>
      <property name="jsOnKeyPress">opcao_numeroJSKeyPress</property>
    </object>
    <object class="Edit" name="opcao_titulo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">256</property>
      <property name="Name">opcao_titulo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">18</property>
      <property name="Width">305</property>
      <property name="jsOnKeyPress">opcao_tituloJSKeyPress</property>
    </object>
    <object class="Button" name="bt_visualizar" >
      <property name="Caption">Visualizar o Treinamento</property>
      <property name="Height">25</property>
      <property name="Left">568</property>
      <property name="Name">bt_visualizar</property>
      <property name="Top">16</property>
      <property name="Width">149</property>
      <property name="OnClick">bt_visualizarClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[&lt;STRONG&gt;Item:&lt;/STRONG&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">183</property>
      <property name="Name">Label3</property>
      <property name="Top">22</property>
      <property name="Width">35</property>
    </object>
  </object>
  <object class="Label" name="Label1" >
    <property name="Caption"><![CDATA[Permissoes Disponiveis para o Treinamento, clique uma vez em cima da Opcao desejada:]]></property>
    <property name="Height">13</property>
    <property name="Left">8</property>
    <property name="Name">Label1</property>
    <property name="Top">99</property>
    <property name="Width">509</property>
  </object>
  <object class="Edit" name="MSG_Erro" >
    <property name="BorderStyle">bsNone</property>
    <property name="Color">#EBE9ED</property>
    <property name="Font">
        <property name="Align">taCenter</property>
        <property name="Color">#FF0000</property>
    </property>
    <property name="Height">21</property>
    <property name="Left">8</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="ReadOnly">1</property>
    <property name="Top">410</property>
    <property name="Width">730</property>
    <property name="jsOnKeyPress">MSG_ErroJSKeyPress</property>
  </object>
  <object class="ListView" name="manual_opcoes" >
    <property name="Columns">a:0:{}</property>
    <property name="Height">291</property>
    <property name="Left">79</property>
    <property name="Name">manual_opcoes</property>
    <property name="Top">116</property>
    <property name="Width">580</property>
    <property name="jsOnSelectionChanged">manual_opcoesJSSelectionChanged</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">682</property>
        <property name="Top">357</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
