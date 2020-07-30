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
| PROTEÇÃO AOS DIREITOS DE AUTOR E DO REGISTRO:  |
| Toda codificação deste Sistema está protegida  |
| pela Lei Nro.9609 onde se dispõe sobre a       |
| proteção da propriedade intelectual de         |
| programa de computador, sua comercialização    |
| no País, e dá outras providências.             |
| ATENÇÃO: Não é permitido efetuar alterações    |
| na codificação do sistema, efetuar instalações |
| em outros computadores, cópias e utilizá-lo    |
| como base no desenvolvimento de outro sistema  |
| semelhante ou de igual funcionamento.          |
+------------------------------------------------+
*/

//*** Início - Validação de Sessão ***

session_start();

if(!$_SESSION['login_registrado'])
{
   //*** Verifica se o Arquivo de Controle de Sessão Existe ***
   if(file_exists('swap/lg_' . trim(getenv("REMOTE_ADDR")) . '.txt'))
   {
      //*** Seleciona os Dados da Empresa ***
      $Comando_SQL = "SELECT * FROM mgt_empresas";

      GetConexaoPrincipal()->SQL_MGT_Empresas->Close();
      GetConexaoPrincipal()->SQL_MGT_Empresas->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Empresas->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Empresas->EOF) != 1)
      {
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

      $arquivo_sessao = fopen('swap/lg_' . trim(getenv("REMOTE_ADDR")) . '.txt', "r");

      $login_usuario = fgets($arquivo_sessao, 4096);
      $login_senha = fgets($arquivo_sessao, 4096);

      fclose($arquivo_sessao);

      $Comando_SQL = "SELECT * FROM mgt_usuarios WHERE mgt_usuario_login = '" . trim($login_usuario) . "' and  mgt_usuario_senha = '" . trim($login_senha) . "'";

      GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
      GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

      if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) != 1)
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
      }
   }
}

if(!$_SESSION['login_registrado'])
{
   redirect("index.php");
}
else
{
   if($_SESSION['login_registrado'] <> "true")
   {
      redirect("index.php");
   }
   else
   {
      if((trim($_SESSION['login_usuario']) == "")or(trim($_SESSION['login_senha']) == ""))
      {
         redirect("index.php");
      }
      else
      {
         $Comando_SQL = "SELECT * FROM mgt_usuarios WHERE mgt_usuario_login = '" . trim($_SESSION['login_usuario']) . "' and  mgt_usuario_senha = '" . trim($_SESSION['login_senha']) . "'";

         GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
         GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) == 1)
         {
            redirect("index.php");
         }
         else
         {
            //*** Trava as Opções de Acesso para o Login Desejado ***

            $Comando_SQL = "select * from mgt_permissoes Where ";
            $Comando_SQL .= "mgt_permissao_usuario = '" . trim($_SESSION['login_usuario']) . "' Order By mgt_permissao_tag";

            GetConexaoPrincipal()->SQL_MGT_Permissoes->Close();
            GetConexaoPrincipal()->SQL_MGT_Permissoes->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Permissoes->Open();

            if((GetConexaoPrincipal()->SQL_MGT_Permissoes->EOF) != 1)
            {
               while((GetConexaoPrincipal()->SQL_MGT_Permissoes->EOF) != 1)
               {
                  $_SESSION['login_permissao_' . trim(GetConexaoPrincipal()->SQL_MGT_Permissoes->Fields['mgt_permissao_tag'])] = trim(GetConexaoPrincipal()->SQL_MGT_Permissoes->Fields['mgt_permissao_opcao']);

                  GetConexaoPrincipal()->SQL_MGT_Permissoes->Next();
               }
            }
         }
      }
   }
}

//*** Início - Validação de Sessão ***
?>