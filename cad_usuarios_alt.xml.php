<?php
<object class="cadusuariosalt" name="cadusuariosalt" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadusuariosalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadusuariosaltCreate</property>
  <property name="jsOnLoad">cadusuariosaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Usuarios - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">175</property>
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
      <property name="Top">17</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">16</property>
      <property name="Width">131</property>
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
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">32</property>
      <property name="Width">148</property>
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
    <property name="Caption">Cadastro</property>
    <property name="Height">129</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label5" >
      <property name="Caption">Login</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label5</property>
      <property name="Top">25</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_usuario_login" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">118</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_usuario_login</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">21</property>
      <property name="Width">296</property>
      <property name="jsOnKeyPress">mgt_usuario_loginJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">Nome Completo</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label6</property>
      <property name="Top">74</property>
      <property name="Width">97</property>
    </object>
    <object class="Edit" name="mgt_usuario_nome_completo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">118</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_usuario_nome_completo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">70</property>
      <property name="Width">593</property>
      <property name="jsOnKeyPress">mgt_usuario_nome_completoJSKeyPress</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Departamento</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label7</property>
      <property name="Top">99</property>
      <property name="Width">83</property>
    </object>
    <object class="Edit" name="mgt_usuario_departamento" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">118</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_usuario_departamento</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">95</property>
      <property name="Width">593</property>
      <property name="jsOnKeyPress">mgt_usuario_departamentoJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Senha</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label4</property>
      <property name="Top">49</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_usuario_senha" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="IsPassword">1</property>
      <property name="Left">118</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_usuario_senha</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">45</property>
      <property name="Width">296</property>
      <property name="jsOnKeyPress">mgt_usuario_senhaJSKeyPress</property>
    </object>
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
    <property name="Top">236</property>
    <property name="Width">369</property>
    <property name="jsOnClose"></property>
    <property name="jsOnMaximize"></property>
    <property name="jsOnMinimize"></property>
    <property name="jsOnMove"></property>
    <property name="jsOnRestore"></property>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">107</property>
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
        <property name="Left">693</property>
        <property name="Top">237</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
