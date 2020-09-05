<?php
<object class="relultimacompracliente" name="relultimacompracliente" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">158</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">relultimacompracliente</property>
  <property name="Width">755</property>
  <property name="OnCreate">relultimacompraclienteCreate</property>
  <property name="jsOnLoad">relultimacompraclienteJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[RELATORIO DE VENDAS - Ultima Compra do Cliente]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Busca</property>
    <property name="Height">60</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Efetua a Busca dos Clientes que nao compraram apos o periodo informado: De]]></property>
      <property name="Height">13</property>
      <property name="Left">43</property>
      <property name="Name">Label1</property>
      <property name="Top">23</property>
      <property name="Width">446</property>
    </object>
    <object class="Edit" name="data_inicial" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">493</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_inicial</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">data_inicialJSKeyUp</property>
    </object>
    <object class="Edit" name="data_final" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">597</property>
      <property name="MaxLength">10</property>
      <property name="Name">data_final</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">19</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">data_finalJSKeyPress</property>
      <property name="jsOnKeyUp">data_finalJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[ate]]></property>
      <property name="Height">13</property>
      <property name="Left">573</property>
      <property name="Name">Label2</property>
      <property name="Top">23</property>
      <property name="Width">20</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">96</property>
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
      <property name="Caption">Imprimir</property>
      <property name="Height">25</property>
      <property name="Left">328</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_imprimirClick</property>
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
        <property name="Left">699</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
