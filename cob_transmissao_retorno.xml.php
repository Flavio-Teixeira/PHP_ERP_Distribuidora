<?php
<object class="cobtransmissaoretorno" name="cobtransmissaoretorno" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cobtransmissaoretorno</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobtransmissaoretornoCreate</property>
  <property name="jsOnLoad">cobtransmissaoretornoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[COBRANCA - Arquivo de Transmissao de Retorno]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Baixa de Cobranca]]></property>
    <property name="Height">64</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">33</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Informe no campo abaixo a localizacao do Arquivo de Retorno fornecido pelo Banco:]]></property>
      <property name="Font">
            <property name="Color">#FF0000</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label1</property>
      <property name="ParentFont">0</property>
      <property name="Top">17</property>
      <property name="Width">523</property>
    </object>
    <object class="Upload" name="arquivo_xml_entrada" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">16</property>
      <property name="Name">arquivo_xml_entrada</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">699</property>
      <property name="jsOnKeyPress">arquivo_xml_entradaJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">101</property>
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
    <object class="Button" name="bt_importar_retorno" >
      <property name="Caption">Importar Retorno</property>
      <property name="Height">25</property>
      <property name="Left">307</property>
      <property name="Name">bt_importar_retorno</property>
      <property name="Top">17</property>
      <property name="Width">115</property>
      <property name="OnClick">bt_importar_retornoClick</property>
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
    <property name="Top">17</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">165</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
