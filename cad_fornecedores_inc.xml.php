<?php
<object class="cadfornecedoresinc" name="cadfornecedoresinc" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadfornecedoresinc</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadfornecedoresincCreate</property>
  <property name="jsOnLoad">cadfornecedoresincJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Fornecedores - Inclusao]]></property>
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
    <object class="Edit" name="mgt_fornecedor_nome" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_fornecedor_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">68</property>
      <property name="Width">366</property>
      <property name="jsOnKeyPress">mgt_fornecedor_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label3</property>
      <property name="Top">96</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_fornecedor_razao_social" >
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_fornecedor_razao_social</property>
      <property name="TabOrder">2</property>
      <property name="Top">92</property>
      <property name="Width">366</property>
      <property name="jsOnKeyPress">mgt_fornecedor_razao_socialJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">494</property>
      <property name="Name">Label4</property>
      <property name="Top">72</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_fornecedor_inscricao_estadual" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_fornecedor_inscricao_estadual</property>
      <property name="TabOrder">2</property>
      <property name="Top">68</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_fornecedor_inscricao_estadualJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
      <property name="Height">13</property>
      <property name="Left">493</property>
      <property name="Name">Label5</property>
      <property name="Top">96</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_fornecedor_inscricao_municipal" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_fornecedor_inscricao_municipal</property>
      <property name="TabOrder">2</property>
      <property name="Top">92</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_fornecedor_inscricao_municipalJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">CNPJ</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label6</property>
      <property name="Top">48</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_fornecedor_codigo" >
      <property name="Height">21</property>
      <property name="Left">94</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_fornecedor_codigo</property>
      <property name="TabOrder">2</property>
      <property name="Top">44</property>
      <property name="Width">130</property>
      <property name="jsOnKeyPress">mgt_fornecedor_codigoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_fornecedor_codigoJSKeyUp</property>
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
      <object class="Edit" name="mgt_fornecedor_endereco" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_fornecedor_endereco</property>
        <property name="Top">37</property>
        <property name="Width">684</property>
        <property name="jsOnKeyPress">mgt_fornecedor_enderecoJSKeyPress</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">15</property>
        <property name="Name">Label13</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_bairro" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_fornecedor_bairro</property>
        <property name="Top">80</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_fornecedor_bairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">145</property>
        <property name="Name">Label7</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_cidade" >
        <property name="Height">21</property>
        <property name="Left">145</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_fornecedor_cidade</property>
        <property name="Top">80</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_fornecedor_cidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label8" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">269</property>
        <property name="Name">Label8</property>
        <property name="Top">64</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_fornecedor_estado" >
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">269</property>
        <property name="Name">mgt_fornecedor_estado</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_fornecedor_estadoJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">344</property>
        <property name="Name">Label9</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_cep" >
        <property name="Height">21</property>
        <property name="Left">346</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_fornecedor_cep</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_fornecedor_cepJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_fornecedor_cepJSKeyUp</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">423</property>
        <property name="Name">Label10</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_pais" >
        <property name="Height">21</property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_fornecedor_pais</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_fornecedor_paisJSKeyPress</property>
      </object>
      <object class="Label" name="Label15" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Left">548</property>
        <property name="Name">Label15</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_fone" >
        <property name="Height">21</property>
        <property name="Left">548</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_fone</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_fornecedor_foneJSKeyPress</property>
      </object>
      <object class="Label" name="Label21" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">624</property>
        <property name="Name">Label21</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_fax" >
        <property name="Height">21</property>
        <property name="Left">624</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_fax</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_fornecedor_faxJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados de Contato</property>
      <property name="Height">65</property>
      <property name="Left">9</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">226</property>
      <property name="Width">712</property>
      <object class="Label" name="Label14" >
        <property name="Caption">Comercial</property>
        <property name="Height">13</property>
        <property name="Left">116</property>
        <property name="Name">Label14</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_fone_comercial" >
        <property name="Height">21</property>
        <property name="Left">116</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_fone_comercial</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_fornecedor_fone_comercialJSKeyPress</property>
      </object>
      <object class="Label" name="Label16" >
        <property name="Caption">Contato</property>
        <property name="Height">13</property>
        <property name="Left">11</property>
        <property name="Name">Label16</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_contato" >
        <property name="Height">21</property>
        <property name="Left">11</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_contato</property>
        <property name="Top">32</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_fornecedor_contatoJSKeyPress</property>
      </object>
      <object class="Label" name="Label17" >
        <property name="Caption">E-mail</property>
        <property name="Height">13</property>
        <property name="Left">361</property>
        <property name="Name">Label17</property>
        <property name="Top">16</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_email" >
        <property name="Height">21</property>
        <property name="Left">361</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_fornecedor_email</property>
        <property name="Top">32</property>
        <property name="Width">170</property>
        <property name="jsOnKeyPress">mgt_fornecedor_emailJSKeyPress</property>
      </object>
      <object class="Label" name="Label22" >
        <property name="Caption">Celular</property>
        <property name="Height">13</property>
        <property name="Left">198</property>
        <property name="Name">Label22</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_fone_celular" >
        <property name="Height">21</property>
        <property name="Left">198</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_fone_celular</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_fornecedor_fone_celularJSKeyPress</property>
      </object>
      <object class="Label" name="Label23" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">280</property>
        <property name="Name">Label23</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_fone_fax" >
        <property name="Height">21</property>
        <property name="Left">280</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_fornecedor_fone_fax</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_fornecedor_fone_faxJSKeyPress</property>
      </object>
      <object class="Label" name="Label24" >
        <property name="Caption">Site</property>
        <property name="Height">13</property>
        <property name="Left">535</property>
        <property name="Name">Label24</property>
        <property name="Top">16</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_site" >
        <property name="Height">21</property>
        <property name="Left">535</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_fornecedor_site</property>
        <property name="Top">32</property>
        <property name="Width">170</property>
        <property name="jsOnKeyPress">mgt_fornecedor_siteJSKeyPress</property>
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
    <object class="Memo" name="mgt_fornecedor_observacoes" >
      <property name="Height">76</property>
      <property name="Left">9</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_fornecedor_observacoes</property>
      <property name="Top">313</property>
      <property name="Width">539</property>
      <property name="jsOnKeyPress">mgt_fornecedor_observacoesJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_fornecedor_area" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{s:7:&quot;Compras&quot;;s:7:&quot;Compras&quot;;s:14:&quot;Contas a Pagar&quot;;s:14:&quot;Contas a Pagar&quot;;}]]></property>
      <property name="Left">344</property>
      <property name="Name">mgt_fornecedor_area</property>
      <property name="Top">44</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_fornecedor_areaJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Pertence a Area de]]></property>
      <property name="Height">13</property>
      <property name="Left">228</property>
      <property name="Name">Label1</property>
      <property name="Top">48</property>
      <property name="Width">109</property>
    </object>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption">Datas</property>
      <property name="Height">55</property>
      <property name="Left">461</property>
      <property name="Name">GroupBox5</property>
      <property name="Top">10</property>
      <property name="Width">263</property>
      <object class="Label" name="Label25" >
        <property name="Caption"><![CDATA[Inclusao]]></property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label25</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_data_inclusao" >
        <property name="Height">21</property>
        <property name="Left">7</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_fornecedor_data_inclusao</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_fornecedor_data_inclusaoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_fornecedor_data_inclusaoJSKeyUp</property>
      </object>
      <object class="Label" name="Label26" >
        <property name="Caption"><![CDATA[Alteracao]]></property>
        <property name="Height">13</property>
        <property name="Left">90</property>
        <property name="Name">Label26</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_data_alteracao" >
        <property name="Height">21</property>
        <property name="Left">90</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_fornecedor_data_alteracao</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_fornecedor_data_alteracaoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_fornecedor_data_alteracaoJSKeyUp</property>
      </object>
      <object class="Label" name="Label27" >
        <property name="Caption">Compra</property>
        <property name="Height">13</property>
        <property name="Left">173</property>
        <property name="Name">Label27</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_data_ultima_compra" >
        <property name="Height">21</property>
        <property name="Left">173</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_fornecedor_data_ultima_compra</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_fornecedor_data_ultima_compraJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_fornecedor_data_ultima_compraJSKeyUp</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox6" >
      <property name="Caption">Valores</property>
      <property name="Height">87</property>
      <property name="Left">552</property>
      <property name="Name">GroupBox6</property>
      <property name="Top">307</property>
      <property name="Width">169</property>
      <object class="Label" name="Label12" >
        <property name="Caption"><![CDATA[Ultimo Valor Pago]]></property>
        <property name="Height">13</property>
        <property name="Left">31</property>
        <property name="Name">Label12</property>
        <property name="Top">26</property>
        <property name="Width">107</property>
      </object>
      <object class="Edit" name="mgt_fornecedor_ultimo_valor" >
        <property name="Height">21</property>
        <property name="Left">34</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_fornecedor_ultimo_valor</property>
        <property name="Top">42</property>
        <property name="Width">101</property>
        <property name="jsOnKeyPress">mgt_fornecedor_ultimo_valorJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_fornecedor_ultimo_valorJSKeyUp</property>
      </object>
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
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Incluir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
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
      <property name="Top">20</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">19</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">717</property>
        <property name="Top">253</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
