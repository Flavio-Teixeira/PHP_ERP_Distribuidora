<?php
<object class="mgtnfecadastro" name="mgtnfecadastro" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">MGT - NFe - Consulta de Cadastro</property>
  <property name="DocType">dtNone</property>
  <property name="Height">520</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfecadastro</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfecadastroCreate</property>
  <property name="jsOnLoad">mgtnfecadastroJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - Consulta de Cadastro]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption">Consulta de Cadastro</property>
    <property name="Height">72</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">17</property>
    <property name="Width">730</property>
    <object class="ComboBox" name="nfe_estado" >
      <property name="Height">18</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">245</property>
      <property name="Name">nfe_estado</property>
      <property name="Top">18</property>
      <property name="Width">49</property>
      <property name="jsOnKeyPress">nfe_estadoJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Sigla da UF (Informar SU para Suframa):</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label6</property>
      <property name="Top">21</property>
      <property name="Width">237</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Inscricao Estadual:]]></property>
      <property name="Height">13</property>
      <property name="Left">40</property>
      <property name="Name">Label7</property>
      <property name="Top">44</property>
      <property name="Width">109</property>
    </object>
    <object class="Edit" name="nfe_inscricao_estadual" >
      <property name="Height">21</property>
      <property name="Left">152</property>
      <property name="MaxLength">15</property>
      <property name="Name">nfe_inscricao_estadual</property>
      <property name="Top">40</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">nfe_inscricao_estadualJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_inscricao_estadualJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agRight</property>
      <property name="Caption">CNPJ:</property>
      <property name="Height">13</property>
      <property name="Left">304</property>
      <property name="Name">Label8</property>
      <property name="Top">44</property>
      <property name="Width">37</property>
    </object>
    <object class="Edit" name="nfe_cnpj" >
      <property name="Height">21</property>
      <property name="Left">344</property>
      <property name="MaxLength">18</property>
      <property name="Name">nfe_cnpj</property>
      <property name="Top">40</property>
      <property name="Width">132</property>
      <property name="jsOnKeyPress">nfe_cnpjJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_cnpjJSKeyUp</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Alignment">agRight</property>
      <property name="Caption">CPF:</property>
      <property name="Height">13</property>
      <property name="Left">504</property>
      <property name="Name">Label9</property>
      <property name="Top">44</property>
      <property name="Width">29</property>
    </object>
    <object class="Edit" name="nfe_cpf" >
      <property name="Height">21</property>
      <property name="Left">536</property>
      <property name="MaxLength">14</property>
      <property name="Name">nfe_cpf</property>
      <property name="Top">40</property>
      <property name="Width">132</property>
      <property name="jsOnKeyPress">nfe_cpfJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_cpfJSKeyUp</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">ou</property>
      <property name="Height">13</property>
      <property name="Left">480</property>
      <property name="Name">Label10</property>
      <property name="Top">44</property>
      <property name="Width">19</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">ou</property>
      <property name="Height">13</property>
      <property name="Left">275</property>
      <property name="Name">Label1</property>
      <property name="Top">44</property>
      <property name="Width">19</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Erros encontrados na Consulta de Cadastro</property>
    <property name="Height">363</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">94</property>
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
      <property name="Height">309</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">listagem_erros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">43</property>
      <property name="Width">711</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Envio da Consulta de Cadastro</property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">461</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption">Enviar Consulta de Cadastro</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">610</property>
        <property name="Top">476</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
