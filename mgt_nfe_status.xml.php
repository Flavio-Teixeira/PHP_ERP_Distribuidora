<?php
<object class="mgtnfestatus" name="mgtnfestatus" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">MGT - NFe - Consulta Status do Servidor</property>
  <property name="DocType">dtNone</property>
  <property name="Height">520</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfestatus</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfestatusCreate</property>
  <property name="jsOnLoad">mgtnfestatusJSLoad</property>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Erros encontrados no Status</property>
    <property name="Height">440</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">17</property>
    <property name="Width">730</property>
    <object class="Label" name="MSG_Erro_Superior" >
      <property name="Alignment">agLeft</property>
      <property name="Font">
            <property name="Color">#FF0000</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">MSG_Erro_Superior</property>
      <property name="ParentFont">0</property>
      <property name="Top">22</property>
      <property name="Width">711</property>
    </object>
    <object class="Memo" name="listagem_erros" >
      <property name="Height">386</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">listagem_erros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">43</property>
      <property name="Width">711</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Envio para Consulta de Status</property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">461</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption">Consultar o Status do Servidor</property>
      <property name="Height">25</property>
      <property name="Left">240</property>
      <property name="Name">bt_enviar</property>
      <property name="Top">16</property>
      <property name="Width">251</property>
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
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - Consultar Status do Servidor]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">570</property>
        <property name="Top">476</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
