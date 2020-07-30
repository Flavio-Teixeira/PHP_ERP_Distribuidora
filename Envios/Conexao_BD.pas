unit Conexao_BD;

interface

uses
  SysUtils, Classes, DBXpress, FMTBcd, DB, DBClient, Provider, SqlExpr,
  ADODB, DBTables;

type
  TConexaoBD = class(TDataModule)
    SQL_Comunitario: TADOQuery;
    DS_Comunitario: TDataSource;
    Conexao_Principal: TADOConnection;
    SQL_Pedidos: TADOQuery;
    DS_Pedidos: TDataSource;
    SQL_Licencas: TADOQuery;
    DS_Licencas: TDataSource;
    SQL_Empresa: TADOQuery;
    DS_Empresa: TDataSource;
    SQL_Envio: TADOQuery;
    DS_Envio: TDataSource;
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  ConexaoBD: TConexaoBD;

implementation

uses Rotinas_Gerais;

{$R *.dfm}


end.
