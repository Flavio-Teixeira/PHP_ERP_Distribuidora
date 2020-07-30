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
use_unit("checklst.inc.php");
use_unit("actnlist.inc.php");
use_unit("comctrls.inc.php");
use_unit("styles.inc.php");
use_unit("dbgrids.inc.php");
use_unit("forms.inc.php");
use_unit("extctrls.inc.php");
use_unit("stdctrls.inc.php");

//*** Exibe imagem de carregando ao processar ***
require_once("includes/msg_carregando_pagina.inc.php");

//Class definition
class opcpermissoes extends Page
{
   public $mgt_lista_opcao = null;
   public $registro_opcoes_menu = null;
   public $bt_alterar = null;
   public $Label19 = null;
   public $Panel2 = null;
   public $Panel1 = null;
   public $Label18 = null;
   public $Label1 = null;
   public $opcao_usuario = null;
   public $GroupBox3 = null;
   public $Estilo_Pagina = null;
   public $MSG_Erro = null;
   public $bt_fechar = null;
   public $area_sistema = null;
   public $Label4 = null;
   public $GroupBox2 = null;
   public $GroupBox1 = null;

   function registro_opcoes_menuJSRowChanged($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

      var valor_opcao
      var valor_escolhido
      var valor_lista

      valor_opcao = registro_opcoes_menu.getTableModel().getValue(3, registro_opcoes_menu.getFocusedRow());

      if( valor_opcao == 'Permitido' )
      {
        valor_escolhido = 'Nao Permitido';
        valor_lista = '0';
      }
      else if( valor_opcao == 'Nao Permitido' )
      {
        valor_escolhido = 'Leitura';
        valor_lista = '2';
      }
      else if( valor_opcao == 'Leitura' )
      {
        valor_escolhido = 'Permitido';
        valor_lista = '1';
      }
      else
      {
        valor_escolhido = 'Permitido';
        valor_lista = '1';
      }

      registro_opcoes_menu.getTableModel().setValue(3, registro_opcoes_menu.getFocusedRow(), valor_escolhido);

      //*** Gera a Lista de Opcoes do Menu ***

      document.opcpermissoes.mgt_lista_opcao.value = document.opcpermissoes.mgt_lista_opcao.value + valor_lista + ',' + registro_opcoes_menu.getTableModel().getValue(1, registro_opcoes_menu.getFocusedRow()) + '|';

<?php

   }

   function opcao_usuarioChange($sender, $params)
   {
      $posicao_usuario = $this->opcao_usuario->ItemIndex;

      if(trim($posicao_usuario) <> '')
      {
         //*** Seleciona os Dados do Menu ***
         $Comando_SQL = "SELECT * FROM mgt_opcoes_menu ORDER BY mgt_opcao_menu_nro";

         GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Close();
         GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->SQL = $Comando_SQL;
         GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Open();

         if((GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->EOF) != 1)
         {
            while((GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->EOF) != 1)
            {
               //*** Carrega o Grid de Opcoes com o Usuario ***

               $Comando_SQL = "select *, IF(mgt_permissao_opcao = '0','Nao Permitido',IF(mgt_permissao_opcao = '1','Permitido',IF(mgt_permissao_opcao = '2','Leitura','Nao Permitido'))) AS mgt_opcao_menu_opcao from mgt_opcoes_menu, mgt_permissoes ";
               $Comando_SQL .= "where mgt_opcao_menu_tag = mgt_permissao_tag And mgt_opcao_menu_tag = '" . trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag']) . "' And mgt_permissao_usuario = '" . $posicao_usuario . "' ";
               $Comando_SQL .= "order by mgt_opcao_menu_nro";

               GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
               GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
               GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

               if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) == 1)
               {
                  $Comando_SQL = "INSERT INTO mgt_permissoes(mgt_permissao_usuario, mgt_permissao_tag, mgt_permissao_opcao) VALUES ";
                  $Comando_SQL .= "('" . $posicao_usuario . "','" . trim(GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Fields['mgt_opcao_menu_tag']) . "','1');";

                  GetConexaoPrincipal()->SQL_Comunitario->Close();
                  GetConexaoPrincipal()->SQL_Comunitario->SQL = $Comando_SQL;
                  GetConexaoPrincipal()->SQL_Comunitario->Open();
                  GetConexaoPrincipal()->SQL_Comunitario->Close();
               }

               GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Next();
            }

            //*** Seleciona Novamente o Usuario Nao Cadastrado ***

            $Comando_SQL = "select *, IF(mgt_permissao_opcao = '0','Nao Permitido',IF(mgt_permissao_opcao = '1','Permitido',IF(mgt_permissao_opcao = '2','Leitura','Nao Permitido'))) AS mgt_opcao_menu_opcao from mgt_opcoes_menu, mgt_permissoes ";
            $Comando_SQL .= "where mgt_opcao_menu_tag = mgt_permissao_tag And mgt_permissao_usuario = '" . $posicao_usuario . "' ";
            $Comando_SQL .= "order by mgt_opcao_menu_nro";

            GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Close();
            GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->SQL = $Comando_SQL;
            GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Open();
         }

         $this->mgt_lista_opcao->Value = '';
      }
   }

   function bt_alterarClick($sender, $params)
   {
      $posicao_usuario = $this->opcao_usuario->ItemIndex;

      if(trim($posicao_usuario) == '0')
      {
         $this->MSG_Erro->Caption = 'Por favor, selecione um usuario';
      }
      else
      {
         $this->MSG_Erro->Caption = '';

         //*** Estrutura o Comando SQL ***
         $Comando_SQL = "update mgt_permissoes set mgt_permissao_opcao = '" . $this->mgt_lista_opcao->Value;
         $Comando_SQL = str_replace(",", "' where mgt_permissao_tag = '", $Comando_SQL) ;
         $Comando_SQL = str_replace("|", "' and mgt_permissao_usuario = '" . $posicao_usuario . "'; update mgt_permissoes set mgt_permissao_opcao = '", $Comando_SQL);
         $Comando_SQL = substr($Comando_SQL, 0, - 50);

         //*** Transforma cada Comando para Array ***
         $Lista_Comando_SQL = explode(";", $Comando_SQL);

         //*** Executa os Comandos de Update ***

         foreach($Lista_Comando_SQL as $Executa_Comando)
         {
            if(trim($Executa_Comando) <> '')
            {
               GetConexaoPrincipal()->SQL_Comunitario->Close();
               GetConexaoPrincipal()->SQL_Comunitario->SQL = $Executa_Comando;
               GetConexaoPrincipal()->SQL_Comunitario->Open();
               GetConexaoPrincipal()->SQL_Comunitario->Close();
            }
         }

         $this->opcao_usuario->ItemIndex = -1;
         $this->opcao_usuario->setItemIndex( - 1);
      }

      //*** Fecha a Janela de Permissoes ***

      redirect('frame_corpo.php');
   }

   function opcpermissoesCreate($sender, $params)
   {
      //*** Comando de Insercao do Grid ***
/*
TRUNCATE TABLE `mgt_opcoes_menu`;
INSERT INTO `mgt_opcoes_menu` (`mgt_opcao_menu_nro`, `mgt_opcao_menu_tag`, `mgt_opcao_menu_descricao`, `mgt_opcao_menu_nivel`, `mgt_opcao_menu_ultima`, `mgt_opcao_menu_url`) VALUES
(001, 'framecorpo',                 'Cadastros                                               ', 'N', 'N', 'frame_corpo.php'),
(002, 'cadclientes',                '------Clientes                                          ', 'S', 'N', 'cad_clientes.php'),
(003, 'cadfornecedores',            '------Fornecedores                                      ', 'S', 'N', 'cad_fornecedores.php'),
(004, 'framecorpo',                 '------Produtos                                          ', 'N', 'N', 'frame_corpo.php'),
(005, 'cadtipos',                   '------------Tipos                                       ', 'S', 'N', 'cad_tipos.php'),
(006, 'cadfamilias',                '------------Familias                                    ', 'S', 'N', 'cad_familias.php'),
(007, 'cadprodutos',                '------------Produtos                                    ', 'S', 'N', 'cad_produtos.php'),
(008, 'framecorpo',                 '------Impostos/Taxas                                    ', 'N', 'N', 'frame_corpo.php'),
(009, 'cadimpostos',                '------------PIS                                         ', 'S', 'N', 'cad_impostos_inc.php'),
(010, 'cadimpostos',                '------------COFINS                                      ', 'S', 'N', 'cad_impostos_inc.php'),
(011, 'cadimpostos',                '------------ICMS                                        ', 'S', 'N', 'cad_impostos_inc.php'),
(012, 'cadimpostos',                '------------CSLL                                        ', 'S', 'N', 'cad_impostos_inc.php'),
(013, 'cadimpostos',                '------------IRPJ                                        ', 'S', 'N', 'cad_impostos_inc.php'),
(014, 'cadimpostos',                '------------IPI                                         ', 'S', 'N', 'cad_impostos_inc.php'),
(015, 'cadtransportadoras',         '------Transportadoras                                   ', 'S', 'N', 'cad_transportadoras.php'),
(016, 'cadrepresentantes',          '------Representantes                                    ', 'S', 'N', 'cad_representantes.php'),
(017, 'cadassistentes',             '------Assistentes                                       ', 'S', 'N', 'cad_assistentes.php'),
(018, 'cadbancos',                  '------Bancos                                            ', 'S', 'N', 'cad_bancos.php'),
(019, 'cadusuarios',                '------Usuarios                                          ', 'S', 'N', 'cad_usuarios.php'),
(020, 'cadivas',                    '------IVAs                                              ', 'S', 'N', 'cad_ivas.php'),
(021, 'framecorpo',                 '------CFOPs                                             ', 'N', 'N', 'frame_corpo.php'),
(022, 'cadcfops',                   '------------CFOPs Natureza Operacao                     ', 'S', 'N', 'cad_cfops.php'),
(023, 'cadcfopsfaturamento',        '------------CFOPs Faturamento                           ', 'S', 'N', 'cad_cfops_faturamento.php'),
(024, 'framecorpo',                 '------NCMs                                              ', 'N', 'N', 'frame_corpo.php'),
(025, 'cadncmsutilizadas',          '------------Utilizadas                                  ', 'S', 'N', 'cad_ncms_utilizadas.php'),
(026, 'cadncmstabelas',             '------------Tabela Geral                                ', 'S', 'N', 'cad_ncms_tabelas.php'),
(027, 'cadservicos',                '------Servicos                                          ', 'S', 'S', 'cad_servicos.php'),
(028, 'framecorpo',                 'Compras                                                 ', 'N', 'N', 'frame_corpo.php'),
(029, 'comrequisicoes',             '------Requisicoes                                       ', 'S', 'N', 'com_requisicoes.php'),
(030, 'comcotacoes',                '------Cotacoes                                          ', 'S', 'N', 'com_cotacoes.php'),
(031, 'comordens',                  '------Ordens de Compra                                  ', 'S', 'N', 'com_ordens.php'),
(032, 'comentradanota',             '------Registros de Notas de Entradas                    ', 'S', 'N', 'com_entrada_nota.php'),
(033, 'relprodutoscomprados',       '------Relacao de Produtos Comprados                     ', 'S', 'S', 'rel_produtos_comprados.php'),
(034, 'framecorpo',                 'Vendas                                                  ', 'N', 'N', 'frame_corpo.php'),
(035, 'venorcamentos',              '------Orcamentos                                        ', 'S', 'N', 'ven_orcamentos.php'),
(036, 'venpedidos',                 '------Pedidos                                           ', 'S', 'N', 'ven_pedidos.php'),
(037, 'venpedidositem',             '------Ctrl.Itens do Pedido                              ', 'S', 'N', 'ven_pedidos_item.php'),
(038, 'venfaturamentos',            '------Enviados para Faturamento                         ', 'S', 'N', 'ven_faturamentos.php'),
(039, 'venvendas',                  '------Historico de Vendas                               ', 'S', 'N', 'ven_vendas.php'),
(040, 'venmapaproducao',            '------Mapa de Producao                                  ', 'S', 'N', 'ven_mapa_producao.php'),
(041, 'venpedidospendentes',        '------Pedidos Pendentes                                 ', 'S', 'N', 'ven_pedidos_pendentes.php'),
(042, 'venservicos',                '------Enviados para Faturamento de Servicos             ', 'S', 'S', 'ven_servicos.php'),
(043, 'framecorpo',                 'Notas Fiscais                                           ', 'N', 'N', 'frame_corpo.php'),
(044, 'nfemissaonota',              '------Emissao de NF-e Produtos                          ', 'S', 'N', 'nf_emissao_nota.php'),
(045, 'nfemissaonotavnb',           '------(VNB) Emissao de NF-e                             ', 'S', 'N', 'nf_emissao_nota_vnb.php'),
(046, 'nfcancelanota',              '------Cancelamento de NF                                ', 'S', 'N', 'nf_cancela_nota.php'),
(047, 'nfcancelanotavnb',           '------(VNB) Cancelamento de NF                          ', 'S', 'N', 'nf_cancela_nota_vnb.php'),
(048, 'nfdatasaida',                '------Registrar a Data de Saida                         ', 'S', 'N', 'nf_data_saida.php'),
(049, 'framecorpo',                 '------Historicos                                        ', 'N', 'N', 'frame_corpo.php'),
(050, 'nfhistoriconota',            '------------Notas Fiscais                               ', 'S', 'N', 'nf_historico_nota.php'),
(051, 'nfhistoriconotavnb',         '------------(VNB) Notas Fiscais                         ', 'S', 'N', 'nf_historico_nota_vnb.php'),
(052, 'nfhistoricoprogramada',      '------------Vendas Programadas                          ', 'S', 'N', 'nf_historico_programada.php'),
(053, 'nfhistoricoprogramadavnb',   '------------(VNB) Vendas Programadas                    ', 'S', 'N', 'nf_historico_programada_vnb.php'),
(054, 'nfnumeroanterior',           '------Numero da Nota Fiscal Anterior                    ', 'S', 'N', 'nf_numero_anterior.php'),
(055, 'nfnumeroanteriorvnb',        '------(VNB) Numero da Nota Fiscal Anterior              ', 'S', 'N', 'nf_numero_anterior_vnb.php'),
(056, 'nfordemdespacho',            '------Ordem de Despacho/Etiqueta                        ', 'S', 'N', 'nf_ordem_despacho.php'),
(057, 'nfctrlsaida',                '------Controle de Saidas de Mercadoria                  ', 'S', 'N', 'nf_ctrl_saida.php'),
(058, 'nfconhecimentos',            '------Conhecimentos                                     ', 'S', 'N', 'nf_conhecimentos.php'),
(059, 'framecorpo',                 '------Operacoes Receita Federal NFe                     ', 'N', 'N', 'frame_corpo.php'),
(060, 'framecorpo',                 '------------Cancelamento                                ', 'N', 'N', 'frame_corpo.php'),
(061, 'mgtnfecancelamento',         '---------------Nota Fiscal                              ', 'S', 'N', 'mgt_nfe_cancelamento.php'),
(062, 'mgtnfecancelamentovnb',      '---------------(VNB) Nota Fiscal                        ', 'S', 'N', 'mgt_nfe_cancelamento_vnb.php'),
(063, 'mgtnfeinutilizacao',         '---------------Inutilizacao de Numero                   ', 'S', 'N', 'mgt_nfe_inutilizacao.php'),
(064, 'mgtnfeinutilizacaovnb',      '---------------(VNB) Inutilizacao de Numero             ', 'S', 'N', 'mgt_nfe_inutilizacao_vnb.php'),
(065, 'framecorpo',                 '------------Consultas                                   ', 'N', 'N', 'frame_corpo.php'),
(066, 'mgtnfeprotocolo',            '---------------Protocolo                                ', 'S', 'N', 'mgt_nfe_protocolo.php'),
(067, 'mgtnfeprotocolovnb',         '---------------(VNB) Protocolo                          ', 'S', 'N', 'mgt_nfe_protocolo_vnb.php'),
(068, 'mgtnfecadastro',             '---------------Cadastro                                 ', 'S', 'N', 'mgt_nfe_cadastro.php'),
(069, 'mgtnfestatus',               '---------------Status do Servidor                       ', 'S', 'N', 'mgt_nfe_status.php'),
(070, 'mgtnfestatusvnb',            '---------------(VNB) Status do Servidor                 ', 'S', 'N', 'mgt_nfe_status_vnb.php'),
(071, 'framecorpo',                 '------------DANFE                                       ', 'N', 'N', 'frame_corpo.php'),
(072, 'mgtnfereimprimir',           '---------------Reimprimir                               ', 'S', 'N', 'mgt_nfe_reimprimir.php'),
(073, 'mgtnfereimprimirvnb',        '---------------(VNB) Reimprimir                         ', 'S', 'N', 'mgt_nfe_reimprimir_vnb.php'),
(074, 'nfemissaosrv',               '------Emissao de NF de Servicos                         ', 'S', 'N', 'nf_emissao_srv.php'),
(075, 'nfemissaonfesrv',            '------Emissao de NFS-e                                  ', 'S', 'S', 'nf_emissao_nfe_srv.php'),
(076, 'framecorpo',                 'Contas a Receber                                        ', 'N', 'N', 'frame_corpo.php'),
(077, 'cobbaixa',                   '------Baixa de Cobranca                                 ', 'S', 'N', 'cob_baixa.php'),
(078, 'cobbaixavnb',                '------(VNB) Baixa de Cobranca                           ', 'S', 'N', 'cob_baixa_vnb.php'),
(079, 'framecorpo',                 '------Desdobramento Cobranca                            ', 'N', 'N', 'frame_corpo.php'),
(080, 'cobdesdobramento',           '------------Nota Fiscal                                 ', 'S', 'N', 'cob_desdobramento.php'),
(081, 'cobdesdobramentovnb',        '------------(VNB) Nota Fiscal                           ', 'S', 'N', 'cob_desdobramento_vnb.php'),
(082, 'cobdesdobramentoprg',        '------------Venda Programada                            ', 'S', 'N', 'cob_desdobramento_prg.php'),
(083, 'cobdesdobramentovnbprg',     '------------(VNB) Venda Programada                      ', 'S', 'N', 'cob_desdobramento_vnb_prg.php'),
(084, 'cobliberacredito',           '------Liberacao de Credito                              ', 'S', 'N', 'cob_libera_credito.php'),
(085, 'framecorpo',                 '------Arquivos de Transmissao                           ', 'N', 'N', 'frame_corpo.php'),
(086, 'cobtransmissaoremessa',      '------------Remessa                                     ', 'S', 'N', 'cob_transmissao_remessa.php'),
(087, 'cobtransmissaoretorno',      '------------Retorno                                     ', 'S', 'N', 'cob_transmissao_retorno.php'),
(088, 'cobduplicata',               '------Duplicatas                                        ', 'S', 'N', 'cob_duplicata.php'),
(089, 'cobnaovulado',               '------Valores Nao Vinculados a NF                       ', 'S', 'S', 'cob_nao_vinculado.php'),
(090, 'framecorpo',                 'Contas a Pagar                                          ', 'N', 'N', 'frame_corpo.php'),
(091, 'pagcontasbancarias',         '------Contas Bancarias                                  ', 'S', 'N', 'pag_contas_bancarias.php'),
(092, 'pagsaldos',                  '------Saldos                                            ', 'S', 'N', 'pag_saldos.php'),
(093, 'pagfixos',                   '------Pagamentos Fixos                                  ', 'S', 'N', 'pag_fixos.php'),
(094, 'pagcontaspagar',             '------Contas a Pagar                                    ', 'S', 'S', 'pag_contas_pagar.php'),
(095, 'framecorpo',                 'Industrial                                              ', 'N', 'N', 'frame_corpo.php'),
(096, 'indprogramaproducao',        '------Programa de Producao                              ', 'S', 'N', 'ind_programa_producao.php'),
(097, 'indplanejamentonecessidades','------Planejamento de Necessidades                      ', 'S', 'N', 'ind_planejamento_necessidades.php'),
(098, 'indcontroleproducao',        '------Controle de Producao                              ', 'S', 'S', 'ind_controle_producao.php'),
(099, 'framecorpo',                 'Estoque                                                 ', 'N', 'N', 'frame_corpo.php'),
(100, 'estsolicitacao',             '------Solicitacoes                                      ', 'S', 'N', 'est_solicitacao.php'),
(101, 'estmanutencao',              '------Manutencao                                        ', 'S', 'S', 'est_manutencao.php'),
(102, 'framecorpo',                 'Relatorios                                              ', 'N', 'N', 'frame_corpo.php'),
(103, 'framecorpo',                 '------Vendas                                            ', 'N', 'N', 'frame_corpo.php'),
(104, 'relultimasvendas',           '------------Ultimas Vendas                              ', 'S', 'N', 'rel_ultimas_vendas.php'),
(105, 'relpedidoperiodo',           '------------Pedidos por Periodo                         ', 'S', 'N', 'rel_pedido_periodo.php'),
(106, 'relfaturamentoperiodo',      '------------Faturamento por Periodo                     ', 'S', 'N', 'rel_faturamento_periodo.php'),
(107, 'relfaturamentoperiodovnb',   '------------(VNB) Faturamento por Periodo               ', 'S', 'N', 'rel_faturamento_periodo_vnb.php'),
(108, 'relmaioresclientes',         '------------Maiores Clientes por Valor Vendido          ', 'S', 'N', 'rel_maiores_clientes.php'),
(109, '#',                          '------------Vendas por Estados                          ', 'S', 'N', '#'),
(110, 'relfichavisita',             '------------Fichas de Visitas                           ', 'S', 'N', 'rel_ficha_visita.php'),
(111, 'relentradasperiodo',         '------------Entradas Emitidas por Periodo               ', 'S', 'N', 'rel_entradas_periodo.php'),
(112, 'relprodutosvendidos',        '------------Relacao de Produtos Vendidos                ', 'S', 'N', 'rel_produtos_vendidos.php'),
(113, 'relprodutosvendidosperiodo', '------------Produtos Vendidos por Periodo               ', 'S', 'N', 'rel_produtos_vendidos_periodo.php'),
(114, 'relultimacompracliente',     '------------Ultima Compra do Cliente                    ', 'S', 'N', 'rel_ultima_compra_cliente.php'),
(115, 'relconhecimentosgerados',    '------------Total de Conhecimentos Gerados              ', 'S', 'N', 'rel_conhecimentos_gerados.php'),
(116, 'framecorpo',                 '------Contas a Receber                                  ', 'N', 'N', 'frame_corpo.php'),
(117, 'relcobrancavencido',         '------------Vencidos e nao pagos                        ', 'S', 'N', 'rel_cobranca_vencido.php'),
(118, 'relcobrancavencidovnb',      '------------(VNB) Vencidos e nao pagos                  ', 'S', 'N', 'rel_cobranca_vencido_vnb.php'),
(119, 'relcobrancavencer',          '------------A Vencer                                    ', 'S', 'N', 'rel_cobranca_vencer.php'),
(120, 'relduplicata',               '------------Duplicatas                                  ', 'S', 'N', 'rel_duplicata.php'),
(121, 'relcobrancarelacao',         '------------Relacao de Cobrancas                        ', 'S', 'N', 'rel_cobranca_relacao.php'),
(122, 'relcobrancarelacaovnb',      '------------(VNB) Relacao de Cobrancas                  ', 'S', 'N', 'rel_cobranca_relacao_vnb.php'),
(123, 'relresumoreceitadespesa',    '------------Resumo Receita/Despesa                      ', 'S', 'N', 'rel_resumo_receita_despesa.php'),
(124, 'relfluxoreceitapagos',       '------------Fluxo Receita/Pagos                         ', 'S', 'N', 'rel_fluxo_receita_pagos.php'),
(125, 'framecorpo',                 '------Comissoes                                         ', 'N', 'N', 'frame_corpo.php'),
(126, 'relcomissoes',               '------------Comissoes a Pagar                           ', 'S', 'N', 'rel_comissoes.php'),
(127, 'relvendasrepresentantes',    '------------Vendas dos Representantes                   ', 'S', 'N', 'rel_vendas_representantes.php'),
(128, 'relvendasassistentes',       '------------Vendas dos Assistentes                      ', 'S', 'N', 'rel_vendas_assistentes.php'),
(129, 'framecorpo',                 '------Estoque                                           ', 'N', 'N', 'frame_corpo.php'),
(130, 'relmovtoestoque',            '------------Movimento do Estoque                        ', 'S', 'N', 'rel_movto_estoque.php'),
(131, 'framecorpo',                 '------------Estoque dos Produtos                        ', 'N', 'N', 'frame_corpo.php'),
(132, 'relestoqueprodutos',         '---------------Produto                                  ', 'S', 'N', 'rel_estoque_produtos.php'),
(133, 'relestoquetipos',            '---------------Tipo                                     ', 'S', 'N', 'rel_estoque_tipos.php'),
(134, 'relestoquefamilias',         '---------------Familia                                  ', 'S', 'N', 'rel_estoque_familias.php'),
(135, 'relinventario',              '------------Inventario                                  ', 'S', 'N', 'rel_inventario.php'),
(136, 'framecorpo',                 '------Impostos                                          ', 'N', 'N', 'frame_corpo.php'),
(137, 'relimpostos',                '------------PIS                                         ', 'S', 'N', 'rel_impostos.php?tipo=PIS'),
(138, 'relimpostos',                '------------COFINS                                      ', 'S', 'N', 'rel_impostos.php?tipo=COFINS'),
(139, 'relimpostos',                '------------ICMS                                        ', 'S', 'N', 'rel_impostos.php?tipo=ICMS'),
(140, 'relimpostos',                '------------CSLL                                        ', 'S', 'N', 'rel_impostos.php?tipo=CSLL'),
(141, 'relimpostos',                '------------IRPJ                                        ', 'S', 'N', 'rel_impostos.php?tipo=IRPJ'),
(142, 'relimpostos',                '------------IPI                                         ', 'S', 'N', 'rel_impostos.php?tipo=IPI'),
(143, 'framecorpo',                 '------Contas a Pagar                                    ', 'N', 'N', 'frame_corpo.php'),
(144, 'relcontaspagar',             '------------Contas a Pagar                              ', 'S', 'N', 'rel_contas_pagar.php'),
(145, 'relcontaspagarcomparativo',  '------------Comparativo a Pagar / Receber               ', 'S', 'N', 'rel_contas_pagar_comparativo.php'),
(146, 'relcontaspagarefetivo',      '------------Comparativo (Efetivo)   a Pagar / Receber   ', 'S', 'N', 'rel_contas_pagar_efetivo.php'),
(147, 'framecorpo',                 '------Etiquetas                                         ', 'N', 'N', 'frame_corpo.php'),
(148, 'reletiquetasclientes',       '------------Clientes                                    ', 'S', 'N', 'rel_etiquetas_clientes.php'),
(149, 'reletiquetasfornecedores',   '------------Fornecedores                                ', 'S', 'S', 'rel_etiquetas_fornecedores.php'),
(150, 'framecorpo',                 'Opcoes                                                  ', 'N', 'N', 'frame_corpo.php'),
(151, 'opcpermissoes',              '------Permissoes do Usuario                             ', 'S', 'N', 'opc_permissoes.php'),
(152, 'opcmanual',                  '------Manual de Utilizacao                              ', 'S', 'N', 'opc_manual.php'),
(153, 'sobre',                      '------Sobre...                                          ', 'S', 'S', 'sobre.php'),
(154, 'framecorpo',                 'Sair                                                    ', 'N', 'N', 'frame_corpo.php'),
(155, 'sairsistema',                '------Encerrar a Execucao                               ', 'S', 'S', 'sair_sistema.php');
*/

      require_once("includes/valida_sessao.inc.php");

      //*************************************
      //*** INICIO - Validacao de Leitura ***
      //*************************************

      $tag_permissao = trim($this->Name);
      $tag_permissao = str_replace('alt', '', $tag_permissao);
      $tag_permissao = str_replace('inc', '', $tag_permissao);
	  $tag_permissao = $_SESSION['login_permissao_' . trim($tag_permissao)];

      if($tag_permissao == "2")
      {
         if(isset($this->bt_incluir))
         {
            $this->bt_incluir->Visible = false;
         }
         if(isset($this->bt_alterar))
         {
            $this->bt_alterar->Visible = false;
         }
         if(isset($this->bt_excluir))
         {
            $this->bt_excluir->Visible = false;
         }
      }
      elseif($tag_permissao == "0")
      {
 	     redirect('frame_corpo.php');
	  }

      //************************************
      //*** FINAL - Validacao de Leitura ***
      //************************************

      //*** Carrega o Grid de Opcoes ***

      $posicao_usuario = $this->opcao_usuario->ItemIndex;

      $Comando_SQL = "select *, IF(mgt_permissao_opcao = '0','Nao Permitido',IF(mgt_permissao_opcao = '1','Permitido',IF(mgt_permissao_opcao = '2','Leitura','Nao Permitido'))) AS mgt_opcao_menu_opcao from mgt_opcoes_menu, mgt_permissoes ";
      $Comando_SQL .= "where mgt_opcao_menu_tag = mgt_permissao_tag And mgt_permissao_usuario = 'Null' ";
      $Comando_SQL .= "order by mgt_opcao_menu_nro";

      GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Close();
      GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Opcoes_Menu->Open();

      //*** Carrega os Usuarios ***

      $this->opcao_usuario->Clear();

      $Comando_SQL = "select * from mgt_usuarios order by mgt_usuario_login ";

      GetConexaoPrincipal()->SQL_MGT_Usuarios->Close();
      GetConexaoPrincipal()->SQL_MGT_Usuarios->SQL = $Comando_SQL;
      GetConexaoPrincipal()->SQL_MGT_Usuarios->Open();

      $this->opcao_usuario->AddItem('--- Selecione um Usuario ---', null , '');

      if((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) != 1)
      {
         while((GetConexaoPrincipal()->SQL_MGT_Usuarios->EOF) != 1)
         {
            $this->opcao_usuario->AddItem(GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_nome_completo'], null , GetConexaoPrincipal()->SQL_MGT_Usuarios->Fields['mgt_usuario_login']);
            GetConexaoPrincipal()->SQL_MGT_Usuarios->Next();
         }
      }

      $this->opcao_usuario->ItemIndex = -1;
      $this->opcao_usuario->setItemIndex( - 1);

      //*** Gera a Lista de Opcoes do Menu ***

      $this->mgt_lista_opcao->Value = '';
   }

   function bt_fecharClick($sender, $params)
   {
      redirect('frame_corpo.php');
   }

   function opcpermissoesJSLoad($sender, $params)
   {

?>
   //Adicione seu codigo javascript aqui

   carregando_pagina();

<?php

   }

}

global $application;

global $opcpermissoes;

//Creates the form
$opcpermissoes = new opcpermissoes($application);

//Read from resource file
$opcpermissoes->loadResource(__FILE__);

//Shows the form
$opcpermissoes->show();

?>