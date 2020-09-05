<?php
<object class="cadtransportadorasalt" name="cadtransportadorasalt" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">630</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadtransportadorasalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadtransportadorasaltCreate</property>
  <property name="jsOnLoad">cadtransportadorasaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Transportadoras - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">402</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label2" >
      <property name="Caption">Nome</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label2</property>
      <property name="Top">72</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_transportadora_nome" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_transportadora_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">68</property>
      <property name="Width">390</property>
      <property name="jsOnKeyPress">mgt_transportadora_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label3</property>
      <property name="Top">96</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_transportadora_razao_social" >
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_transportadora_razao_social</property>
      <property name="TabOrder">2</property>
      <property name="Top">92</property>
      <property name="Width">390</property>
      <property name="jsOnKeyPress">mgt_transportadora_razao_socialJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">494</property>
      <property name="Name">Label4</property>
      <property name="Top">72</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_transportadora_insc_est" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_transportadora_insc_est</property>
      <property name="TabOrder">2</property>
      <property name="Top">68</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_transportadora_insc_estJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
      <property name="Height">13</property>
      <property name="Left">493</property>
      <property name="Name">Label5</property>
      <property name="Top">96</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_transportadora_insc_mun" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_transportadora_insc_mun</property>
      <property name="TabOrder">2</property>
      <property name="Top">92</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_transportadora_insc_munJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">CNPJ/CPF</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label6</property>
      <property name="Top">48</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_transportadora_cnpj" >
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_transportadora_cnpj</property>
      <property name="TabOrder">2</property>
      <property name="Top">44</property>
      <property name="Width">130</property>
      <property name="jsOnKeyPress">mgt_transportadora_cnpjJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_transportadora_cnpjJSKeyUp</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption"><![CDATA[Endereco]]></property>
      <property name="Height">112</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">114</property>
      <property name="Width">712</property>
      <object class="Label" name="Label11" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Left">13</property>
        <property name="Name">Label11</property>
        <property name="Top">24</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_transportadora_endereco" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_transportadora_endereco</property>
        <property name="Top">40</property>
        <property name="Width">539</property>
        <property name="jsOnKeyPress">mgt_transportadora_enderecoJSKeyPress</property>
      </object>
      <object class="Label" name="Label12" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Left">575</property>
        <property name="Name">Label12</property>
        <property name="Top">24</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_transportadora_complemento" >
        <property name="Height">21</property>
        <property name="Left">575</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_transportadora_complemento</property>
        <property name="Top">40</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_transportadora_complementoJSKeyPress</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">15</property>
        <property name="Name">Label13</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_transportadora_bairro" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_transportadora_bairro</property>
        <property name="Top">80</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">mgt_transportadora_bairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">192</property>
        <property name="Name">Label7</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_transportadora_cidade" >
        <property name="Height">21</property>
        <property name="Left">192</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_transportadora_cidade</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_transportadora_cidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label8" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">335</property>
        <property name="Name">Label8</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="ComboBox" name="mgt_transportadora_estado" >
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">335</property>
        <property name="Name">mgt_transportadora_estado</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_transportadora_estadoJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">429</property>
        <property name="Name">Label9</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_transportadora_cep" >
        <property name="Height">21</property>
        <property name="Left">431</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_transportadora_cep</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_transportadora_cepJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_transportadora_cepJSKeyUp</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">575</property>
        <property name="Name">Label10</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_transportadora_pais" >
        <property name="Height">21</property>
        <property name="Left">575</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_transportadora_pais</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_transportadora_paisJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados de Contato</property>
      <property name="Height">65</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">226</property>
      <property name="Width">712</property>
      <object class="Label" name="Label18" >
        <property name="Caption">DDD</property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label18</property>
        <property name="Top">16</property>
        <property name="Width">34</property>
      </object>
      <object class="Edit" name="mgt_transportadora_ddd" >
        <property name="Height">21</property>
        <property name="Left">7</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_transportadora_ddd</property>
        <property name="Top">32</property>
        <property name="Width">30</property>
        <property name="jsOnKeyPress">mgt_transportadora_dddJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_transportadora_dddJSKeyUp</property>
      </object>
      <object class="Label" name="Label19" >
        <property name="Caption">Ramal</property>
        <property name="Height">13</property>
        <property name="Left">41</property>
        <property name="Name">Label19</property>
        <property name="Top">16</property>
        <property name="Width">42</property>
      </object>
      <object class="Edit" name="mgt_transportadora_ramal" >
        <property name="Height">21</property>
        <property name="Left">41</property>
        <property name="MaxLength">5</property>
        <property name="Name">mgt_transportadora_ramal</property>
        <property name="Top">32</property>
        <property name="Width">40</property>
        <property name="jsOnKeyPress">mgt_transportadora_ramalJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_transportadora_ramalJSKeyUp</property>
      </object>
      <object class="Label" name="Label14" >
        <property name="Caption">Comercial</property>
        <property name="Height">13</property>
        <property name="Left">85</property>
        <property name="Name">Label14</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_transportadora_fone" >
        <property name="Height">21</property>
        <property name="Left">85</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_transportadora_fone</property>
        <property name="Top">32</property>
        <property name="Width">180</property>
        <property name="jsOnKeyPress">mgt_transportadora_foneJSKeyPress</property>
      </object>
      <object class="Label" name="Label16" >
        <property name="Caption">Contato</property>
        <property name="Height">13</property>
        <property name="Left">267</property>
        <property name="Name">Label16</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_transportadora_contato" >
        <property name="Height">21</property>
        <property name="Left">267</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_transportadora_contato</property>
        <property name="Top">32</property>
        <property name="Width">180</property>
        <property name="jsOnKeyPress">mgt_transportadora_contatoJSKeyPress</property>
      </object>
      <object class="Label" name="Label17" >
        <property name="Caption">E-mail</property>
        <property name="Height">13</property>
        <property name="Left">452</property>
        <property name="Name">Label17</property>
        <property name="Top">16</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_transportadora_email" >
        <property name="Height">21</property>
        <property name="Left">452</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_transportadora_email</property>
        <property name="Top">32</property>
        <property name="Width">249</property>
        <property name="jsOnKeyPress">mgt_transportadora_emailJSKeyPress</property>
      </object>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[Observacoes]]></property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label20</property>
      <property name="Top">298</property>
      <property name="Width">75</property>
    </object>
    <object class="Memo" name="mgt_transportadora_observacao" >
      <property name="Height">76</property>
      <property name="Left">9</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_transportadora_observacao</property>
      <property name="Top">314</property>
      <property name="Width">708</property>
      <property name="jsOnKeyPress">mgt_transportadora_observacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">16</property>
      <property name="Name">Label15</property>
      <property name="Top">24</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_transportadora_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_transportadora_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">20</property>
      <property name="Width">50</property>
      <property name="jsOnKeyPress">mgt_transportadora_numeroJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">447</property>
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
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">292</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">369</property>
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
      <property name="Top">18</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label21</property>
      <property name="Top">17</property>
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
    <object class="Label" name="Label22" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label22</property>
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
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">105</property>
    <property name="IsVisible">0</property>
    <property name="Left">189</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">505</property>
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
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label1</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label23</property>
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
        <property name="Left">701</property>
        <property name="Top">13</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
