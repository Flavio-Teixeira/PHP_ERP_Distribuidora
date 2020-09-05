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
use_unit("db.inc.php");
use_unit("dbtables.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//Class definition
class conexaoprincipal extends DataModule
{
    public $SQL_MGT_Pedidos_Itens = null;
    public $DS_MGT_Pedidos_Itens = null;
       public $DS_MGT_Expedicao = null;
       public $SQL_MGT_Expedicao = null;
       public $DS_MGT_Solicitacoes_Estoque = null;
       public $SQL_MGT_Solicitacoes_Estoque = null;
       public $DS_MGT_Mapas_Produtos = null;
       public $SQL_MGT_Mapas_Produtos = null;
       public $DS_MGT_Mapas = null;
       public $SQL_MGT_Mapas = null;
       public $DS_MGT_Planejamento_Necessidades = null;
       public $SQL_MGT_Planejamento_Necessidades = null;
       public $DS_MGT_Programa_Producao = null;
       public $SQL_MGT_Programa_Producao = null;
       public $DS_MGT_Estruturas = null;
       public $SQL_MGT_Estruturas = null;
       public $DS_MGT_Faturamentos_Produtos_Srv = null;
       public $SQL_MGT_Faturamentos_Produtos_Srv = null;
       public $DS_MGT_Faturamentos_Srv = null;
       public $SQL_MGT_Faturamentos_Srv = null;
       public $DS_MGT_Servicos = null;
       public $SQL_MGT_Servicos = null;
       public $DS_MGT_Opcoes_Menu = null;
       public $SQL_MGT_Opcoes_Menu = null;
       public $DS_MGT_Sequencia_Remessa = null;
       public $SQL_MGT_Sequencia_Remessa = null;
       public $DS_MGT_Permissoes = null;
       public $SQL_MGT_Permissoes = null;
       public $DS_MGT_CFOP_Faturamento = null;
       public $SQL_MGT_CFOP_Faturamento = null;
       public $DS_MGT_Requisicoes_Produtos = null;
       public $SQL_MGT_Requisicoes_Produtos = null;
       public $DS_MGT_Requisicoes = null;
       public $SQL_MGT_Requisicoes = null;
       public $DS_MGT_Notas_Entradas_Produtos = null;
       public $SQL_MGT_Notas_Entradas_Produtos = null;
       public $DS_MGT_Notas_Entradas = null;
       public $SQL_MGT_Notas_Entradas = null;
       public $DS_MGT_Ordens_Produtos = null;
       public $SQL_MGT_Ordens_Produtos = null;
       public $DS_MGT_Ordens = null;
       public $SQL_MGT_Ordens = null;
       public $DS_MGT_Cotacoes_Produtos = null;
       public $SQL_MGT_Cotacoes_Produtos = null;
       public $DS_MGT_Cotacoes = null;
       public $SQL_MGT_Cotacoes = null;
       public $DS_MGT_Comissoes = null;
       public $SQL_MGT_Comissoes = null;
       public $DS_MGT_Movto_Estoque = null;
       public $SQL_MGT_Movto_Estoque = null;
       public $DS_MGT_Comparativo = null;
       public $SQL_MGT_Comparativo = null;
       public $DS_MGT_Conhecimentos = null;
       public $SQL_MGT_Conhecimentos = null;
       public $SQL_MGT_Classificacoes_Fiscais_Numeros = null;
       public $DS_MGT_Classificacoes_Fiscais_Numeros = null;
       public $DS_MGT_Classificacoes_Fiscais_Letras = null;
       public $SQL_MGT_Classificacoes_Fiscais_Letras = null;
       public $DS_MGT_Contas_Pagar = null;
       public $SQL_MGT_Contas_Pagar = null;
       public $DS_MGT_Fixos = null;
       public $SQL_MGT_Fixos = null;
       public $DS_MGT_Saldos = null;
       public $SQL_MGT_Saldos = null;
       public $DS_MGT_Contas = null;
       public $SQL_MGT_Contas = null;
       public $DS_Relatorio = null;
       public $SQL_Relatorio = null;
       public $DS_MGT_NCM = null;
       public $SQL_MGT_NCM = null;
       public $DS_MGT_CF_Letra = null;
       public $SQL_MGT_CF_Letra = null;
       public $DS_MGT_Cobrancas = null;
       public $SQL_MGT_Cobrancas = null;
       public $DS_MGT_IVA = null;
       public $SQL_MGT_IVA = null;
       public $DS_MGT_CFOP = null;
       public $SQL_MGT_CFOP = null;
       public $DS_MGT_Notas_Fiscais_Produtos = null;
       public $SQL_MGT_Notas_Fiscais_Produtos = null;
       public $DS_MGT_Notas_Fiscais = null;
       public $SQL_MGT_Notas_Fiscais = null;
       public $DS_MGT_Programadas_Produtos = null;
       public $DS_MGT_Programadas = null;
       public $SQL_MGT_Programadas_Produtos = null;
       public $SQL_MGT_Programadas = null;
       public $DS_MGT_Numero_Nota = null;
       public $SQL_MGT_Numero_Nota = null;
       public $DS_MGT_Faturamentos_Produtos = null;
       public $SQL_MGT_Faturamentos_Produtos = null;
       public $DS_MGT_Faturamentos = null;
       public $SQL_MGT_Faturamentos = null;
       public $DS_MGT_Orcamentos_Produtos = null;
       public $SQL_MGT_Orcamentos_Produtos = null;
       public $DS_MGT_Orcamentos = null;
       public $SQL_MGT_Orcamentos = null;
       public $DS_MGT_Pedidos_Produtos = null;
       public $SQL_MGT_Pedidos_Produtos = null;
       public $DS_MGT_Pedidos = null;
       public $SQL_MGT_Pedidos = null;
       public $DS_MGT_Produtos = null;
       public $SQL_MGT_Produtos = null;
       public $DS_MGT_Clientes = null;
       public $SQL_MGT_Clientes = null;
       public $DS_MGT_Impostos = null;
       public $SQL_MGT_Impostos = null;
       public $DS_MGT_Fornecedores = null;
       public $SQL_MGT_Fornecedores = null;
       public $DS_MGT_Empresas = null;
       public $SQL_MGT_Empresas = null;
       public $DS_MGT_Transportadoras = null;
       public $SQL_MGT_Transportadoras = null;
       public $Banco_Dados = null;
       public $DS_MGT_Familias = null;
       public $SQL_MGT_Familias = null;
       public $DS_MGT_Tipos = null;
       public $SQL_MGT_Tipos = null;
       public $DS_MGT_Representantes = null;
       public $SQL_MGT_Representantes = null;
       public $SQL_Comunitario = null;
       public $DS_MGT_Bancos = null;
       public $SQL_MGT_Bancos = null;
       public $DS_MGT_Usuarios = null;
       public $SQL_MGT_Usuarios = null;
    public $SQL_MGT_Assistentes = null;
    public $DS_MGT_Assistentes = null;
    public $SQL_MGT_CTe = null;
    public $DS_MGT_CTe = null;
    public $SQL_MGT_Tributos = null;
    public $DS_MGT_Tributos = null;
}

global $application;

global $conexaoprincipal;

//Creates the form
$conexaoprincipal=new conexaoprincipal($application);

//Read from resource file
$conexaoprincipal->loadResource(__FILE__);

function GetConexaoPrincipal()
{
   global $conexaoprincipal;

   return $conexaoprincipal;
}

?>