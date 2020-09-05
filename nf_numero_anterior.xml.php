<?php
<object class="nfnumeroanterior" name="nfnumeroanterior" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Layout">
    <property name="Type">REL_XY_LAYOUT</property>
  </property>
  <property name="Name">nfnumeroanterior</property>
  <property name="Width">755</property>
  <property name="OnCreate">nfnumeroanteriorCreate</property>
  <property name="jsOnLoad">nfnumeroanteriorJSLoad</property>
  <object class="Label" name="area_sistema" >
    <property name="Caption"><![CDATA[NOTAS FISCAIS - Numero da Nota Fiscal Anterior]]></property>
    <property name="Height">13</property>
    <property name="Name">area_sistema</property>
    <property name="Width">755</property>
  </object>
  <object class="GroupBox" name="GroupBox3" >
    <property name="Caption">Nota Fiscal Produtos</property>
    <property name="Height">89</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox3</property>
    <property name="Top">39</property>
    <property name="Width">355</property>
    <object class="Label" name="Label2" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Numero da Ultima Nota Fiscal]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">36</property>
      <property name="Name">Label2</property>
      <property name="ParentFont">0</property>
      <property name="Top">57</property>
      <property name="Width">166</property>
    </object>
    <object class="Edit" name="mgt_numero_nota_anterior_numero" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">207</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_numero_nota_anterior_numero</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">102</property>
      <property name="jsOnKeyPress">mgt_numero_nota_anterior_numeroJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_numero_nota_anterior_numeroJSKeyUp</property>
    </object>
    <object class="DateTimePicker" name="mgt_numero_nota_anterior_data" >
      <property name="Caption">mgt_numero_nota_anterior_data</property>
      <property name="Height">21</property>
      <property name="IfFormat">%d/%m/%Y</property>
      <property name="Layer"></property>
      <property name="Left">207</property>
      <property name="Name">mgt_numero_nota_anterior_data</property>
      <property name="Top">21</property>
      <property name="Width">102</property>
    </object>
    <object class="Label" name="Label1" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Data da Ultima Nota Fiscal]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">51</property>
      <property name="Name">Label1</property>
      <property name="ParentFont">0</property>
      <property name="Top">25</property>
      <property name="Width">151</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox1" >
    <property name="Caption"><![CDATA[Opcoes]]></property>
    <property name="Height">52</property>
    <property name="Left">8</property>
    <property name="Name">GroupBox1</property>
    <property name="Top">227</property>
    <property name="Width">730</property>
    <object class="Button" name="bt_fechar" >
      <property name="Caption">Fechar</property>
      <property name="Height">25</property>
      <property name="Left">647</property>
      <property name="Name">bt_fechar</property>
      <property name="Top">17</property>
      <property name="Width">75</property>
      <property name="OnClick">bt_fecharClick</property>
    </object>
    <object class="Button" name="bt_incluir" >
      <property name="Caption">Alterar</property>
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
      <property name="Top">19</property>
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
    <property name="Caption">Venda Programada</property>
    <property name="Height">89</property>
    <property name="Left">383</property>
    <property name="Name">GroupBox2</property>
    <property name="Top">39</property>
    <property name="Width">355</property>
    <object class="Label" name="Label3" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Numero da Ultima Venda Programada]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">9</property>
      <property name="Name">Label3</property>
      <property name="ParentFont">0</property>
      <property name="Top">57</property>
      <property name="Width">222</property>
    </object>
    <object class="Edit" name="mgt_numero_nota_anterior_numero_prg" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">234</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_numero_nota_anterior_numero_prg</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">102</property>
      <property name="jsOnKeyPress">mgt_numero_nota_anterior_numero_prgJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_numero_nota_anterior_numero_prgJSKeyUp</property>
    </object>
    <object class="DateTimePicker" name="mgt_numero_nota_anterior_data_prg" >
      <property name="Caption">mgt_numero_nota_anterior_data_prg</property>
      <property name="Height">21</property>
      <property name="IfFormat">%d/%m/%Y</property>
      <property name="Layer"></property>
      <property name="Left">234</property>
      <property name="Name">mgt_numero_nota_anterior_data_prg</property>
      <property name="Top">21</property>
      <property name="Width">102</property>
    </object>
    <object class="Label" name="Label4" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Data da Ultima Venda Programada]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">8</property>
      <property name="Name">Label4</property>
      <property name="ParentFont">0</property>
      <property name="Top">25</property>
      <property name="Width">223</property>
    </object>
  </object>
  <object class="GroupBox" name="GroupBox4" >
    <property name="Caption"><![CDATA[Nota Fiscal Servicos]]></property>
    <property name="Height">89</property>
    <property name="Left">195</property>
    <property name="Name">GroupBox4</property>
    <property name="Top">135</property>
    <property name="Width">355</property>
    <object class="Label" name="Label5" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Numero da Ultima Nota Fiscal]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">36</property>
      <property name="Name">Label5</property>
      <property name="ParentFont">0</property>
      <property name="Top">57</property>
      <property name="Width">166</property>
    </object>
    <object class="Edit" name="mgt_numero_nota_anterior_numero_srv" >
      <property name="Color">#F4F1AA</property>
      <property name="Height">21</property>
      <property name="Left">207</property>
      <property name="MaxLength">80</property>
      <property name="Name">mgt_numero_nota_anterior_numero_srv</property>
      <property name="ParentColor">0</property>
      <property name="TabOrder">2</property>
      <property name="Top">53</property>
      <property name="Width">102</property>
      <property name="jsOnKeyPress">mgt_numero_nota_anterior_numero_srvJSKeyPress</property>
      <property name="jsOnKeyUp">mgt_numero_nota_anterior_numero_srvJSKeyUp</property>
    </object>
    <object class="DateTimePicker" name="mgt_numero_nota_anterior_data_srv" >
      <property name="Caption">mgt_numero_nota_anterior_data</property>
      <property name="Height">21</property>
      <property name="IfFormat">%d/%m/%Y</property>
      <property name="Layer"></property>
      <property name="Left">207</property>
      <property name="Name">mgt_numero_nota_anterior_data_srv</property>
      <property name="Top">21</property>
      <property name="Width">102</property>
    </object>
    <object class="Label" name="Label6" >
      <property name="Alignment">agRight</property>
      <property name="Caption"><![CDATA[Data da Ultima Nota Fiscal]]></property>
      <property name="Font">
            <property name="Align">taRight</property>
      </property>
      <property name="Height">13</property>
      <property name="Left">51</property>
      <property name="Name">Label6</property>
      <property name="ParentFont">0</property>
      <property name="Top">25</property>
      <property name="Width">151</property>
    </object>
  </object>
  <object class="StyleSheet" name="Estilo_Pagina" >
        <property name="Left">701</property>
        <property name="Top">284</property>
    <property name="FileName">css/estilo.css</property>
    <property name="Name">Estilo_Pagina</property>
  </object>
</object>
?>
