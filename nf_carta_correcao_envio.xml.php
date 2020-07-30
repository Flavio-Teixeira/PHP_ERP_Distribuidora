<?php
<object class="nfcartacorrecaoenvio" name="nfcartacorrecaoenvio" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">681</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfcartacorrecaoenvio</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfcartacorrecaoenvioCreate</property>
  <property name="jsOnLoad">nfcartacorrecaoenvioJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Carta de Correcao - Envio]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">396</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">649</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_transmitir" >
      <property name="Caption">Transmitir</property>
      <property name="Height">25</property>
      <property name="Left">327</property>
      <property name="Name">bt_transmitir</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_transmitirClick</property>
    </object>
    <object class="Panel" name="Panel1" >
      <property name="BorderColor">#000000</property>
      <property name="BorderWidth">1</property>
      <property name="Color">#F4F1AA</property>
      <property name="Height">10</property>
      <property name="Left">8</property>
      <property name="Name">Panel1</property>
      <property name="ParentColor">0</property>
      <property name="Top">33</property>
      <property name="Width">10</property>
    </object>
    <object class="Label" name="Label18" >
      <property name="Caption"><![CDATA[- Campos Obrigatorios]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label18</property>
      <property name="Top">31</property>
      <property name="Width">131</property>
    </object>
    <object class="Label" name="Label19" >
      <property name="Caption"><![CDATA[- Campos Nao Alteraveis]]></property>
      <property name="Height">13</property>
      <property name="Left">22</property>
      <property name="Name">Label19</property>
      <property name="Top">14</property>
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
      <property name="Top">17</property>
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
    <property name="Caption"><![CDATA[Transmissao da Carta de Correcao]]></property>
    <property name="Height">359</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">35</property>
    <property name="Width">730</property>
    <object class="Edit" name="mgt_nota_fiscal_cliente_nome" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">300</property>
      <property name="Name">mgt_nota_fiscal_cliente_nome</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">21</property>
      <property name="Width">420</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_nomeJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_cliente_codigo" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">96</property>
      <property name="Name">mgt_nota_fiscal_cliente_codigo</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">21</property>
      <property name="Width">115</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_cliente_codigoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_numero" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">96</property>
      <property name="Name">mgt_nota_fiscal_numero</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">45</property>
      <property name="Width">45</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_numeroJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_emissao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">228</property>
      <property name="Name">mgt_nota_fiscal_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">45</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_emissaoJSKeyPress</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_chave" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">140</property>
      <property name="MaxLength">44</property>
      <property name="Name">mgt_nota_fiscal_chave</property>
      <property name="ParentColor">0</property>
      <property name="Top">149</property>
      <property name="Width">283</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_chaveJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_chaveJSKeyUp</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_carta_correcao_geradas" >
      <property name="Color">#EBE9ED</property>
      <property name="Height">21</property>
      <property name="Left">443</property>
      <property name="Name">mgt_nota_fiscal_carta_correcao_geradas</property>
      <property name="ParentColor">0</property>
      <property name="ReadOnly">1</property>
      <property name="Top">45</property>
      <property name="Width">277</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_carta_correcao_geradasJSKeyPress</property>
    </object>
    <object class="Memo" name="mgt_nota_fiscal_descricao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">99</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="MaxLength">1000</property>
      <property name="Name">mgt_nota_fiscal_descricao</property>
      <property name="ParentColor">0</property>
      <property name="Top">195</property>
      <property name="Width">712</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_descricaoJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Codigo do Cliente]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">25</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption">Nome do Cliente</property>
      <property name="Height">13</property>
      <property name="Left">216</property>
      <property name="Name">Label2</property>
      <property name="Top">25</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Numero da NF-e]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="Top">49</property>
      <property name="Width">85</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption"><![CDATA[Data de Emissao]]></property>
      <property name="Height">13</property>
      <property name="Left">144</property>
      <property name="Name">Label4</property>
      <property name="Top">49</property>
      <property name="Width">80</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption"><![CDATA[Cartas de Correcao Emitidas]]></property>
      <property name="Height">13</property>
      <property name="Left">300</property>
      <property name="Name">Label5</property>
      <property name="Top">49</property>
      <property name="Width">140</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption"><![CDATA[&lt;b&gt;Transmissao e Registro de Carta de Correcao:&lt;/b&gt;&lt;br&gt;&lt;br&gt;&lt;b&gt;&lt;font color=#FF0000&gt;ATENCAO: &lt;/font&gt;&lt;/b&gt;O registro de uma nova Carta de Correcao substitui a Carta de Correcao anterior, assim a nova Carta
 de Correcao deve conter todas as correcoes a serem consideradas. Para que a carta de correcao seja transmitida e necessario informar a chave de acesso da NF-e juntamente com a Correcao a ser considerada nos campos abaixo:]]></property>
      <property name="Height">67</property>
      <property name="Left">8</property>
      <property name="Name">Label6</property>
      <property name="Top">74</property>
      <property name="Width">712</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption">Chave de Acesso da NF-e:</property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label7</property>
      <property name="Top">153</property>
      <property name="Width">129</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[Correcao a ser Considerada:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label8</property>
      <property name="Top">181</property>
      <property name="Width">140</property>
    </object>
    <object class="Label" name="Label9" >
      <property name="Caption"><![CDATA[&lt;b&gt;&lt;font color=#FF0000&gt;CONDICAO DE USO: &lt;/font&gt;&lt;/b&gt;A Carta de Correcao e disciplinada pelo &sect; 1&ordm;-A do art. 7&ordm; do Convenio S/N, de 15 de dezembro de 1970 e pode ser utilizada para regularizacao de erro ocorrido na emissao de documento fiscal, desde que o erro nao esteja relacionado com: I - as variaveis que determinam o valor do imposto tais como: base de calculo, aliquota, diferenca de preco, quantidade, valor da operacao ou da prestacao; II - a correcao de dados cadastrais que implique mudanca do remetente ou do destinatario; III - a data de emissao ou de saida.]]></property>
      <property name="Height">53</property>
      <property name="Left">8</property>
      <property name="Name">Label9</property>
      <property name="Top">298</property>
      <property name="Width">712</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Hora de Recebimento da NF-e na Receita Federal:</property>
      <property name="Height">13</property>
      <property name="Left">426</property>
      <property name="Name">Label10</property>
      <property name="Top">153</property>
      <property name="Width">242</property>
    </object>
    <object class="Edit" name="mgt_hora_entrega" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">671</property>
      <property name="MaxLength">8</property>
      <property name="Name">mgt_hora_entrega</property>
      <property name="ParentColor">0</property>
      <property name="Top">149</property>
      <property name="Width">49</property>
      <property name="jsOnKeyPress">mgt_hora_entregaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_hora_entregaJSKeyUp</property>
    </object>
  </object>
  <object class="Window" name="confirmacao" >
    <property name="Caption"><![CDATA[Confirmacao]]></property>
    <property name="Height">111</property>
    <property name="IsVisible">0</property>
    <property name="Left">189</property>
    <property name="Moveable">0</property>
    <property name="Name">confirmacao</property>
    <property name="ResizeMethod">rmOpaque</property>
    <property name="Resizeable">0</property>
    <property name="ShowClose">0</property>
    <property name="ShowMaximize">0</property>
    <property name="ShowMinimize">0</property>
    <property name="Top">454</property>
    <property name="Width">369</property>
    <object class="Label" name="msg_confirmacao" >
      <property name="Caption"><![CDATA[&lt;center&gt;&lt;b&gt;Transmitir a Carta de Correcao&lt;/b&gt;&lt;/center&gt;Voce deseja realmente transmitir a Carta de Correcao desta NFe?&lt;br&gt;&lt;font color=#FF0000&gt;&lt;b&gt;Obs.: Clique somente uma vez no botao escolhido e aguarde a proxima tela.&lt;/b&gt;&lt;/font&gt;]]></property>
      <property name="Height">51</property>
      <property name="Left">14</property>
      <property name="Name">msg_confirmacao</property>
      <property name="Top">26</property>
      <property name="Width">343</property>
    </object>
    <object class="Button" name="bt_nao" >
      <property name="Caption"><![CDATA[Nao]]></property>
      <property name="Height">25</property>
      <property name="Left">106</property>
      <property name="Name">bt_nao</property>
      <property name="Top">80</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_naoClick</property>
    </object>
    <object class="Button" name="bt_sim" >
      <property name="Caption">Sim</property>
      <property name="Height">25</property>
      <property name="Left">184</property>
      <property name="Name">bt_sim</property>
      <property name="Top">80</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_simClick</property>
    </object>
  </object>
  <object class="HiddenField" name="hd_bt_sim_clicado" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_bt_sim_clicado</property>
    <property name="Top">454</property>
    <property name="Value">0</property>
    <property name="Width">165</property>
  </object>
  <object class="HiddenField" name="hd_carta_correcao_numero" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_carta_correcao_numero</property>
    <property name="Top">475</property>
    <property name="Width">165</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">453</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
  <object class="HiddenField" name="hd_carta_correcao_nfe" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">hd_carta_correcao_nfe</property>
    <property name="Top">497</property>
    <property name="Width">165</property>
  </object>
</object>
?>
