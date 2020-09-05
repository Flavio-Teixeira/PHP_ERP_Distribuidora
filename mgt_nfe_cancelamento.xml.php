<?php
<object class="mgtnfecancelamento" name="mgtnfecancelamento" baseclass="Page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption">MGT - NFe - Cancelamento de Nota Fiscal</property>
  <property name="DocType">dtNone</property>
  <property name="Height">640</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
  <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">mgtnfecancelamento</property>
  <property name="Width">755</property>
  <property name="OnCreate">mgtnfecancelamentoCreate</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[EMISSAO DA NOTA FISCAL - Cancelamento de Nota Fiscal]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">730</property>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Numeracao para Cancelamento]]></property>
    <property name="Height">134</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">17</property>
    <property name="Width">730</property>
    <object class="Edit" name="nfe_inicial" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">224</property>
      <property name="MaxLength">7</property>
      <property name="Name">nfe_inicial</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">60</property>
      <property name="jsOnKeyPress">nfe_inicialJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_inicialJSKeyUp</property>
    </object>
    <object class="Edit" name="nfe_justificativa" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">8</property>
      <property name="MaxLength">255</property>
      <property name="Name">nfe_justificativa</property>
      <property name="ParentColor">0</property>
      <property name="Top">105</property>
      <property name="Width">713</property>
      <property name="jsOnKeyPress">nfe_justificativaJSKeyPress</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Caption"><![CDATA[Numeracao da NF-e a ser Cancelada:]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label1</property>
      <property name="Top">21</property>
      <property name="Width">213</property>
    </object>
    <object class="Label" name="Label3" >
      <property name="Caption"><![CDATA[Informar a Justificativa do pedido de inutilizacao (Sem acentos, Minimo de 15 digitos e no Maximo 255 digitos):]]></property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label3</property>
      <property name="Top">91</property>
      <property name="Width">654</property>
    </object>
    <object class="Label" name="Label2" >
      <property name="Caption"><![CDATA[Mes:]]></property>
      <property name="Height">13</property>
      <property name="Left">297</property>
      <property name="Name">Label2</property>
      <property name="Top">21</property>
      <property name="Width">33</property>
    </object>
    <object class="Edit" name="nfe_mes" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">332</property>
      <property name="MaxLength">2</property>
      <property name="Name">nfe_mes</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">nfe_mesJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_mesJSKeyUp</property>
    </object>
    <object class="Label" name="Label5" >
      <property name="Caption">Ano:</property>
      <property name="Height">13</property>
      <property name="Left">361</property>
      <property name="Name">Label5</property>
      <property name="Top">21</property>
      <property name="Width">33</property>
    </object>
    <object class="Edit" name="nfe_ano" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">396</property>
      <property name="MaxLength">2</property>
      <property name="Name">nfe_ano</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">25</property>
      <property name="jsOnKeyPress">nfe_anoJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_anoJSKeyUp</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Caption">Nro. Protocolo:</property>
      <property name="Height">13</property>
      <property name="Left">431</property>
      <property name="Name">Label4</property>
      <property name="Top">21</property>
      <property name="Width">86</property>
    </object>
    <object class="Edit" name="nfe_nro_protocolo" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">520</property>
      <property name="MaxLength">15</property>
      <property name="Name">nfe_nro_protocolo</property>
      <property name="ParentColor">0</property>
      <property name="Top">17</property>
      <property name="Width">201</property>
      <property name="jsOnKeyPress">nfe_nro_protocoloJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_nro_protocoloJSKeyUp</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Caption">Nro. Chave de Acesso da NFe:</property>
      <property name="Height">13</property>
      <property name="Left">47</property>
      <property name="Name">Label6</property>
      <property name="Top">49</property>
      <property name="Width">174</property>
    </object>
    <object class="Edit" name="nfe_nro_chave_acesso" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">224</property>
      <property name="MaxLength">44</property>
      <property name="Name">nfe_nro_chave_acesso</property>
      <property name="ParentColor">0</property>
      <property name="Top">45</property>
      <property name="Width">497</property>
      <property name="jsOnKeyPress">nfe_nro_chave_acessoJSKeyPress</property>
      <property name="jsOnKeyUp">nfe_nro_chave_acessoJSKeyUp</property>
    </object>
    <object class="Label" name="Label7" >
      <property name="Caption"><![CDATA[Data de Emissao da NFe:]]></property>
      <property name="Height">13</property>
      <property name="Left">75</property>
      <property name="Name">Label7</property>
      <property name="Top">73</property>
      <property name="Width">123</property>
    </object>
    <object class="Edit" name="mgt_nota_fiscal_data_emissao" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">224</property>
      <property name="MaxLength">10</property>
      <property name="Name">mgt_nota_fiscal_data_emissao</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">65</property>
      <property name="jsOnKeyPress">mgt_nota_fiscal_data_emissaoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_nota_fiscal_data_emissaoJSKeyUp</property>
    </object>
    <object class="Label" name="Label10" >
      <property name="Caption">Hora de Recebimento da NF-e na Receita Federal:</property>
      <property name="Height">13</property>
      <property name="Left">293</property>
      <property name="Name">Label10</property>
      <property name="Top">73</property>
      <property name="Width">242</property>
    </object>
    <object class="Edit" name="mgt_hora_entrega" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">536</property>
      <property name="MaxLength">8</property>
      <property name="Name">mgt_hora_entrega</property>
      <property name="ParentColor">0</property>
      <property name="Top">69</property>
      <property name="Width">49</property>
      <property name="jsOnKeyPress">mgt_hora_entregaJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_hora_entregaJSKeyUp</property>
    </object>
    <object class="Label" name="Label8" >
      <property name="Caption"><![CDATA[Sequencia do Evento:]]></property>
      <property name="Height">13</property>
      <property name="Left">591</property>
      <property name="Name">Label8</property>
      <property name="Top">73</property>
      <property name="Width">107</property>
    </object>
    <object class="Edit" name="mgt_sequencia_evento" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">701</property>
      <property name="MaxLength">1</property>
      <property name="Name">mgt_sequencia_evento</property>
      <property name="ParentColor">0</property>
      <property name="Text">1</property>
      <property name="Top">69</property>
      <property name="Width">20</property>
      <property name="jsOnKeyPress">mgt_sequencia_eventoJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_sequencia_eventoJSKeyUp</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox2" >
    <property name="Caption">Erros encontrados no envio</property>
    <property name="Height">317</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">153</property>
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
      <property name="Height">267</property>
      <property name="Left">8</property>
      <property name="Lines">a:0:{}</property>
      <property name="Name">listagem_erros</property>
      <property name="ReadOnly">1</property>
      <property name="Top">43</property>
      <property name="Width">711</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption"><![CDATA[Envio da Numeracao para Cancelamento]]></property>
    <property name="Height">52</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">473</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_enviar" >
      <property name="Caption">Enviar o Cancelamento de Nota</property>
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
      <property name="Caption">Imprimir Protocolo de Cancelamento</property>
      <property name="Enabled">0</property>
      <property name="Height">25</property>
      <property name="Left">368</property>
      <property name="Name">bt_imprimir</property>
      <property name="Top">16</property>
      <property name="Width">227</property>
      <property name="OnClick">bt_imprimirClick</property>
    </object>
  </object>
  <object class="HiddenField" name="tipo_ambiente" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">tipo_ambiente</property>
    <property name="Top">529</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="cnpj_padrao" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">cnpj_padrao</property>
    <property name="Top">549</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="status_servico" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">status_servico</property>
    <property name="Top">569</property>
    <property name="Width">150</property>
  </object>
  <object class="HiddenField" name="nfe_impressao_protocolo" >
    <property name="Height">18</property>
    <property name="Left">8</property>
    <property name="Name">nfe_impressao_protocolo</property>
    <property name="Top">589</property>
    <property name="Width">150</property>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">666</property>
        <property name="Top">532</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
