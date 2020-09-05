<?php
/*
+------------------------------------------------+
| Desenvolvido Por:                              |
| DATATEX INFORMATICA E SERVICOS LTDA            |
| System of the New Generation                   |
|                                                |
| http://www.datatex.com.br                      |
| sistemas@datatex.com.br                        |
| Fone: 55 11 2629-4605                          |
|                                                |
| PROTECAO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificacao deste Sistema esta protegida  |
| pela Lei Nro.9609 onde se dispoe sobre a       |
| protecao da propriedade intelectual de         |
| programa de computador, sua comercializacao    |
| no Pais, e da outras providencias.             |
| ATENCAO: Nao e permitido efetuar alteracoes    |
| na codificacao do sistema, efetuar instalacoes |
| em outros computadores, copias e utiliza-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/
require_once("vcl/vcl.inc.php");
//Includes
require_once("conexao_principal.php");
use_unit("styles.inc.php");
use_unit("dbtables.inc.php");
use_unit("buttons.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Verifica os Dados ***
$BT_Acessar = $_REQUEST['BT_Acessar'];
$login_usuario = $_REQUEST['login_usuario'];
$login_senha = $_REQUEST['login_senha'];

//*** Inicializa a Sessao ***
session_start();

//*** Abre a Conexao ***
GetConexaoPrincipal()->Banco_Dados->Connected = true;

//*** Seleciona os Dados da Empresa ***
$Comando_SQL = "SELECT * FROM mgt_empresas";

GetConexaoPrincipal()->SQL_MGT_Empresas->Close();
GetConexaoPrincipal()->SQL_MGT_Empresas->SQL = $Comando_SQL;
GetConexaoPrincipal()->SQL_MGT_Empresas->Open();

if((GetConexaoPrincipal()->SQL_MGT_Empresas->EOF) != 1)
{
   $empresa_sistema = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_razao_social'];
   $area_sistema = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_area'];

   $_SESSION['hd_login_empresa'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_apelido'];
   $_SESSION['hd_login_impressora'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_impressora'];
   $_SESSION['hd_login_razao'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_razao_social'];
   $_SESSION['hd_login_endereco'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_endereco'];
   $_SESSION['hd_login_nro'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_nro'];
   $_SESSION['hd_login_complemento'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_complemento'];
   $_SESSION['hd_login_bairro'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_bairro'];
   $_SESSION['hd_login_cod_cidade'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_codigo_cidade'];
   $_SESSION['hd_login_cidade'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_cidade'];
   $_SESSION['hd_login_cod_pais'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_codigo_pais'];
   $_SESSION['hd_login_pais'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_pais'];
   $_SESSION['hd_login_fone'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_fones'];
   $_SESSION['hd_login_estado'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_estado'];
   $_SESSION['hd_login_cep'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_cep'];
   $_SESSION['hd_login_cnpj'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_cnpj'];
   $_SESSION['hd_login_ie'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_insc_estadual'];
   $_SESSION['hd_login_nfe_senha'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_nfe_senha'];
   $_SESSION['hd_login_nfe_ambiente'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_nfe_ambiente'];
   $_SESSION['hd_login_nfe_serie'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_nfe_serie'];
   $_SESSION['hd_login_nfe_regime'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_nfe_regime'];
   $_SESSION['hd_login_transmite_xml'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_transmite_xml'];
   $_SESSION['hd_login_imprime_cliente'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_imprime_cliente'];
   $_SESSION['hd_login_cofins_cst'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_cofins_cst'];
   $_SESSION['hd_login_pis_cst'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_pis_cst'];
   $_SESSION['hd_login_estoque'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_controla_estoque'];
   $_SESSION['hd_login_caminho_base'] = GetConexaoPrincipal()->SQL_MGT_Empresas->Fields['mgt_empresa_caminho_base'];
   $_SESSION['hd_comando_sql_grid'] = '';
}

if(trim($BT_Acessar) == 'Acessar')
{
   $MSG_Erro = '';

   if((($login_usuario) == "")and(($login_senha) == ""))
   {
      $MSG_Erro = "Usuario ou senha em branco! Por favor preencha todos os campos!";
   }
   else
   {
      $Comando_SQL = "SELECT * FROM mgt_usuarios WHERE mgt_usuario_login = '" . $login_usuario . "' and  mgt_usuario_senha = '" . $login_senha . "'";

      GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
      GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) == 1)
      {
         $MSG_Erro = "O Usuario e a Senha que voce digitou nao estao corretos ou nao existem. Por favor, tente novamente.";
      }
      else
      {
         $_SESSION['login_registrado'] = "true";
         $_SESSION['login_usuario'] = $login_usuario;
         $_SESSION['login_senha'] = $login_senha;
  	     $_SESSION['login_nome_completo'] = trim(GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_nome_completo']) . ' - (' . trim(GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_departamento']) . ')';

         $_SESSION['login_empresa'] = $_SESSION['hd_login_empresa'];
         $_SESSION['login_impressora'] = $_SESSION['hd_login_impressora'];
         $_SESSION['login_razao'] = $_SESSION['hd_login_razao'];
         $_SESSION['login_endereco'] = $_SESSION['hd_login_endereco'];
         $_SESSION['login_nro'] = $_SESSION['hd_login_nro'];
         $_SESSION['login_complemento'] = $_SESSION['hd_login_complemento'];
         $_SESSION['login_bairro'] = $_SESSION['hd_login_bairro'];
         $_SESSION['login_cod_cidade'] = $_SESSION['hd_login_cod_cidade'];
         $_SESSION['login_cidade'] = $_SESSION['hd_login_cidade'];
         $_SESSION['login_cod_pais'] = $_SESSION['hd_login_cod_pais'];
         $_SESSION['login_pais'] = $_SESSION['hd_login_pais'];
         $_SESSION['login_fone'] = $_SESSION['hd_login_fone'];
         $_SESSION['login_estado'] = $_SESSION['hd_login_estado'];
         $_SESSION['login_cep'] = $_SESSION['hd_login_cep'];
         $_SESSION['login_cnpj'] = $_SESSION['hd_login_cnpj'];
         $_SESSION['login_ie'] = $_SESSION['hd_login_ie'];
         $_SESSION['login_nfe_senha'] = $_SESSION['hd_login_nfe_senha'];
         $_SESSION['login_nfe_ambiente'] = $_SESSION['hd_login_nfe_ambiente'];
         $_SESSION['login_nfe_serie'] = $_SESSION['hd_login_nfe_serie'];
         $_SESSION['login_nfe_regime'] = $_SESSION['hd_login_nfe_regime'];
         $_SESSION['login_transmite_xml'] = $_SESSION['hd_login_transmite_xml'];
         $_SESSION['login_imprime_cliente'] = $_SESSION['hd_login_imprime_cliente'];
         $_SESSION['login_cofins_cst'] = $_SESSION['hd_login_cofins_cst'];
         $_SESSION['login_pis_cst'] = $_SESSION['hd_login_pis_cst'];
         $_SESSION['login_estoque'] = $_SESSION['hd_login_estoque'];
		 $_SESSION['login_caminho_base'] = $_SESSION['hd_login_caminho_base'];
         $_SESSION['comando_sql_grid'] = $_SESSION['hd_comando_sql_grid'];

         //*** Grava o Arquivo de Login para Controle de Sessao ***
         $grava_sessao = fopen('swap/lg_' . trim(getenv("REMOTE_ADDR")) . '.txt', "w");
         fwrite($grava_sessao, trim($_SESSION['login_usuario']) . "\n");
         fwrite($grava_sessao, trim($_SESSION['login_senha']));
         fclose($grava_sessao);

         //*** Redireciona para o Menu principal ***
         redirect("menu_principal.php");
      }
   }
}

?>
<html>
   <head>
      <title>ManagerTEX - Datatex Informatica e Servicos Ltda - Fone: (11) 2629-4605</title>

      <style type="text/css">
         body {
           background: #EBE9ED;
           background-repeat: repeat-x;
           overflow: auto;
           overflow-x:auto;
           overflow-y:auto;
         }
         font {font-size: 12px; font-family: verdana, arial, helvetica, sans-serif;}
      </style>

   </head>
   <body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" onload="login_usuario.focus();">

      <div style="position:absolute;">
         <img src="imagens/managertex_menu_logo.jpg" width="193" height="60" border="0" alt="" style="position:absolute; top:0px; left:0px;">
         <div style="position:absolute;">
            <img src="imagens/logo.jpg" width="140" border="0" alt="" style="position:absolute; top:0px; left:0px;">
            <font style="position:absolute; top:38px; left:200px; width:500px; color:#FFFFFF"><b>&raquo; Empresa:&nbsp;</b> <?php echo trim($empresa_sistema); ?></font>
         </div>
      </div>

      <table cellspacing="0" cellpadding="0" width="100%" height="100%" bgcolor="#EBE9ED" valign="top">
         <tr>
            <td height="60" background="imagens/managertex_menu_traco.jpg"></td>
         </tr>
         <tr>
            <td>
               <center>
                  <table cellspacing="1" cellpadding="0" width="316" height="144" bgcolor="#000000" valign="top">
                  <tr>
                  <td>
                  <table cellspacing="0" cellpadding="0" width="316" height="144" bgcolor="#FFFFFF" valign="top">
                     <tr>
                        <td><img src="imagens/cadeado.jpg" width="116" height="144" border="0" alt=""></td>
                        <td width="200" height="144" align="center" valign="middle">

                        <form action="index.php?BT_Acessar=Acessar" method="post" name="index_login" id="index_login">
                        <table cellspacing="0" cellpadding="0" width="200" height="80" bgcolor="#FFFFFF" valign="top">
                           <tr>
                              <td height="25"><font><B>Usuario</B>&nbsp;</font></td>
                              <td height="25"><font><input name="login_usuario" id="login_usuario" value="<?php echo $login_usuario;?>" type="text" size="15" onkeypress="if((event.keyCode == 9) || (event.keyCode == 13) ) {login_senha.focus();return false; };"></font></td>
                           </tr>

                           <tr>
                              <td height="25"><font><B>Senha</B>&nbsp;</font></td>
                              <td height="25"><font><input name="login_senha" id="login_senha" value="<?php echo $login_senha;?>" type="password" size="15" onkeypress="if((event.keyCode == 9) || (event.keyCode == 13) ) {BT_Acessar.focus();return false; }"></font></td>
                           </tr>

                           <tr>
                              <td height="25" colspan="2"><center><font><input name="BT_Acessar" value="Acessar" type="button" onclick="submit();" ></font></center></td>
                           </tr>
                        </table>
                        </form>

                        </td>
                     </tr>
                  </table>
                  </td>
                  </tr>
                  </table>

<?php
echo '<font color="#FF0000"><b>' . trim($MSG_Erro) . '</b></font>';
?>
               </center>
            </td>
         </tr>
         <tr>
            <td height="2" bgcolor="#000000"></td>
         </tr>
         <tr>
            <td height="20"><center><font>ManagerTEX - V.2K77 &raquo;&raquo;&raquo; Area de Login &laquo;&laquo;&laquo;&nbsp;&nbsp;<img src="imagens/triskle.gif" width="10" height="9" border="0" alt=""></font></center></td>
         </tr>
      </table>

   </body>
</html>