<?php
<object class="cobduplicataimp" name="cobduplicataimp" baseclass="page">
  <property name="Alignment">agLeft</property>
  <property name="Background"></property>
  <property name="Caption"><![CDATA[Faturamento por Periodo]]></property>
  <property name="DocType">dtNone</property>
  <property name="Height">510</property>
  <property name="IsMaster">0</property>
  <property name="Name">cobduplicataimp</property>
  <property name="Width">755</property>
  <property name="OnCreate">cobduplicataimpCreate</property>
  <property name="jsOnLoad">cobduplicataimpJSLoad</property>
  <object class="Label" name="mgt_cliente_razao_social" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_razao_social</property>
    <property name="Height">13</property>
    <property name="Left">21</property>
    <property name="Name">mgt_cliente_razao_social</property>
    <property name="ParentColor">0</property>
    <property name="Top">198</property>
    <property name="Width">472</property>
  </object>
  <object class="Label" name="mgt_cliente_codigo" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_codigo</property>
    <property name="Height">13</property>
    <property name="Left">512</property>
    <property name="Name">mgt_cliente_codigo</property>
    <property name="ParentColor">0</property>
    <property name="Top">198</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="mgt_cliente_endereco_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_endereco_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">21</property>
    <property name="Name">mgt_cliente_endereco_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">236</property>
    <property name="Width">344</property>
  </object>
  <object class="Label" name="mgt_cliente_bairro_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_bairro_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">377</property>
    <property name="Name">mgt_cliente_bairro_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">236</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="mgt_cliente_cep_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_cep_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">586</property>
    <property name="Name">mgt_cliente_cep_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">236</property>
    <property name="Width">126</property>
  </object>
  <object class="Label" name="mgt_cliente_cidade_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_cidade_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">21</property>
    <property name="Name">mgt_cliente_cidade_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">268</property>
    <property name="Width">272</property>
  </object>
  <object class="Label" name="mgt_cliente_fone_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_fone_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">299</property>
    <property name="Name">mgt_cliente_fone_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">268</property>
    <property name="Width">134</property>
  </object>
  <object class="Label" name="mgt_cliente_estado_cobranca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_estado_cobranca</property>
    <property name="Height">13</property>
    <property name="Left">448</property>
    <property name="Name">mgt_cliente_estado_cobranca</property>
    <property name="ParentColor">0</property>
    <property name="Top">268</property>
    <property name="Width">32</property>
  </object>
  <object class="Label" name="mgt_cliente_inscricao_estadual" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_inscricao_estadual</property>
    <property name="Height">13</property>
    <property name="Left">512</property>
    <property name="Name">mgt_cliente_inscricao_estadual</property>
    <property name="ParentColor">0</property>
    <property name="Top">268</property>
    <property name="Width">200</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_data_emissao" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_data_emissao</property>
    <property name="Height">13</property>
    <property name="Left">21</property>
    <property name="Name">mgt_nota_fiscal_data_emissao</property>
    <property name="ParentColor">0</property>
    <property name="Top">313</property>
    <property name="Width">128</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_numero" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_numero</property>
    <property name="Height">13</property>
    <property name="Left">160</property>
    <property name="Name">mgt_nota_fiscal_numero</property>
    <property name="ParentColor">0</property>
    <property name="Top">313</property>
    <property name="Width">104</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_dup_vlr" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_dup_vlr</property>
    <property name="Height">13</property>
    <property name="Left">272</property>
    <property name="Name">mgt_nota_fiscal_dup_vlr</property>
    <property name="ParentColor">0</property>
    <property name="Top">313</property>
    <property name="Width">152</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_dup_nro" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_dup_nro</property>
    <property name="Height">13</property>
    <property name="Left">440</property>
    <property name="Name">mgt_nota_fiscal_dup_nro</property>
    <property name="ParentColor">0</property>
    <property name="Top">313</property>
    <property name="Width">104</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_dup_dt_vcto" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_dup_dt_vcto</property>
    <property name="Height">13</property>
    <property name="Left">560</property>
    <property name="Name">mgt_nota_fiscal_dup_dt_vcto</property>
    <property name="ParentColor">0</property>
    <property name="Top">313</property>
    <property name="Width">152</property>
  </object>
  <object class="Label" name="mgt_cliente_endereco_cobranca_praca" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_cliente_endereco_cobranca_praca</property>
    <property name="Height">13</property>
    <property name="Left">21</property>
    <property name="Name">mgt_cliente_endereco_cobranca_praca</property>
    <property name="ParentColor">0</property>
    <property name="Top">379</property>
    <property name="Width">691</property>
  </object>
  <object class="Label" name="mgt_nota_fiscal_dup_vlr_extenso" >
    <property name="Alignment">agLeft</property>
    <property name="Caption">mgt_nota_fiscal_dup_vlr_extenso</property>
    <property name="Height">26</property>
    <property name="Left">21</property>
    <property name="Name">mgt_nota_fiscal_dup_vlr_extenso</property>
    <property name="ParentColor">0</property>
    <property name="Top">409</property>
    <property name="Width">691</property>
  </object>
</object>
?>
