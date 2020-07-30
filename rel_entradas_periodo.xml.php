<?php
<object class="relentradasperiodo" name="relentradasperiodo" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">590</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">relentradasperiodo</property>
  <property name="Width">755</property>
  <property name="OnCreate">relentradasperiodoCreate</property>
  <property name="jsOnLoad">relentradasperiodoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[RELATORIO DE FATURAMENTO - Entradas Emitidas por Periodo]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Periodo]]></property>
    <property name="Height">66</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">89</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Data Inicial</property>
      <property name="Height">13</property>
      <property name="Left">193</property>
      <property name="Name">Label1</property>
      <property name="Top">27</property>
      <property name="Width">70</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_inicial" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">270</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_inicial</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_inicialJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Data Final</property>
      <property name="Height">13</property>
      <property name="Left">385</property>
      <property name="Name">Label2</property>
      <property name="Top">27</property>
      <property name="Width">56</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_final" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">448</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_final</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">23</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_finalJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_finalJSKeyUp</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Ate]]></property>
      <property name="Height">13</property>
      <property name="Left">355</property>
      <property name="Name">Label3</property>
      <property name="Top">27</property>
      <property name="Width">20</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">160</property>
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
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption"><![CDATA[Opcoes de Busca]]></property>
    <property name="Height">48</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">36</property>
    <property name="Width">730</property>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">154</property>
      <property name="Name">Label4</property>
      <property name="Top">20</property>
      <property name="Width">73</property>
    </object>
    <object class="Edit" name="busca_razao_social" >
      <property name="Height">21</property>
      <property name="Left">232</property>
      <property name="MaxLength">100</property>
      <property name="Name">busca_razao_social</property>
      <property name="TabOrder">2</property>
      <property name="Top">16</property>
      <property name="Width">486</property>
      <property name="jsOnKeyPress">busca_razao_socialJSKeyPress</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Estado</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label8</property>
      <property name="Top">20</property>
      <property name="Width">41</property>
    </object>
    <object class="ComboBox" name="busca_estado" >
      <property name="Height">21</property>
      <property name="Items"><![CDATA[a:28:{s:0:&quot;&quot;;s:5:&quot;Todos&quot;;s:2:&quot;AC&quot;;s:2:&quot;AC&quot;;s:2:&quot;AL&quot;;s:2:&quot;AL&quot;;s:2:&quot;AP&quot;;s:2:&quot;AP&quot;;s:2:&quot;AM&quot;;s:2:&quot;AM&quot;;s:2:&quot;BA&quot;;s:2:&quot;BA&quot;;s:2:&quot;CE&quot;;s:2:&quot;CE&quot;;s:2:&quot;DF&quot;;s:2:&quot;DF&quot;;s:2:&quot;ES&quot;;s:2:&quot;ES&quot;;s:2:&quot;GO&quot;;s:2:&quot;GO&quot;;s:2:&quot;MA&quot;;s:2:&quot;MA&quot;;s:2:&quot;MT&quot;;s:2:&quot;MT&quot;;s:2:&quot;MS&quot;;s:2:&quot;MS&quot;;s:2:&quot;MG&quot;;s:2:&quot;MG&quot;;s:2:&quot;PA&quot;;s:2:&quot;PA&quot;;s:2:&quot;PB&quot;;s:2:&quot;PB&quot;;s:2:&quot;PR&quot;;s:2:&quot;PR&quot;;s:2:&quot;PE&quot;;s:2:&quot;PE&quot;;s:2:&quot;PI&quot;;s:2:&quot;PI&quot;;s:2:&quot;RN&quot;;s:2:&quot;RN&quot;;s:2:&quot;RS&quot;;s:2:&quot;RS&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RJ&quot;;s:2:&quot;RO&quot;;s:2:&quot;RO&quot;;s:2:&quot;RR&quot;;s:2:&quot;RR&quot;;s:2:&quot;SC&quot;;s:2:&quot;SC&quot;;s:2:&quot;SP&quot;;s:2:&quot;SP&quot;;s:2:&quot;SE&quot;;s:2:&quot;SE&quot;;s:2:&quot;TO&quot;;s:2:&quot;TO&quot;;}]]></property>
      <property name="Left">52</property>
      <property name="Name">busca_estado</property>
      <property name="Top">16</property>
      <property name="Width">72</property>
      <property name="jsOnKeyPress">busca_estadoJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">ou</property>
      <property name="Height">13</property>
      <property name="Left">132</property>
      <property name="Name">Label6</property>
      <property name="Top">20</property>
      <property name="Width">15</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">699</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
