<?php
<object class="nfimportaxml" name="nfimportaxml" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">590</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfimportaxml</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfimportaxmlCreate</property>
  <property name="jsOnLoad">nfimportaxmlJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Arquivos de Transmissao - Importacao do XML (Nota de Entrada)]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Nota Fiscal - Entrada</property>
    <property name="Height">66</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Upload" name="arquivo_xml_entrada" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">8</property>
      <property name="Name">arquivo_xml_entrada</property>
      <property name="ParentColor">0</property>
      <property name="Top">34</property>
      <property name="Width">711</property>
      <property name="jsOnKeyPress">arquivo_xml_entradaJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Informe no campo abaixo a localizacao do Arquivo XML referente a Nota Fiscal Eletronica de Entrada.]]></property>
      <property name="Font">
            <property name="Color">#FF0000</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="ParentFont">0</property>
      <property name="Top">17</property>
      <property name="Width">571</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">110</property>
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
    <object class="Button" name="bt_gerar" >
      <property name="Caption">Gerar Arquivo</property>
      <property name="Height">25</property>
      <property name="Left">311</property>
      <property name="Name">bt_gerar</property>
      <property name="Top">17</property>
      <property name="Width">107</property>
      <property name="OnClick">bt_gerarClick</property>
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
