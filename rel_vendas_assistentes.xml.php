<?php
<object class="relvendasassistentes" name="relvendasassistentes" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">relvendasassistentes</property>
  <property name="Width">755</property>
  <property name="OnCreate">relvendasassistentesCreate</property>
  <property name="jsOnLoad">relvendasassistentesJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption">VENDAS DOS ASSISTENTES</property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Selecao do Assistente]]></property>
    <property name="Height">85</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">37</property>
    <property name="Width">730</property>
    <object class="Label" name="Label7" >
      <property name="Caption">Nome do Assistente</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label7</property>
      <property name="Top">57</property>
      <property name="Width">99</property>
    </object>
    <object class="Edit" name="assistente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">117</property>
      <property name="Name">assistente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">53</property>
      <property name="Width">365</property>
      <property name="jsOnKeyPress">assistente_nomeJSKeyPress</property>
    </object>
    <object class="Edit" name="data_inicial" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">538</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_inicial</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">53</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_inicialJSKeyPress</property>
    </object>
    <object class="Edit" name="data_final" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">644</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_final</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">53</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_finalJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Periodo]]></property>
      <property name="Height">13</property>
      <property name="Left">490</property>
      <property name="Name">Label1</property>
      <property name="Top">57</property>
      <property name="Width">43</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[ate]]></property>
      <property name="Height">13</property>
      <property name="Left">615</property>
      <property name="Name">Label8</property>
      <property name="Top">57</property>
      <property name="Width">27</property>
    </object>
    <object class="ComboBox" name="assistente_selecao" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">71</property>
      <property name="Name">assistente_selecao</property>
      <property name="Top">18</property>
      <property name="Width">648</property>
      <property name="jsOnChange">assistente_selecaoJSChange</property>
      <property name="jsOnKeyPress">assistente_selecaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label69" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Assistente</property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label69</property>
      <property name="Top">22</property>
      <property name="Width">51</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">129</property>
    <property name="Width">730</property>
    <object class="Button" name="Button1" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">Button1</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_adicionar" >
      <property name="Caption">Imprimir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_adicionar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_adicionarClick</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">693</property>
        <property name="Top">189</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
