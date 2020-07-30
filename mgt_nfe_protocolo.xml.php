<?php
<object class="mgtnfeprotocolo" name="mgtnfeprotocolo" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">MGT - NFe - Consulta de Protocolo</property>
  <property name="DocType">dtNone</property>
  <property name="Height">520</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfeprotocolo</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfeprotocoloCreate</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - Consulta de Protocolo]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Consulta de Protocolo da Nota Fiscal</property>
    <property name="Height">72</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">17</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Numeracao da NF-e para consulta de Protocolo:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">23</property>
      <property name="Width">270</property>
    </object>
    <object class="Edit" name="nfe_inicial" >
      <property name="Height">21</property>
      <property name="Left">280</property>
      <property name="MaxLength">7</property>
      <property name="Name">nfe_inicial</property>
      <property name="Top">19</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">nfe_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_inicialJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Numero do Protocolo Retornado:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label2</property>
      <property name="Top">47</property>
      <property name="Width">270</property>
    </object>
    <object class="Edit" name="nfe_nro_protocolo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">280</property>
      <property name="MaxLength">7</property>
      <property name="Name">nfe_nro_protocolo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">43</property>
      <property name="Width">439</property>
      <property name="jsOnKeyPress">nfe_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_inicialJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Mes:]]></property>
      <property name="Height">13</property>
      <property name="Left">361</property>
      <property name="Name">Label3</property>
      <property name="Top">23</property>
      <property name="Width">33</property>
    </object>
    <object class="Edit" name="nfe_mes" >
      <property name="Height">21</property>
      <property name="Left">396</property>
      <property name="MaxLength">2</property>
      <property name="Name">nfe_mes</property>
      <property name="Top">19</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">nfe_mesJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_mesJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Ano:</property>
      <property name="Height">13</property>
      <property name="Left">425</property>
      <property name="Name">Label4</property>
      <property name="Top">23</property>
      <property name="Width">33</property>
    </object>
    <object class="Edit" name="nfe_ano" >
      <property name="Height">21</property>
      <property name="Left">460</property>
      <property name="MaxLength">2</property>
      <property name="Name">nfe_ano</property>
      <property name="Top">19</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">nfe_anoJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_anoJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Erros encontrados na Consulta de Protocolo</property>
    <property name="Height">363</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">93</property>
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
      <property name="Height">308</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">listagem_erros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">44</property>
      <property name="Width">711</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Envio da Consulta de Protocolo</property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">460</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption">Consultar Protocolo</property>
      <property name="Height">25</property>
      <property name="Left">287</property>
      <property name="Name">bt_enviar</property>
      <property name="Top">16</property>
      <property name="Width">155</property>
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
  <object class="HiddenField" name="tipo_ambiente" >
    <property name="Height">18</property>
    <property name="Left">574</property>
    <property name="Name">tipo_ambiente</property>
    <property name="Top">27</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="cnpj_padrao" >
    <property name="Height">18</property>
    <property name="Left">574</property>
    <property name="Name">cnpj_padrao</property>
    <property name="Top">46</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="status_servico" >
    <property name="Height">18</property>
    <property name="Left">574</property>
    <property name="Name">status_servico</property>
    <property name="Top">65</property>
    <property name="Width">150</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">602</property>
        <property name="Top">469</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
