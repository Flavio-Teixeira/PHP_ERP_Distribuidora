<?php
<object class="mgtnfereimprimir" name="mgtnfereimprimir" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">MGT - NFe - Consulta de Cadastro</property>
  <property name="DocType">dtNone</property>
  <property name="Height">520</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfereimprimir</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfereimprimirCreate</property>
  <property name="jsOnLoad">mgtnfereimprimirJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - DANFE - Reimprimir DANFE]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Reimpressao do DANFE]]></property>
    <property name="Height">58</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">33</property>
    <property name="Width">730</property>
    <object class="Label" name="Label7" >
      <property name="Alignment">agLeft</property>
      <property name="Caption"><![CDATA[Numero da Nota Fiscal Autorizada:]]></property>
      <property name="Height">13</property>
      <property name="Left">11</property>
      <property name="Name">Label7</property>
      <property name="Top">24</property>
      <property name="Width">196</property>
    </object>
    <object class="Edit" name="nfe_numero_nota" >
      <property name="Height">21</property>
      <property name="Left">211</property>
      <property name="MaxLength">9</property>
      <property name="Name">nfe_numero_nota</property>
      <property name="Top">20</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">nfe_numero_notaJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_numero_notaJSKeyUp</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Alignment">agLeft</property>
      <property name="Caption">Chave de Acesso:</property>
      <property name="Height">13</property>
      <property name="Left">283</property>
      <property name="Name">Label1</property>
      <property name="Top">24</property>
      <property name="Width">103</property>
    </object>
    <object class="Edit" name="nfe_chave" >
      <property name="Height">21</property>
      <property name="Left">387</property>
      <property name="MaxLength">44</property>
      <property name="Name">nfe_chave</property>
      <property name="Top">20</property>
      <property name="Width">332</property>
      <property name="jsOnKeyPress">nfe_chaveJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_chaveJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Envio da Consulta de DANFE</property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">95</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption">Enviar Consulta de Nota</property>
      <property name="Height">25</property>
      <property name="Left">271</property>
      <property name="Name">bt_enviar</property>
      <property name="Top">16</property>
      <property name="Width">187</property>
      <property name="OnClick">bt_enviarClick</property>
    </object>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
  </object>
  <object class="Label" name="MSG_Erro" >
    <property name="Alignment">agCenter</property>
    <property name="Font">
        <property name="Color">#FF0000</property>
    </property>
    <property name="Height">13</property>
    <property name="Name">MSG_Erro</property>
    <property name="ParentFont">0</property>
    <property name="Top">16</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">666</property>
        <property name="Top">156</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
