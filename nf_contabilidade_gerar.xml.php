<?php
<object class="nfcontabilidadegerar" name="nfcontabilidadegerar" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">590</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfcontabilidadegerar</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfcontabilidadegerarCreate</property>
  <property name="jsOnLoad">nfcontabilidadegerarJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Arquivos de Transmissao - Contabilidade - CONTMATIC (GERACAO)]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Nota Fiscal</property>
    <property name="Height">99</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[&lt;b&gt;Mes:&lt;/b&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">272</property>
      <property name="Name">Label1</property>
      <property name="Top">12</property>
      <property name="Width">30</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[&lt;b&gt;Ano:&lt;/b&gt;]]></property>
      <property name="Height">13</property>
      <property name="Left">352</property>
      <property name="Name">Label2</property>
      <property name="Top">12</property>
      <property name="Width">30</property>
    </object>
    <object class="Label" name="gera_mes_escolhido" >
      <property name="Caption">00</property>
      <property name="Height">13</property>
      <property name="Left">304</property>
      <property name="Name">gera_mes_escolhido</property>
      <property name="Top">12</property>
      <property name="Width">20</property>
    </object>
    <object class="Label" name="gera_ano_escolhido" >
      <property name="Caption">0000</property>
      <property name="Height">13</property>
      <property name="Left">386</property>
      <property name="Name">gera_ano_escolhido</property>
      <property name="Top">13</property>
      <property name="Width">30</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption">e</property>
      <property name="Height">12</property>
      <property name="Left">335</property>
      <property name="Name">Label5</property>
      <property name="Top">13</property>
      <property name="Width">12</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Arquivos de Integracao Contabil gerados com sucesso, clique no  link abaixo para salva-los em seu computador e envia-los para a Contabilidade:]]></property>
      <property name="Font">
            <property name="Color">#FF0000</property>
            <property name="Style">fsNormal</property>
      </property>
      <property name="Height">22</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="ParentColor">0</property>
      <property name="ParentFont">0</property>
      <property name="Top">26</property>
      <property name="Width">715</property>
    </object>
    <object class="Label" name="arquivo_saida" >
      <property name="Caption">xxxxxxxx.S99</property>
      <property name="Height">13</property>
      <property name="Left">296</property>
      <property name="Name">arquivo_saida</property>
      <property name="Top">59</property>
      <property name="Width">100</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">142</property>
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
