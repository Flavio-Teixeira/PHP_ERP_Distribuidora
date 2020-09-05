<?php
<object class="cadivasalt" name="cadivasalt" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadivasalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadivasaltCreate</property>
  <property name="jsOnLoad">cadivasaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - IVAs - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">64</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label8" >
      <property name="Caption">Estado</property>
      <property name="Height">13</property>
      <property name="Left">30</property>
      <property name="Name">Label8</property>
      <property name="Top">28</property>
      <property name="Width">45</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">N.C.M.</property>
      <property name="Height">13</property>
      <property name="Left">166</property>
      <property name="Name">Label2</property>
      <property name="Top">28</property>
      <property name="Width">43</property>
    </object>
    <object class="Edit" name="mgt_iva_ncm" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">214</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_iva_ncm</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">24</property>
      <property name="Width">71</property>
      <property name="jsOnKeyPress">mgt_iva_ncmJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Valor IVA (%)</property>
      <property name="Height">13</property>
      <property name="Left">298</property>
      <property name="Name">Label1</property>
      <property name="Top">28</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_iva_valor" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">382</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_iva_valor</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">24</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_iva_valorJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_iva_valorJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_iva_estado" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">78</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_iva_estado</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">24</property>
      <property name="Width">71</property>
      <property name="jsOnKeyPress">mgt_iva_ncmJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Aliquota Interna (%)</property>
      <property name="Height">13</property>
      <property name="Left">477</property>
      <property name="Name">Label4</property>
      <property name="Top">28</property>
      <property name="Width">117</property>
    </object>
    <object class="Edit" name="mgt_iva_aliquota_interna" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">598</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_iva_aliquota_interna</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">24</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_iva_aliquota_internaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_iva_aliquota_internaJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">109</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">645</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">279</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">360</property>
      <property name="Name">bt_excluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_excluirClick</property>
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
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">188</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">203</property>
    <property name="Width">369</property>
    <property name="jsOnClose"></property>
    <property name="jsOnMaximize"></property>
    <property name="jsOnMinimize"></property>
    <property name="jsOnMove"></property>
    <property name="jsOnRestore"></property>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">106</property>
      <property name="Name">bt_nao</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">188</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label11</property>
      <property name="Top">57</property>
      <property name="Width">38</property>
    </object>
    <object class="Edit" name="mgt_operacao_cadastro_motivo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">47</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_operacao_cadastro_motivo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">315</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">677</property>
        <property name="Top">173</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
