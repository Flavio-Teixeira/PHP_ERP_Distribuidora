<?php
<object class="cadassistentesinc" name="cadassistentesinc" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadassistentesinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadassistentesincCreate</property>
  <property name="jsOnLoad">cadassistentesincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Assistentes - Inclusao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">425</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">32</property>
    <property name="Width">730</property>
    <object class="Label" name="Label2" >
      <property name="Caption">Nome</property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">46</property>
    </object>
    <object class="Edit" name="mgt_assistente_nome" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">62</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_assistente_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">21</property>
      <property name="Width">459</property>
      <property name="jsOnKeyPress">mgt_assistente_nomeJSKeyPress</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">112</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">48</property>
      <property name="Width">712</property>
      <object class="Label" name="Label4" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Left">13</property>
        <property name="Name">Label4</property>
        <property name="Top">24</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_assistente_endereco" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_assistente_endereco</property>
        <property name="ParentColor">0</property>
        <property name="Top">40</property>
        <property name="Width">539</property>
        <property name="jsOnKeyPress">mgt_assistente_enderecoJSKeyPress</property>
      </object>
      <object class="Label" name="Label5" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Left">575</property>
        <property name="Name">Label5</property>
        <property name="Top">24</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_assistente_complemento" >
        <property name="Height">21</property>
        <property name="Left">575</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_assistente_complemento</property>
        <property name="Top">40</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_assistente_complementoJSKeyPress</property>
      </object>
      <object class="Label" name="Label6" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">15</property>
        <property name="Name">Label6</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_assistente_bairro" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_assistente_bairro</property>
        <property name="ParentColor">0</property>
        <property name="Top">80</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">mgt_assistente_bairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">192</property>
        <property name="Name">Label7</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_cidade" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">192</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_assistente_cidade</property>
        <property name="ParentColor">0</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_assistente_cidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label8" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">335</property>
        <property name="Name">Label8</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="ComboBox" name="mgt_assistente_estado" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">335</property>
        <property name="Name">mgt_assistente_estado</property>
        <property name="ParentColor">0</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_assistente_estadoJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">429</property>
        <property name="Name">Label9</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_cep" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">431</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_assistente_cep</property>
        <property name="ParentColor">0</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_assistente_cepJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_assistente_cepJSKeyUp</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">575</property>
        <property name="Name">Label10</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_pais" >
        <property name="Height">21</property>
        <property name="Left">575</property>
        <property name="MaxLength">30</property>
        <property name="Name">mgt_assistente_pais</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_assistente_paisJSKeyPress</property>
      </object>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Contato</property>
      <property name="Height">13</property>
      <property name="Left">528</property>
      <property name="Name">Label11</property>
      <property name="Top">25</property>
      <property name="Width">52</property>
    </object>
    <object class="Edit" name="mgt_assistente_contato" >
      <property name="Height">21</property>
      <property name="Left">584</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_assistente_contato</property>
      <property name="Top">21</property>
      <property name="Width">121</property>
      <property name="jsOnKeyPress">mgt_assistente_contatoJSKeyPress</property>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados de Contato</property>
      <property name="Height">88</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">160</property>
      <property name="Width">712</property>
      <object class="Label" name="Label12" >
        <property name="Caption">DDD</property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label12</property>
        <property name="Top">16</property>
        <property name="Width">34</property>
      </object>
      <object class="Edit" name="mgt_assistente_ddd" >
        <property name="Height">21</property>
        <property name="Left">7</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_assistente_ddd</property>
        <property name="Top">32</property>
        <property name="Width">30</property>
        <property name="jsOnKeyPress">mgt_assistente_dddJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_assistente_dddJSKeyUp</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">Ramal</property>
        <property name="Height">13</property>
        <property name="Left">47</property>
        <property name="Name">Label13</property>
        <property name="Top">16</property>
        <property name="Width">42</property>
      </object>
      <object class="Edit" name="mgt_assistente_fone_ramal" >
        <property name="Height">21</property>
        <property name="Left">47</property>
        <property name="MaxLength">5</property>
        <property name="Name">mgt_assistente_fone_ramal</property>
        <property name="Top">32</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_assistente_fone_ramalJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_assistente_fone_ramalJSKeyUp</property>
      </object>
      <object class="Label" name="Label14" >
        <property name="Caption">Comercial</property>
        <property name="Height">13</property>
        <property name="Left">103</property>
        <property name="Name">Label14</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_fone_com" >
        <property name="Height">21</property>
        <property name="Left">103</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_assistente_fone_com</property>
        <property name="Top">32</property>
        <property name="Width">180</property>
        <property name="jsOnKeyPress">mgt_assistente_fone_comJSKeyPress</property>
      </object>
      <object class="Label" name="Label15" >
        <property name="Caption">Residencial</property>
        <property name="Height">13</property>
        <property name="Left">311</property>
        <property name="Name">Label15</property>
        <property name="Top">18</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_fone_res" >
        <property name="Height">21</property>
        <property name="Left">311</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_assistente_fone_res</property>
        <property name="Top">32</property>
        <property name="Width">180</property>
        <property name="jsOnKeyPress">mgt_assistente_fone_resJSKeyPress</property>
      </object>
      <object class="Label" name="Label16" >
        <property name="Caption">Celular</property>
        <property name="Height">13</property>
        <property name="Left">519</property>
        <property name="Name">Label16</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_fone_cel" >
        <property name="Height">21</property>
        <property name="Left">519</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_assistente_fone_cel</property>
        <property name="Top">32</property>
        <property name="Width">180</property>
        <property name="jsOnKeyPress">mgt_assistente_fone_celJSKeyPress</property>
      </object>
      <object class="Label" name="Label17" >
        <property name="Caption">E-mail</property>
        <property name="Height">13</property>
        <property name="Left">46</property>
        <property name="Name">Label17</property>
        <property name="Top">60</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_assistente_email" >
        <property name="Height">21</property>
        <property name="Left">103</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_assistente_email</property>
        <property name="Top">56</property>
        <property name="Width">595</property>
        <property name="jsOnKeyPress">mgt_assistente_emailJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption">Dados Adicionais</property>
      <property name="Height">168</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox5</property>
      <property name="Top">248</property>
      <property name="Width">712</property>
      <object class="Label" name="Label18" >
        <property name="Caption">Porcentagem</property>
        <property name="Height">13</property>
        <property name="Left">16</property>
        <property name="Name">Label18</property>
        <property name="Top">28</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_assistente_1_porcentagem" >
        <property name="Color">#F4F1AA</property>
        <property name="Height">21</property>
        <property name="Left">96</property>
        <property name="MaxLength">8</property>
        <property name="Name">mgt_assistente_1_porcentagem</property>
        <property name="ParentColor">0</property>
        <property name="Top">24</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_assistente_1_porcentagemJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_assistente_1_porcentagemJSKeyUp</property>
      </object>
      <object class="GroupBox" name="GroupBox6" >
        <property name="Caption">Calcula ICMS</property>
        <property name="Height">56</property>
        <property name="Left">265</property>
        <property name="Name">GroupBox6</property>
        <property name="Top">16</property>
        <property name="Width">184</property>
        <object class="RadioGroup" name="mgt_assistente_icms" >
          <property name="Columns">2</property>
          <property name="Height">32</property>
          <property name="ItemIndex">0</property>
          <property name="Items"><![CDATA[a:2:{i:0;s:3:&quot;Sim&quot;;i:1;s:3:&quot;Nao&quot;;}]]></property>
          <property name="Name">mgt_assistente_icms</property>
          <property name="Top">16</property>
          <property name="Width">145</property>
        </object>
      </object>
      <object class="GroupBox" name="GroupBox7" >
        <property name="Caption"><![CDATA[Emite os Relatorios]]></property>
        <property name="Height">56</property>
        <property name="Left">500</property>
        <property name="Name">GroupBox7</property>
        <property name="Top">16</property>
        <property name="Width">200</property>
        <object class="RadioGroup" name="mgt_assistente_relatorio" >
          <property name="Columns">2</property>
          <property name="Height">32</property>
          <property name="ItemIndex">0</property>
          <property name="Items"><![CDATA[a:2:{i:0;s:3:&quot;Sim&quot;;i:1;s:3:&quot;Nao&quot;;}]]></property>
          <property name="Left">15</property>
          <property name="Name">mgt_assistente_relatorio</property>
          <property name="Top">16</property>
          <property name="Width">148</property>
        </object>
      </object>
      <object class="Label" name="Label19" >
        <property name="Caption"><![CDATA[Observacoes]]></property>
        <property name="Height">13</property>
        <property name="Left">16</property>
        <property name="Name">Label19</property>
        <property name="Top">72</property>
        <property name="Width">75</property>
      </object>
      <object class="Memo" name="mgt_assistente_observacao" >
        <property name="Height">64</property>
        <property name="Left">16</property>
        <property name="Lines">a:0:{}</property>
        <property name="Name">mgt_assistente_observacao</property>
        <property name="Top">88</property>
        <property name="Width">680</property>
        <property name="jsOnKeyPress">mgt_assistente_observacaoJSKeyPress</property>
      </object>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">50</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">457</property>
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
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">326</property>
      <property name="Name">bt_incluir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_incluirClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">15</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label1</property>
      <property name="Top">14</property>
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
      <property name="Top">31</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label3</property>
      <property name="Top">30</property>
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
    <property name="Top">15</property>
    <property name="Width">730</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">685</property>
        <property name="Top">5</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
