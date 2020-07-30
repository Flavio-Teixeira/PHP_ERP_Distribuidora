<?php
<object class="venmapaproducaoalt" name="venmapaproducaoalt" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">venmapaproducaoalt</property>
  <property name="Width">755</property>
  <property name="OnCreate">venmapaproducaoaltCreate</property>
  <property name="jsOnLoad">venmapaproducaoaltJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[VENDAS - Mapa de Producao - Alteracao]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Item do Pedido</property>
    <property name="Height">205</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">26</property>
    <property name="Width">730</property>
    <object class="Label" name="Label1" >
      <property name="Caption">Nro.</property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label1</property>
      <property name="Top">20</property>
      <property name="Width">55</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">12</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_numeroJSKeyPress</property>
    </object>
    <object class="Label" name="Label12" >
      <property name="Caption">Nro.Pedido</property>
      <property name="Height">13</property>
      <property name="Left">68</property>
      <property name="Name">Label12</property>
      <property name="Top">20</property>
      <property name="Width">60</property>
    </object>
    <object class="Label" name="Label13" >
      <property name="Caption">Status</property>
      <property name="Height">13</property>
      <property name="Left">645</property>
      <property name="Name">Label13</property>
      <property name="Top">20</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label14" >
      <property name="Caption"><![CDATA[Cod.Cliente]]></property>
      <property name="Height">13</property>
      <property name="Left">281</property>
      <property name="Name">Label14</property>
      <property name="Top">20</property>
      <property name="Width">125</property>
    </object>
    <object class="Label" name="Label15" >
      <property name="Caption">Cliente</property>
      <property name="Height">13</property>
      <property name="Left">407</property>
      <property name="Name">Label15</property>
      <property name="Top">20</property>
      <property name="Width">237</property>
    </object>
    <object class="Label" name="Label16" >
      <property name="Caption"><![CDATA[Cod.Produto]]></property>
      <property name="Height">13</property>
      <property name="Left">12</property>
      <property name="Name">Label16</property>
      <property name="Top">58</property>
      <property name="Width">192</property>
    </object>
    <object class="Label" name="Label17" >
      <property name="Caption"><![CDATA[Descricao]]></property>
      <property name="Height">13</property>
      <property name="Left">205</property>
      <property name="Name">Label17</property>
      <property name="Top">58</property>
      <property name="Width">520</property>
    </object>
    <object class="Label" name="Label20" >
      <property name="Caption">Data</property>
      <property name="Height">13</property>
      <property name="Left">129</property>
      <property name="Name">Label20</property>
      <property name="Top">20</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label21" >
      <property name="Caption">Dt.Entrega</property>
      <property name="Height">13</property>
      <property name="Left">205</property>
      <property name="Name">Label21</property>
      <property name="Top">20</property>
      <property name="Width">75</property>
    </object>
    <object class="Label" name="Label22" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Qtde.Solicitada</property>
      <property name="Height">13</property>
      <property name="Left">30</property>
      <property name="Name">Label22</property>
      <property name="Top">113</property>
      <property name="Width">115</property>
    </object>
    <object class="Label" name="Label23" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Qtde. em Producao]]></property>
      <property name="Height">13</property>
      <property name="Left">30</property>
      <property name="Name">Label23</property>
      <property name="Top">135</property>
      <property name="Width">115</property>
    </object>
    <object class="Label" name="Label24" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Qtde.Produzida</property>
      <property name="Height">13</property>
      <property name="Left">30</property>
      <property name="Name">Label24</property>
      <property name="Top">156</property>
      <property name="Width">115</property>
    </object>
    <object class="Label" name="Label25" >
      <property name="Alignment">agRight</property>
      <property name="Caption">Qtde.Problemas</property>
      <property name="Height">13</property>
      <property name="Left">30</property>
      <property name="Name">Label25</property>
      <property name="Top">177</property>
      <property name="Width">115</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_numero_pedido" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">68</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_numero_pedido</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_numero_pedidoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_data" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">129</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_data</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_mapa_dataJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_data_entrega" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">205</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_data_entrega</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">75</property>
      <property name="jsOnKeyPress">mgt_mapa_data_entregaJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_status" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">645</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_status</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">80</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_statusJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">281</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">125</property>
      <property name="jsOnKeyPress">mgt_mapa_cliente_codigoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">407</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">33</property>
      <property name="Width">237</property>
      <property name="jsOnKeyPress">mgt_mapa_cliente_nomeJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">12</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">192</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_codigoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_descricao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">205</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_descricao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">71</property>
      <property name="Width">520</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_descricaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_quantidade_solicitada" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">149</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_quantidade_solicitada</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">109</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_quantidade_solicitadaJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_quantidade_producao" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">149</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_quantidade_producao</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">131</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_quantidade_producaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_quantidade_produzido" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">149</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_quantidade_produzido</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">152</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_quantidade_produzidoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_mapa_produto_quantidade_problemas" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">149</property>
      <property name="MaxLength">3</property>
      <property name="Name">mgt_mapa_produto_quantidade_problemas</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="TabOrder">1</property>
      <property name="Top">173</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">mgt_mapa_produto_quantidade_problemasJSKeyPress</property>
    </object>
    <object class="Label" name="Label27" >
      <property name="Alignment">agCenter</property>
      <property name="Caption"><![CDATA[Informacao Registrada:]]></property>
      <property name="Font">
      <property name="Weight">bold</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">54</property>
      <property name="Name">Label27</property>
      <property name="ParentFont">0</property>
      <property name="Top">96</property>
      <property name="Width">150</property>
    </object>
    <object class="Edit" name="qtde_adiciona_produzida" >
      <property name="Height">21</property>
      <property name="Left">205</property>
      <property name="MaxLength">3</property>
      <property name="Name">qtde_adiciona_produzida</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">152</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">qtde_adiciona_produzidaJSKeyPress</property>
      <property name="jsOnKeyUp">qtde_adiciona_produzidaJSKeyUp</property>
    </object>
    <object class="Edit" name="qtde_adiciona_problemas" >
      <property name="Height">21</property>
      <property name="Left">205</property>
      <property name="MaxLength">3</property>
      <property name="Name">qtde_adiciona_problemas</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">1</property>
      <property name="Top">173</property>
      <property name="Width">55</property>
      <property name="jsOnKeyPress">qtde_adiciona_problemasJSKeyPress</property>
      <property name="jsOnKeyUp">qtde_adiciona_problemasJSKeyUp</property>
    </object>
    <object class="Label" name="Label28" >
      <property name="Caption">(Informe a quantidade a ser adicionada a quantidade produzida.)</property>
      <property name="Height">13</property>
      <property name="Left">262</property>
      <property name="Name">Label28</property>
      <property name="Top">156</property>
      <property name="Width">371</property>
    </object>
    <object class="Label" name="Label29" >
      <property name="Caption">(Informe a quantidade a ser adicionada a quantidade com problemas.)</property>
      <property name="Height">13</property>
      <property name="Left">262</property>
      <property name="Name">Label29</property>
      <property name="Top">177</property>
      <property name="Width">402</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">231</property>
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
      <property name="Left">168</property>
      <property name="Name">bt_alterar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_alterarClick</property>
    </object>
    <object class="Button" name="bt_excluir" >
      <property name="Caption">Excluir</property>
      <property name="Height">25</property>
      <property name="Left">248</property>
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
    <object class="Button" name="bt_estoque" >
      <property name="Caption">Solicitar ao Estoque</property>
      <property name="Height">25</property>
      <property name="Left">355</property>
      <property name="Name">bt_estoque</property>
      <property name="Top">17</property>
      <property name="Width">130</property>
      <property name="OnClick">bt_estoqueClick</property>
    </object>
    <object class="Button" name="bt_expedicao" >
      <property name="Caption"><![CDATA[Passagem Expedicao]]></property>
      <property name="Height">25</property>
      <property name="Left">489</property>
      <property name="Name">bt_expedicao</property>
      <property name="Top">17</property>
      <property name="Width">130</property>
      <property name="OnClick">bt_expedicaoClick</property>
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
    <property name="Top">13</property>
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
    <property name="Top">284</property>
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
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">685</property>
        <property name="Top">453</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
