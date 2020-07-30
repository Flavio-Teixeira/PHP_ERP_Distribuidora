<?php
<object class="cadclientesalt" name="cadclientesalt" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">968</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">cadclientesalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">cadclientesaltCreate</property>
  <property name="jsOnLoad">cadclientesaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[CADASTRO - Clientes - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Cadastro</property>
    <property name="Height">707</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label2" >
      <property name="Caption">Nome</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label2</property>
      <property name="Top">75</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_cliente_nome" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">109</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">71</property>
      <property name="Width">366</property>
      <property name="jsOnKeyPress">mgt_cliente_nomeJSKeyPress</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Razao Social]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label3</property>
      <property name="Top">97</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_cliente_razao_social" >
      <property name="Height">21</property>
      <property name="Left">109</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_cliente_razao_social</property>
      <property name="TabOrder">2</property>
      <property name="Top">93</property>
      <property name="Width">366</property>
      <property name="jsOnKeyPress">mgt_cliente_razao_socialJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Inscricao Estadual]]></property>
      <property name="Height">13</property>
      <property name="Left">494</property>
      <property name="Name">Label4</property>
      <property name="Top">75</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_cliente_inscricao_estadual" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_cliente_inscricao_estadual</property>
      <property name="TabOrder">2</property>
      <property name="Top">71</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_cliente_inscricao_estadualJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Inscricao Municipal]]></property>
      <property name="Height">13</property>
      <property name="Left">493</property>
      <property name="Name">Label5</property>
      <property name="Top">97</property>
      <property name="Width">104</property>
    </object>
    <object class="Edit" name="mgt_cliente_inscricao_municipal" >
      <property name="Height">21</property>
      <property name="Left">603</property>
      <property name="MaxLength">20</property>
      <property name="Name">mgt_cliente_inscricao_municipal</property>
      <property name="TabOrder">2</property>
      <property name="Top">93</property>
      <property name="Width">113</property>
      <property name="jsOnKeyPress">mgt_cliente_inscricao_municipalJSKeyPress</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">CNPJ</property>
      <property name="Height">13</property>
      <property name="Left">109</property>
      <property name="Name">Label6</property>
      <property name="Top">36</property>
      <property name="Width">35</property>
    </object>
    <object class="Edit" name="mgt_cliente_codigo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">109</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">49</property>
      <property name="Width">140</property>
      <property name="jsOnKeyPress">mgt_cliente_codigoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_cliente_codigoJSKeyUp</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption"><![CDATA[Endereco para Faturamento]]></property>
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
      <object class="Edit" name="mgt_cliente_endereco" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_cliente_endereco</property>
        <property name="Top">37</property>
        <property name="Width">579</property>
        <property name="jsOnKeyPress">mgt_cliente_enderecoJSKeyPress</property>
      </object>
      <object class="Label" name="Label13" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">14</property>
        <property name="Name">Label13</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_cliente_bairro" >
        <property name="Height">21</property>
        <property name="Left">13</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_bairro</property>
        <property name="Top">80</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_cliente_bairroJSKeyPress</property>
      </object>
      <object class="Label" name="Label7" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">145</property>
        <property name="Name">Label7</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cidade" >
        <property name="Height">21</property>
        <property name="Left">145</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_cidade</property>
        <property name="Top">80</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_cliente_cidadeJSKeyPress</property>
      </object>
      <object class="Label" name="Label8" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">269</property>
        <property name="Name">Label8</property>
        <property name="Top">64</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_estado" >
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">269</property>
        <property name="Name">mgt_cliente_estado</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_estadoJSKeyPress</property>
      </object>
      <object class="Label" name="Label9" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">344</property>
        <property name="Name">Label9</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cep" >
        <property name="Height">21</property>
        <property name="Left">346</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_cliente_cep</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_cepJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_cepJSKeyUp</property>
      </object>
      <object class="Label" name="Label10" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">423</property>
        <property name="Name">Label10</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_pais" >
        <property name="Height">21</property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_pais</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_cliente_paisJSKeyPress</property>
      </object>
      <object class="Label" name="Label15" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Left">548</property>
        <property name="Name">Label15</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone" >
        <property name="Height">21</property>
        <property name="Left">548</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_foneJSKeyPress</property>
      </object>
      <object class="Label" name="Label21" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">624</property>
        <property name="Name">Label21</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fax" >
        <property name="Height">21</property>
        <property name="Left">624</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fax</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_faxJSKeyPress</property>
      </object>
      <object class="Label" name="Label61" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Left">596</property>
        <property name="Name">Label61</property>
        <property name="Top">24</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_cliente_complemento" >
        <property name="Height">21</property>
        <property name="Left">596</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_complemento</property>
        <property name="Top">37</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_cliente_complementoJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox4" >
      <property name="Caption">Dados de Contato</property>
      <property name="Height">65</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox4</property>
      <property name="Top">450</property>
      <property name="Width">712</property>
      <object class="Label" name="Label14" >
        <property name="Caption">Comercial</property>
        <property name="Height">13</property>
        <property name="Left">152</property>
        <property name="Name">Label14</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone_comercial" >
        <property name="Height">21</property>
        <property name="Left">152</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone_comercial</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_cliente_fone_comercialJSKeyPress</property>
      </object>
      <object class="Label" name="Label16" >
        <property name="Caption">Contato</property>
        <property name="Height">13</property>
        <property name="Left">11</property>
        <property name="Name">Label16</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_contato" >
        <property name="Height">21</property>
        <property name="Left">11</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_contato</property>
        <property name="Top">32</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_cliente_contatoJSKeyPress</property>
      </object>
      <object class="Label" name="Label17" >
        <property name="Caption">E-mail</property>
        <property name="Height">13</property>
        <property name="Left">397</property>
        <property name="Name">Label17</property>
        <property name="Top">16</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_cliente_email" >
        <property name="Height">21</property>
        <property name="Left">397</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_email</property>
        <property name="Top">32</property>
        <property name="Width">150</property>
        <property name="jsOnKeyPress">mgt_cliente_emailJSKeyPress</property>
      </object>
      <object class="Label" name="Label22" >
        <property name="Caption">Celular</property>
        <property name="Height">13</property>
        <property name="Left">234</property>
        <property name="Name">Label22</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone_celular" >
        <property name="Height">21</property>
        <property name="Left">234</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone_celular</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_cliente_fone_celularJSKeyPress</property>
      </object>
      <object class="Label" name="Label23" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">316</property>
        <property name="Name">Label23</property>
        <property name="Top">16</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone_fax" >
        <property name="Height">21</property>
        <property name="Left">316</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone_fax</property>
        <property name="Top">32</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_cliente_fone_faxJSKeyPress</property>
      </object>
      <object class="Label" name="Label24" >
        <property name="Caption">Site</property>
        <property name="Height">13</property>
        <property name="Left">551</property>
        <property name="Name">Label24</property>
        <property name="Top">16</property>
        <property name="Width">41</property>
      </object>
      <object class="Edit" name="mgt_cliente_site" >
        <property name="Height">21</property>
        <property name="Left">551</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_site</property>
        <property name="Top">32</property>
        <property name="Width">150</property>
        <property name="jsOnKeyPress">mgt_cliente_siteJSKeyPress</property>
      </object>
      <object class="Label" name="Label64" >
        <property name="Caption">DDD</property>
        <property name="Height">13</property>
        <property name="Left">115</property>
        <property name="Name">Label64</property>
        <property name="Top">16</property>
        <property name="Width">29</property>
      </object>
      <object class="Edit" name="mgt_cliente_ddd" >
        <property name="Height">21</property>
        <property name="Left">115</property>
        <property name="MaxLength">3</property>
        <property name="Name">mgt_cliente_ddd</property>
        <property name="Top">32</property>
        <property name="Width">32</property>
        <property name="jsOnKeyPress">mgt_cliente_dddJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_dddJSKeyUp</property>
      </object>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption"><![CDATA[Observacoes de Clientes]]></property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label20</property>
      <property name="Top">515</property>
      <property name="Width">160</property>
    </object>
    <object class="Memo" name="mgt_cliente_observacoes" >
      <property name="Height">76</property>
      <property name="Left">12</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_cliente_observacoes</property>
      <property name="Top">530</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">mgt_cliente_observacoesJSKeyPress</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_tipo_pessoa" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:2:{s:2:&quot;PJ&quot;;s:15:&quot;Pessoa Juridica&quot;;s:2:&quot;PF&quot;;s:13:&quot;Pessoa Fisica&quot;;}]]></property>
      <property name="Left">253</property>
      <property name="Name">mgt_cliente_tipo_pessoa</property>
      <property name="Top">49</property>
      <property name="Width">116</property>
      <property name="jsOnKeyPress">mgt_cliente_tipo_pessoaJSKeyPress</property>
    </object>
    <object class="GroupBox" name="GroupBox5" >
      <property name="Caption">Datas</property>
      <property name="Height">55</property>
      <property name="Left">369</property>
      <property name="Name">GroupBox5</property>
      <property name="Top">10</property>
      <property name="Width">344</property>
      <object class="Label" name="Label25" >
        <property name="Caption"><![CDATA[Inclusao]]></property>
        <property name="Height">13</property>
        <property name="Left">7</property>
        <property name="Name">Label25</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_data_inclusao" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">7</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_cliente_data_inclusao</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_cliente_data_inclusaoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_data_inclusaoJSKeyUp</property>
      </object>
      <object class="Label" name="Label26" >
        <property name="Caption"><![CDATA[Alteracao]]></property>
        <property name="Height">13</property>
        <property name="Left">90</property>
        <property name="Name">Label26</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_data_alteracao" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">90</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_cliente_data_alteracao</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_cliente_data_alteracaoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_data_alteracaoJSKeyUp</property>
      </object>
      <object class="Label" name="Label27" >
        <property name="Caption">Compra</property>
        <property name="Height">13</property>
        <property name="Left">173</property>
        <property name="Name">Label27</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_data_ultima_compra" >
        <property name="Color">#EBE9ED</property>
        <property name="Height">21</property>
        <property name="Left">173</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_cliente_data_ultima_compra</property>
        <property name="ParentColor">0</property>
        <property name="ReadOnly">1</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_cliente_data_ultima_compraJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_data_ultima_compraJSKeyUp</property>
      </object>
      <object class="Label" name="Label19" >
        <property name="Caption">Visita</property>
        <property name="Height">13</property>
        <property name="Left">256</property>
        <property name="Name">Label19</property>
        <property name="Top">14</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_data_visita" >
        <property name="Height">21</property>
        <property name="Left">256</property>
        <property name="MaxLength">10</property>
        <property name="Name">mgt_cliente_data_visita</property>
        <property name="ParentColor">0</property>
        <property name="Top">27</property>
        <property name="Width">80</property>
        <property name="jsOnKeyPress">mgt_cliente_data_visitaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_data_visitaJSKeyUp</property>
      </object>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption">Tipo</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label18</property>
      <property name="Top">36</property>
      <property name="Width">29</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_codigo_tipo" >
      <property name="Height">21</property>
      <property name="ItemIndex">0</property>
      <property name="Items"><![CDATA[a:4:{s:4:&quot;CNPJ&quot;;s:4:&quot;CNPJ&quot;;s:3:&quot;CPF&quot;;s:3:&quot;CPF&quot;;s:2:&quot;RG&quot;;s:2:&quot;RG&quot;;s:11:&quot;Outro Docto&quot;;s:11:&quot;Outro Docto&quot;;}]]></property>
      <property name="Left">14</property>
      <property name="Name">mgt_cliente_codigo_tipo</property>
      <property name="Top">49</property>
      <property name="Width">92</property>
      <property name="jsOnKeyPress">mgt_cliente_codigo_tipoJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption">Tipo de Pessoa</property>
      <property name="Height">13</property>
      <property name="Left">253</property>
      <property name="Name">Label1</property>
      <property name="Top">36</property>
      <property name="Width">100</property>
    </object>
    <object class="GroupBox" name="GroupBox7" >
      <property name="Caption"><![CDATA[Endereco para Entrega]]></property>
      <property name="Height">112</property>
      <property name="Hint">V</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox7</property>
      <property name="Top">226</property>
      <property name="Width">712</property>
      <object class="Label" name="Label28" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Left">96</property>
        <property name="Name">Label28</property>
        <property name="Top">24</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_cliente_endereco_entrega" >
        <property name="Height">21</property>
        <property name="Left">96</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_cliente_endereco_entrega</property>
        <property name="Top">37</property>
        <property name="Width">497</property>
        <property name="jsOnKeyPress">mgt_cliente_endereco_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label29" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">15</property>
        <property name="Name">Label29</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_cliente_bairro_entrega" >
        <property name="Height">21</property>
        <property name="Left">14</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_bairro_entrega</property>
        <property name="Top">80</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_cliente_bairro_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label30" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">145</property>
        <property name="Name">Label30</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cidade_entrega" >
        <property name="Height">21</property>
        <property name="Left">145</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_cidade_entrega</property>
        <property name="Top">80</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_cliente_cidade_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label31" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">269</property>
        <property name="Name">Label31</property>
        <property name="Top">64</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_estado_entrega" >
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">269</property>
        <property name="Name">mgt_cliente_estado_entrega</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_estado_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label32" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">344</property>
        <property name="Name">Label32</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cep_entrega" >
        <property name="Height">21</property>
        <property name="Left">346</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_cliente_cep_entrega</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_cep_entregaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_cep_entregaJSKeyUp</property>
      </object>
      <object class="Label" name="Label33" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">423</property>
        <property name="Name">Label33</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_pais_entrega" >
        <property name="Height">21</property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_pais_entrega</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_cliente_pais_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label34" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Left">548</property>
        <property name="Name">Label34</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone_entrega" >
        <property name="Height">21</property>
        <property name="Left">548</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone_entrega</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_fone_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">624</property>
        <property name="Name">Label35</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fax_entrega" >
        <property name="Height">21</property>
        <property name="Left">625</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fax_entrega</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_fax_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label36" >
        <property name="Caption"><![CDATA[Opcao]]></property>
        <property name="Height">13</property>
        <property name="Left">12</property>
        <property name="Name">Label36</property>
        <property name="Top">24</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_opcao_entrega" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:5:&quot;Outro&quot;;s:5:&quot;Outro&quot;;s:7:&quot;O Mesmo&quot;;s:7:&quot;O Mesmo&quot;;}]]></property>
        <property name="Left">12</property>
        <property name="Name">mgt_cliente_opcao_entrega</property>
        <property name="Top">37</property>
        <property name="Width">80</property>
        <property name="OnChange">mgt_cliente_opcao_entregaChange</property>
        <property name="jsOnKeyPress">mgt_cliente_opcao_entregaJSKeyPress</property>
      </object>
      <object class="Label" name="Label62" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Left">597</property>
        <property name="Name">Label62</property>
        <property name="Top">24</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_cliente_complemento_entrega" >
        <property name="Height">21</property>
        <property name="Left">597</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_complemento_entrega</property>
        <property name="Top">37</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_cliente_complemento_entregaJSKeyPress</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox8" >
      <property name="Caption"><![CDATA[Endereco para Cobranca]]></property>
      <property name="Height">112</property>
      <property name="Hint">V</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox8</property>
      <property name="Top">338</property>
      <property name="Width">712</property>
      <object class="Label" name="Label37" >
        <property name="Caption">Logradouro (Rua, Avenida, Etc)</property>
        <property name="Height">13</property>
        <property name="Left">96</property>
        <property name="Name">Label37</property>
        <property name="Top">24</property>
        <property name="Width">177</property>
      </object>
      <object class="Edit" name="mgt_cliente_endereco_cobranca" >
        <property name="Height">21</property>
        <property name="Left">96</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_cliente_endereco_cobranca</property>
        <property name="Top">37</property>
        <property name="Width">497</property>
        <property name="jsOnKeyPress">mgt_cliente_endereco_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label38" >
        <property name="Caption">Bairro</property>
        <property name="Height">13</property>
        <property name="Left">15</property>
        <property name="Name">Label38</property>
        <property name="Top">64</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_cliente_bairro_cobranca" >
        <property name="Height">21</property>
        <property name="Left">14</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_bairro_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">128</property>
        <property name="jsOnKeyPress">mgt_cliente_bairro_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label39" >
        <property name="Caption">Cidade</property>
        <property name="Height">13</property>
        <property name="Left">145</property>
        <property name="Name">Label39</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cidade_cobranca" >
        <property name="Height">21</property>
        <property name="Left">145</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_cidade_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">120</property>
        <property name="jsOnKeyPress">mgt_cliente_cidade_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label40" >
        <property name="Caption">Estado</property>
        <property name="Height">13</property>
        <property name="Left">269</property>
        <property name="Name">Label40</property>
        <property name="Top">64</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_estado_cobranca" >
        <property name="Height">21</property>
        <property name="Items">a:0:{}</property>
        <property name="Left">269</property>
        <property name="Name">mgt_cliente_estado_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_estado_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label41" >
        <property name="Caption">CEP</property>
        <property name="Height">13</property>
        <property name="Left">344</property>
        <property name="Name">Label41</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_cep_cobranca" >
        <property name="Height">21</property>
        <property name="Left">346</property>
        <property name="MaxLength">9</property>
        <property name="Name">mgt_cliente_cep_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_cep_cobrancaJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_cep_cobrancaJSKeyUp</property>
      </object>
      <object class="Label" name="Label42" >
        <property name="Caption"><![CDATA[Pais]]></property>
        <property name="Height">13</property>
        <property name="Left">423</property>
        <property name="Name">Label42</property>
        <property name="Top">64</property>
        <property name="Width">75</property>
      </object>
      <object class="Edit" name="mgt_cliente_pais_cobranca" >
        <property name="Height">21</property>
        <property name="Left">423</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_pais_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">121</property>
        <property name="jsOnKeyPress">mgt_cliente_pais_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label43" >
        <property name="Caption">Fone</property>
        <property name="Height">13</property>
        <property name="Left">548</property>
        <property name="Name">Label43</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fone_cobranca" >
        <property name="Height">21</property>
        <property name="Left">548</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fone_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_fone_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label44" >
        <property name="Caption">FAX</property>
        <property name="Height">13</property>
        <property name="Left">624</property>
        <property name="Name">Label44</property>
        <property name="Top">64</property>
        <property name="Width">72</property>
      </object>
      <object class="Edit" name="mgt_cliente_fax_cobranca" >
        <property name="Height">21</property>
        <property name="Left">625</property>
        <property name="MaxLength">50</property>
        <property name="Name">mgt_cliente_fax_cobranca</property>
        <property name="Top">80</property>
        <property name="Width">72</property>
        <property name="jsOnKeyPress">mgt_cliente_fax_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label45" >
        <property name="Caption"><![CDATA[Opcao]]></property>
        <property name="Height">13</property>
        <property name="Left">12</property>
        <property name="Name">Label45</property>
        <property name="Top">24</property>
        <property name="Width">69</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_opcao_cobranca" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:5:&quot;Outro&quot;;s:5:&quot;Outro&quot;;s:7:&quot;O Mesmo&quot;;s:7:&quot;O Mesmo&quot;;}]]></property>
        <property name="Left">12</property>
        <property name="Name">mgt_cliente_opcao_cobranca</property>
        <property name="Top">37</property>
        <property name="Width">80</property>
        <property name="OnChange">mgt_cliente_opcao_cobrancaChange</property>
        <property name="jsOnKeyPress">mgt_cliente_opcao_cobrancaJSKeyPress</property>
      </object>
      <object class="Label" name="Label63" >
        <property name="Caption">Complemento</property>
        <property name="Height">13</property>
        <property name="Left">597</property>
        <property name="Name">Label63</property>
        <property name="Top">24</property>
        <property name="Width">85</property>
      </object>
      <object class="Edit" name="mgt_cliente_complemento_cobranca" >
        <property name="Height">21</property>
        <property name="Left">597</property>
        <property name="MaxLength">80</property>
        <property name="Name">mgt_cliente_complemento_cobranca</property>
        <property name="Top">37</property>
        <property name="Width">100</property>
        <property name="jsOnKeyPress">mgt_cliente_complemento_cobrancaJSKeyPress</property>
      </object>
    </object>
    <object class="Label" name="Label46" >
      <property name="Caption"><![CDATA[Observacoes da Nota-Fiscal]]></property>
      <property name="Height">13</property>
      <property name="Left">175</property>
      <property name="Name">Label46</property>
      <property name="Top">515</property>
      <property name="Width">160</property>
    </object>
    <object class="Memo" name="mgt_cliente_observacoes_nota" >
      <property name="Height">76</property>
      <property name="Left">175</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">mgt_cliente_observacoes_nota</property>
      <property name="Top">530</property>
      <property name="Width">160</property>
      <property name="jsOnKeyPress">mgt_cliente_observacoes_notaJSKeyPress</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Banco</property>
      <property name="Height">13</property>
      <property name="Left">338</property>
      <property name="Name">Label12</property>
      <property name="Top">524</property>
      <property name="Width">85</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_banco" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">427</property>
      <property name="Name">mgt_cliente_banco</property>
      <property name="Top">520</property>
      <property name="Width">190</property>
      <property name="jsOnKeyPress">mgt_cliente_bancoJSKeyPress</property>
    </object>
    <object class="Label" name="Label47" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Representante</property>
      <property name="Height">13</property>
      <property name="Left">338</property>
      <property name="Name">Label47</property>
      <property name="Top">547</property>
      <property name="Width">85</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_vendedor" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">427</property>
      <property name="Name">mgt_cliente_vendedor</property>
      <property name="Top">543</property>
      <property name="Width">190</property>
      <property name="jsOnKeyPress">mgt_cliente_vendedorJSKeyPress</property>
    </object>
    <object class="Label" name="Label48" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Transportadora</property>
      <property name="Height">13</property>
      <property name="Left">338</property>
      <property name="Name">Label48</property>
      <property name="Top">591</property>
      <property name="Width">85</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_transportadora" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">427</property>
      <property name="Name">mgt_cliente_transportadora</property>
      <property name="Top">587</property>
      <property name="Width">190</property>
      <property name="jsOnKeyPress">mgt_cliente_transportadoraJSKeyPress</property>
    </object>
    <object class="GroupBox" name="GroupBox6" >
      <property name="Caption"><![CDATA[Dados para Emissao do Pedido]]></property>
      <property name="Height">91</property>
      <property name="Left">8</property>
      <property name="Name">GroupBox6</property>
      <property name="Top">608</property>
      <property name="Width">712</property>
      <object class="Label" name="Label49" >
        <property name="Caption">Desconto (%)</property>
        <property name="Height">13</property>
        <property name="Left">64</property>
        <property name="Name">Label49</property>
        <property name="Top">19</property>
        <property name="Width">78</property>
      </object>
      <object class="Edit" name="mgt_cliente_desconto" >
        <property name="Height">21</property>
        <property name="Left">146</property>
        <property name="MaxLength">7</property>
        <property name="Name">mgt_cliente_desconto</property>
        <property name="Top">15</property>
        <property name="Width">109</property>
        <property name="jsOnKeyPress">mgt_cliente_descontoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_descontoJSKeyUp</property>
      </object>
      <object class="Label" name="Label50" >
        <property name="Caption"><![CDATA[Condicao de Pgto (DD)]]></property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label50</property>
        <property name="Top">42</property>
        <property name="Width">132</property>
      </object>
      <object class="Edit" name="mgt_cliente_condicao_pgto_1" >
        <property name="Height">21</property>
        <property name="Left">146</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cliente_condicao_pgto_1</property>
        <property name="Top">38</property>
        <property name="Width">25</property>
        <property name="jsOnKeyPress">mgt_cliente_condicao_pgto_1JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_condicao_pgto_1JSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cliente_condicao_pgto_2" >
        <property name="Height">21</property>
        <property name="Left">174</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cliente_condicao_pgto_2</property>
        <property name="Top">38</property>
        <property name="Width">25</property>
        <property name="jsOnKeyPress">mgt_cliente_condicao_pgto_2JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_condicao_pgto_2JSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cliente_condicao_pgto_3" >
        <property name="Height">21</property>
        <property name="Left">202</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cliente_condicao_pgto_3</property>
        <property name="Top">38</property>
        <property name="Width">25</property>
        <property name="jsOnKeyPress">mgt_cliente_condicao_pgto_3JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_condicao_pgto_3JSKeyUp</property>
      </object>
      <object class="Edit" name="mgt_cliente_condicao_pgto_4" >
        <property name="Height">21</property>
        <property name="Left">230</property>
        <property name="MaxLength">2</property>
        <property name="Name">mgt_cliente_condicao_pgto_4</property>
        <property name="Top">38</property>
        <property name="Width">25</property>
        <property name="jsOnKeyPress">mgt_cliente_condicao_pgto_4JSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_condicao_pgto_4JSKeyUp</property>
      </object>
      <object class="Label" name="Label51" >
        <property name="Caption">Material Destina-se a Consumo</property>
        <property name="Height">13</property>
        <property name="Left">9</property>
        <property name="Name">Label51</property>
        <property name="Top">66</property>
        <property name="Width">182</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_consumo" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:1:&quot;S&quot;;s:3:&quot;Sim&quot;;s:1:&quot;N&quot;;s:3:&quot;Nao&quot;;}]]></property>
        <property name="Left">197</property>
        <property name="Name">mgt_cliente_consumo</property>
        <property name="Top">62</property>
        <property name="Width">58</property>
        <property name="jsOnKeyPress">mgt_cliente_consumoJSKeyPress</property>
      </object>
      <object class="Label" name="Label52" >
        <property name="Caption">Tipo de Transporte</property>
        <property name="Height">13</property>
        <property name="Left">260</property>
        <property name="Name">Label52</property>
        <property name="Top">18</property>
        <property name="Width">112</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_tipo_transporte" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:4:{s:10:&quot;Rodoviario&quot;;s:10:&quot;Rodoviario&quot;;s:5:&quot;Aereo&quot;;s:5:&quot;Aereo&quot;;s:8:&quot;Maritimo&quot;;s:8:&quot;Maritimo&quot;;s:11:&quot;Ferroviario&quot;;s:11:&quot;Ferroviario&quot;;}]]></property>
        <property name="Left">375</property>
        <property name="Name">mgt_cliente_tipo_transporte</property>
        <property name="Top">14</property>
        <property name="Width">92</property>
        <property name="jsOnKeyPress">mgt_cliente_tipo_transporteJSKeyPress</property>
      </object>
      <object class="Label" name="Label53" >
        <property name="Caption"><![CDATA[Transportadora nao Cadastrada]]></property>
        <property name="Height">13</property>
        <property name="Left">260</property>
        <property name="Name">Label53</property>
        <property name="Top">46</property>
        <property name="Width">178</property>
      </object>
      <object class="Edit" name="mgt_transportadora_nao_cadastrada" >
        <property name="Height">21</property>
        <property name="Left">260</property>
        <property name="MaxLength">100</property>
        <property name="Name">mgt_transportadora_nao_cadastrada</property>
        <property name="Top">62</property>
        <property name="Width">178</property>
        <property name="jsOnKeyPress">mgt_transportadora_nao_cadastradaJSKeyPress</property>
      </object>
      <object class="Label" name="Label54" >
        <property name="Caption">ICMS (%)</property>
        <property name="Height">13</property>
        <property name="Left">471</property>
        <property name="Name">Label54</property>
        <property name="Top">18</property>
        <property name="Width">57</property>
      </object>
      <object class="Edit" name="mgt_cliente_icms" >
        <property name="Height">21</property>
        <property name="Left">530</property>
        <property name="MaxLength">7</property>
        <property name="Name">mgt_cliente_icms</property>
        <property name="Top">14</property>
        <property name="Width">48</property>
        <property name="jsOnKeyPress">mgt_cliente_icmsJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_icmsJSKeyUp</property>
      </object>
      <object class="Label" name="Label55" >
        <property name="Caption">Emite Lote</property>
        <property name="Height">13</property>
        <property name="Left">581</property>
        <property name="Name">Label55</property>
        <property name="Top">18</property>
        <property name="Width">63</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_emite_lote" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:1:&quot;S&quot;;s:3:&quot;Sim&quot;;s:1:&quot;N&quot;;s:3:&quot;Nao&quot;;}]]></property>
        <property name="Left">646</property>
        <property name="Name">mgt_cliente_emite_lote</property>
        <property name="Top">14</property>
        <property name="Width">58</property>
        <property name="jsOnKeyPress">mgt_cliente_emite_loteJSKeyPress</property>
      </object>
      <object class="Label" name="Label56" >
        <property name="Caption">Pgto do Frete</property>
        <property name="Height">13</property>
        <property name="Left">549</property>
        <property name="Name">Label56</property>
        <property name="Top">42</property>
        <property name="Width">80</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_pgto_frete" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:7:&quot;Cliente&quot;;s:7:&quot;Cliente&quot;;s:7:&quot;Empresa&quot;;s:7:&quot;Empresa&quot;;}]]></property>
        <property name="Left">629</property>
        <property name="Name">mgt_cliente_pgto_frete</property>
        <property name="Top">38</property>
        <property name="Width">74</property>
        <property name="jsOnKeyPress">mgt_cliente_pgto_freteJSKeyPress</property>
      </object>
      <object class="Label" name="Label57" >
        <property name="Caption">Suframa</property>
        <property name="Height">13</property>
        <property name="Left">451</property>
        <property name="Name">Label57</property>
        <property name="Top">46</property>
        <property name="Width">50</property>
      </object>
      <object class="Edit" name="mgt_cliente_suframa" >
        <property name="Height">21</property>
        <property name="Left">451</property>
        <property name="MaxLength">255</property>
        <property name="Name">mgt_cliente_suframa</property>
        <property name="Top">62</property>
        <property name="Width">85</property>
        <property name="jsOnKeyPress">mgt_cliente_suframaJSKeyPress</property>
      </object>
      <object class="CheckBox" name="mgt_cliente_nao_calcula_st" >
        <property name="Caption"><![CDATA[Nao Calcular a Sub.Trib.]]></property>
        <property name="Height">21</property>
        <property name="Left">544</property>
        <property name="Name">mgt_cliente_nao_calcula_st</property>
        <property name="Top">62</property>
        <property name="Width">161</property>
      </object>
    </object>
    <object class="GroupBox" name="GroupBox9" >
      <property name="Caption">Valores</property>
      <property name="Height">93</property>
      <property name="Left">619</property>
      <property name="Name">GroupBox9</property>
      <property name="Top">515</property>
      <property name="Width">101</property>
      <object class="Label" name="Label58" >
        <property name="Caption"><![CDATA[Bloq. Credito]]></property>
        <property name="Height">13</property>
        <property name="Left">11</property>
        <property name="Name">Label58</property>
        <property name="Top">16</property>
        <property name="Width">78</property>
      </object>
      <object class="ComboBox" name="mgt_cliente_status_credito" >
        <property name="Height">21</property>
        <property name="Items"><![CDATA[a:2:{s:1:&quot;S&quot;;s:3:&quot;Sim&quot;;s:1:&quot;N&quot;;s:3:&quot;Nao&quot;;}]]></property>
        <property name="Left">11</property>
        <property name="Name">mgt_cliente_status_credito</property>
        <property name="Top">30</property>
        <property name="Width">52</property>
        <property name="jsOnKeyPress">mgt_cliente_status_creditoJSKeyPress</property>
      </object>
      <object class="Label" name="Label59" >
        <property name="Caption"><![CDATA[Ultima Compra]]></property>
        <property name="Height">13</property>
        <property name="Left">6</property>
        <property name="Name">Label59</property>
        <property name="Top">52</property>
        <property name="Width">88</property>
      </object>
      <object class="Edit" name="mgt_cliente_valor_credito" >
        <property name="Height">21</property>
        <property name="Left">6</property>
        <property name="MaxLength">13</property>
        <property name="Name">mgt_cliente_valor_credito</property>
        <property name="Top">65</property>
        <property name="Width">77</property>
        <property name="jsOnKeyPress">mgt_cliente_valor_creditoJSKeyPress</property>
        <property name="jsOnKeyUp">mgt_cliente_valor_creditoJSKeyUp</property>
      </object>
    </object>
    <object class="Label" name="Label60" >
      <property name="Caption"><![CDATA[Numero]]></property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label60</property>
      <property name="Top">16</property>
      <property name="Width">47</property>
    </object>
    <object class="Edit" name="mgt_cliente_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_cliente_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">12</property>
      <property name="Width">52</property>
      <property name="jsOnKeyPress">mgt_cliente_numeroJSKeyPress</property>
    </object>
    <object class="Label" name="Label69" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Assistente</property>
      <property name="Height">13</property>
      <property name="Left">338</property>
      <property name="Name">Label69</property>
      <property name="Top">569</property>
      <property name="Width">85</property>
    </object>
    <object class="ComboBox" name="mgt_cliente_assistente" >
      <property name="Height">21</property>
      <property name="Items">a:0:{}</property>
      <property name="Left">427</property>
      <property name="Name">mgt_cliente_assistente</property>
      <property name="Top">565</property>
      <property name="Width">190</property>
      <property name="jsOnKeyPress">mgt_cliente_assistenteJSKeyPress</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">746</property>
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
      <property name="Left">294</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">371</property>
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
    <object class="Label" name="Label66" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label66</property>
      <property name="Top">15</property>
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
    <object class="Label" name="Label67" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label67</property>
      <property name="Top">31</property>
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
    <property name="Left">176</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">809</property>
    <property name="Width">369</property>
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
      <property name="Left">187</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label65" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">7</property>
      <property name="Name">Label65</property>
      <property name="Top">24</property>
      <property name="Width">356</property>
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
    <object class="Label" name="Label68" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">7</property>
      <property name="Name">Label68</property>
      <property name="Top">57</property>
      <property name="Width">38</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">714</property>
        <property name="Top">21</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
