<?php
<object class="estsolicitacaoalt" name="estsolicitacaoalt" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">688</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">estsolicitacaoalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">estsolicitacaoaltCreate</property>
  <property name="jsOnLoad">estsolicitacaoaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[ESTOQUE - Solicitacoes - Alteracao / Consulta]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="solicitacao" >
    <property name="Caption"><![CDATA[Solicitacao]]></property>
    <property name="Height">124</property>
    <property name="Left">8</property>
    <property name="Name">solicitacao</property>
    <property name="Top">39</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption">Nro.</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">29</property>
      <property name="Width">20</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_nro" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">29</property>
      <property name="MaxLength">11</property>
      <property name="Name">mgt_solicitacao_estoque_nro</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">25</property>
      <property name="Width">39</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_nroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_solicitacao_estoque_nroJSKeyUp</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Solicitante</property>
      <property name="Height">13</property>
      <property name="Left">556</property>
      <property name="Name">Label2</property>
      <property name="Top">12</property>
      <property name="Width">57</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_solicitante" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">556</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_solicitacao_estoque_solicitante</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">25</property>
      <property name="Width">162</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_solicitanteJSKeyPress</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Dt.Solicitacao]]></property>
      <property name="Height">13</property>
      <property name="Left">466</property>
      <property name="Name">Label4</property>
      <property name="Top">12</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_data_solicitacao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">466</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_solicitacao_estoque_data_solicitacao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">25</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_data_solicitacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Codigo Verdadeiro]]></property>
      <property name="Height">13</property>
      <property name="Left">72</property>
      <property name="Name">Label5</property>
      <property name="Top">46</property>
      <property name="Width">117</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">Qtde. Solicitada</property>
      <property name="Height">13</property>
      <property name="Left">466</property>
      <property name="Name">Label6</property>
      <property name="Top">46</property>
      <property name="Width">89</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_qtde_solicitada" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">466</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_solicitacao_estoque_qtde_solicitada</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">59</property>
      <property name="Width">89</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_qtde_solicitadaJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">72</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_solicitacao_estoque_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">59</property>
      <property name="Width">117</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_codigoJSKeyPress</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Descricao Verdadeira]]></property>
      <property name="Height">13</property>
      <property name="Left">190</property>
      <property name="Name">Label7</property>
      <property name="Top">46</property>
      <property name="Width">275</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">190</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_solicitacao_estoque_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">59</property>
      <property name="Width">275</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_descricaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_qtde_entregue" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">556</property>
      <property name="MaxLength">13</property>
      <property name="Name">mgt_solicitacao_estoque_qtde_entregue</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">59</property>
      <property name="Width">86</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_qtde_entregueJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_solicitacao_estoque_qtde_entregueJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption">Qtde. Entregue</property>
      <property name="Height">13</property>
      <property name="Left">556</property>
      <property name="Name">Label8</property>
      <property name="Top">46</property>
      <property name="Width">86</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption">Data Entrega</property>
      <property name="Height">13</property>
      <property name="Left">644</property>
      <property name="Name">Label9</property>
      <property name="Top">46</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_data_entregua" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">644</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_solicitacao_estoque_data_entregua</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">59</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_data_entreguaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_solicitacao_estoque_data_entreguaJSKeyUp</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Status</property>
      <property name="Height">13</property>
      <property name="Left">14</property>
      <property name="Name">Label10</property>
      <property name="Top">83</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_status" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">14</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_solicitacao_estoque_status</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Text">Aguardando</property>
      <property name="Top">96</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_statusJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_observacao" >
      <property name="Height">21</property>
      <property name="Left">95</property>
      <property name="MaxLength">255</property>
      <property name="Name">mgt_solicitacao_estoque_observacao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">96</property>
      <property name="Width">624</property>
      <property name="jsOnKeyPress">mgt_solicitacao_estoque_observacaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption"><![CDATA[Observacao]]></property>
      <property name="Height">13</property>
      <property name="Left">95</property>
      <property name="Name">Label12</property>
      <property name="Top">83</property>
      <property name="Width">624</property>
    </object>
    <object class="Button" name="Button1" >
      <property name="Caption"><![CDATA[&gt;&gt;]]></property>
      <property name="Height">25</property>
      <property name="Left">13</property>
      <property name="Name">Button1</property>
      <property name="Top">57</property>
      <property name="Width">58</property>
      <property name="OnClick">Button1Click</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_codigo_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">72</property>
      <property name="Name">mgt_solicitacao_estoque_codigo_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">25</property>
      <property name="Width">117</property>
    </object>
    <object class="Edit" name="mgt_solicitacao_estoque_descricao_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">190</property>
      <property name="Name">mgt_solicitacao_estoque_descricao_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">25</property>
      <property name="Width">275</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption"><![CDATA[Codigo Solicitado]]></property>
      <property name="Height">13</property>
      <property name="Left">72</property>
      <property name="Name">Label13</property>
      <property name="Top">12</property>
      <property name="Width">117</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Descricao Solicitada]]></property>
      <property name="Height">13</property>
      <property name="Left">190</property>
      <property name="Name">Label14</property>
      <property name="Top">12</property>
      <property name="Width">275</property>
    </object>
  </object>
  <object class="GroupBox" name="opcoes" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">opcoes</property>
    <property name="Top">163</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">644</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_alterar" >
      <property name="Caption">Alterar</property>
      <property name="Height">25</property>
      <property name="Left">347</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">427</property>
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
      <property name="Width">140</property>
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
    <object class="CheckBox" name="atualiza_estoque" >
      <property name="Caption">Atualizar o Estoque</property>
      <property name="Checked">1</property>
      <property name="Height">16</property>
      <property name="Left">185</property>
      <property name="Name">atualiza_estoque</property>
      <property name="Top">20</property>
      <property name="Width">128</property>
    </object>
    <object class="Button" name="bt_imprimir" >
      <property name="Caption"><![CDATA[Imprimir Solicitacao]]></property>
      <property name="Height">25</property>
      <property name="Left">526</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">17</property>
      <property name="Width">100</property>
      <property name="OnClick">bt_imprimirClick</property>
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
    <property name="Left">193</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">224</property>
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
      <property name="Left">188</property>
      <property name="Name">bt_sim</property>
      <property name="Top">76</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Voce deseja realmente excluir este registro do cadastro? O preenchimento do motivo e obrigatorio.]]></property>
      <property name="Height">28</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="Top">24</property>
      <property name="Width">323</property>
    </object>
    <object class="Label" name="Label11" >
      <property name="Caption">Motivo:</property>
      <property name="Height">13</property>
      <property name="Left">5</property>
      <property name="Name">Label11</property>
      <property name="Top">57</property>
      <property name="Width">40</property>
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
  <object class="GroupBox" name="adiciona_produtos" >
    <property name="Caption">Adiciona Produtos</property>
    <property name="Height">241</property>
    <property name="Left">8</property>
    <property name="Name">adiciona_produtos</property>
    <property name="ParentColor">0</property>
    <property name="ParentFont">0</property>
    <property name="Top">337</property>
    <property name="Visible">0</property>
    <property name="Width">730</property>
    <object class="Label" name="Label36" >
      <property name="Caption">Registros Obtidos:</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label36</property>
      <property name="Top">89</property>
      <property name="Width">139</property>
    </object>
    <object class="Label" name="Label37" >
      <property name="Caption">Produto</property>
      <property name="Height">13</property>
      <property name="Left">17</property>
      <property name="Name">Label37</property>
      <property name="Top">209</property>
      <property name="Width">44</property>
    </object>
    <object class="Label" name="Label38" >
      <property name="Caption"><![CDATA[Codigo]]></property>
      <property name="Height">13</property>
      <property name="Left">63</property>
      <property name="Name">Label38</property>
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">63</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label39" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">227</property>
      <property name="Name">Label39</property>
      <property name="Top">194</property>
      <property name="Width">75</property>
    </object>
    <object class="Edit" name="mgt_produto_descricao" >
      <property name="Height">21</property>
      <property name="Left">227</property>
      <property name="MaxLength">100</property>
      <property name="Name">mgt_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">316</property>
      <property name="jsOnKeyPress">mgt_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Button" name="bt_adicionar_produto" >
      <property name="ButtonType">btNormal</property>
      <property name="Caption">Adicionar Produto</property>
      <property name="Height">25</property>
      <property name="Left">546</property>
      <property name="Name">bt_adicionar_produto</property>
      <property name="Top">205</property>
      <property name="Width">116</property>
      <property name="OnClick">bt_adicionar_produtoClick</property>
    </object>
    <object class="Panel" name="adiciona_produtos_borda" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Selecione o Produto&lt;/b&gt;&lt;/center&gt;]]></property>
      <property name="Color">#FF0000</property>
      <property name="Height">14</property>
      <property name="Left">6</property>
      <property name="Name">adiciona_produtos_borda</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">717</property>
    </object>
    <object class="GroupBox" name="GroupBox2" >
      <property name="Caption">Busca</property>
      <property name="Height">58</property>
      <property name="Left">13</property>
      <property name="Name">GroupBox2</property>
      <property name="Top">31</property>
      <property name="Width">705</property>
      <object class="Label" name="Label34" >
        <property name="Caption">Dados Para Busca</property>
        <property name="Height">13</property>
        <property name="Left">8</property>
        <property name="Name">Label34</property>
        <property name="Top">15</property>
        <property name="Width">304</property>
      </object>
      <object class="Label" name="Label35" >
        <property name="Caption"><![CDATA[Opcoes]]></property>
        <property name="Height">13</property>
        <property name="Left">459</property>
        <property name="Name">Label35</property>
        <property name="Top">15</property>
        <property name="Width">160</property>
      </object>
      <object class="Edit" name="dados_busca_produto" >
        <property name="Height">21</property>
        <property name="Left">8</property>
        <property name="Name">dados_busca_produto</property>
        <property name="Top">28</property>
        <property name="Width">446</property>
        <property name="jsOnKeyPress">dados_busca_produtoJSKeyPress</property>
      </object>
      <object class="ComboBox" name="opcao_busca_produto" >
        <property name="Height">21</property>
        <property name="ItemIndex">0</property>
        <property name="Items"><![CDATA[a:3:{s:6:&quot;Codigo&quot;;s:6:&quot;Codigo&quot;;s:10:&quot;Referencia&quot;;s:10:&quot;Referencia&quot;;s:9:&quot;Descricao&quot;;s:9:&quot;Descricao&quot;;}]]></property>
        <property name="Left">459</property>
        <property name="Name">opcao_busca_produto</property>
        <property name="Top">28</property>
        <property name="Width">160</property>
        <property name="jsOnKeyPress">opcao_busca_produtoJSKeyPress</property>
      </object>
      <object class="Button" name="bt_busca_produto" >
        <property name="Caption">Buscar</property>
        <property name="Height">25</property>
        <property name="Left">623</property>
        <property name="Name">bt_busca_produto</property>
        <property name="Top">26</property>
        <property name="Width">75</property>
        <property name="OnClick">bt_busca_produtoClick</property>
      </object>
    </object>
    <object class="Label" name="Label40" >
      <property name="Caption"><![CDATA[Referencia]]></property>
      <property name="Height">13</property>
      <property name="Left">145</property>
      <property name="Name">Label40</property>
      <property name="Top">194</property>
      <property name="Width">80</property>
    </object>
    <object class="Edit" name="mgt_produto_referencia" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">145</property>
      <property name="MaxLength">50</property>
      <property name="Name">mgt_produto_referencia</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">2</property>
      <property name="Top">207</property>
      <property name="Width">80</property>
    </object>
    <object class="Panel" name="Panel5" >
      <property name="Color">#FF0000</property>
      <property name="Height">203</property>
      <property name="Left">720</property>
      <property name="Name">Panel5</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel3" >
      <property name="Color">#FF0000</property>
      <property name="Height">203</property>
      <property name="Left">6</property>
      <property name="Name">Panel3</property>
      <property name="ParentColor">0</property>
      <property name="Top">31</property>
      <property name="Width">3</property>
    </object>
    <object class="Panel" name="Panel4" >
      <property name="Color">#FF0000</property>
      <property name="Height">3</property>
      <property name="Left">9</property>
      <property name="Name">Panel4</property>
      <property name="ParentColor">0</property>
      <property name="Top">231</property>
      <property name="Width">711</property>
    </object>
    <object class="Button" name="bt_fechar_produto" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">666</property>
      <property name="Name">bt_fechar_produto</property>
      <property name="Top">205</property>
      <property name="Width">52</property>
      <property name="OnClick">bt_fechar_produtoClick</property>
    </object>
    <object class="DBGrid" name="registros_produtos" >
      <property name="Columns"><![CDATA[a:4:{i:0;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:6:&quot;Codigo&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:18:&quot;mgt_produto_codigo&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:1;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:10:&quot;Referencia&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:22:&quot;mgt_produto_referencia&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:2:&quot;80&quot;;}i:2;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:9:&quot;Descricao&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:21:&quot;mgt_produto_descricao&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;405&quot;;}i:3;a:14:{s:9:&quot;Alignment&quot;;s:13:&quot;taLeftJustify&quot;;s:11:&quot;ButtonStyle&quot;;s:6:&quot;bsAuto&quot;;s:7:&quot;Caption&quot;;s:13:&quot;Estoque Atual&quot;;s:5:&quot;Color&quot;;s:0:&quot;&quot;;s:9:&quot;Fieldname&quot;;s:25:&quot;mgt_produto_estoque_atual&quot;;s:9:&quot;FontColor&quot;;s:0:&quot;&quot;;s:12:&quot;DropDownRows&quot;;s:1:&quot;7&quot;;s:8:&quot;PickList&quot;;s:0:&quot;&quot;;s:8:&quot;ReadOnly&quot;;s:5:&quot;false&quot;;s:8:&quot;SortType&quot;;s:8:&quot;stString&quot;;s:14:&quot;TitleAlignment&quot;;s:13:&quot;taLeftJustify&quot;;s:10:&quot;TitleColor&quot;;s:0:&quot;&quot;;s:7:&quot;Visible&quot;;s:4:&quot;true&quot;;s:5:&quot;Width&quot;;s:3:&quot;120&quot;;}}]]></property>
      <property name="DataSource">conexaoprincipal.DS_MGT_Produtos</property>
      <property name="Height">87</property>
      <property name="Left">13</property>
      <property name="Name">registros_produtos</property>
      <property name="Top">102</property>
      <property name="Width">705</property>
      <property name="jsOnRowChanged">registros_produtosJSRowChanged</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">677</property>
        <property name="Top">237</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
