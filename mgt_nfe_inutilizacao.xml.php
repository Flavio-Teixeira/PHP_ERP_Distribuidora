<?php
<object class="mgtnfeinutilizacao" name="mgtnfeinutilizacao" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[MGT - NFe - Inutilizacao de Numero]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">640</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfeinutilizacao</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfeinutilizacaoCreate</property>
  <property name="jsOnLoad">mgtnfeinutilizacaoJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - Inutilizacao de Numeracao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Numeracao para Inutilizacao]]></property>
    <property name="Height">136</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">18</property>
    <property name="Width">730</property>
    <object class="Edit" name="nfe_inicial" >
      <property name="Height">21</property>
      <property name="Left">256</property>
      <property name="MaxLength">7</property>
      <property name="Name">nfe_inicial</property>
      <property name="Top">40</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">nfe_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_inicialJSKeyUp</property>
    </object>
    <object class="Edit" name="nfe_final" >
      <property name="Height">21</property>
      <property name="Left">256</property>
      <property name="MaxLength">7</property>
      <property name="Name">nfe_final</property>
      <property name="Top">64</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">nfe_finalJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_finalJSKeyUp</property>
    </object>
    <object class="Edit" name="nfe_justificativa" >
      <property name="Height">21</property>
      <property name="Left">8</property>
      <property name="MaxLength">255</property>
      <property name="Name">nfe_justificativa</property>
      <property name="Top">105</property>
      <property name="Width">713</property>
      <property name="jsOnKeyPress">nfe_justificativaJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Numeracao da NF-e inicial a ser inutilizada:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">44</property>
      <property name="Width">245</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Numeracao da NF-e final a ser inutilizada:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label2</property>
      <property name="Top">68</property>
      <property name="Width">240</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Informar a Justificativa do pedido de inutilizacao (Sem acentos, Minimo de 15 digitos e no Maximo 255 digitos):]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="Top">91</property>
      <property name="Width">654</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Ano de inutilizacao:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label4</property>
      <property name="Top">20</property>
      <property name="Width">245</property>
    </object>
    <object class="Edit" name="nfe_ano" >
      <property name="Height">21</property>
      <property name="Left">256</property>
      <property name="MaxLength">2</property>
      <property name="Name">nfe_ano</property>
      <property name="Top">16</property>
      <property name="Width">28</property>
      <property name="jsOnKeyPress">nfe_anoJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_anoJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Envio da Numeracao para Inutilizacao]]></property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">460</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption"><![CDATA[Enviar a Inutilizacao de Mumero]]></property>
      <property name="Height">25</property>
      <property name="Left">96</property>
      <property name="Name">bt_enviar</property>
      <property name="Top">16</property>
      <property name="Width">251</property>
      <property name="OnClick">bt_enviarClick</property>
    </object>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">646</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">16</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_imprimir" >
      <property name="Caption"><![CDATA[Imprimir Protocolo de Inutilizacao]]></property>
      <property name="Enabled">0</property>
      <property name="Height">25</property>
      <property name="Left">368</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">16</property>
      <property name="Width">227</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Erros encontrados no envio</property>
    <property name="Height">299</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">158</property>
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
      <property name="Height">245</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">listagem_erros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">43</property>
      <property name="Width">711</property>
    </object>
  </object>
  <object class="HiddenField" name="tipo_ambiente" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">tipo_ambiente</property>
    <property name="Top">518</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="cnpj_padrao" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">cnpj_padrao</property>
    <property name="Top">537</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="status_servico" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">status_servico</property>
    <property name="Top">556</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="nfe_impressao_protocolo" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">nfe_impressao_protocolo</property>
    <property name="Top">575</property>
    <property name="Width">150</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">671</property>
        <property name="Top">533</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
