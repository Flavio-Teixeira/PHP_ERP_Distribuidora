unit Envia_NFe;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls, Buttons, Grids, DBGrids, IdMessage, IdBaseComponent,
  IdComponent, IdTCPConnection, IdTCPClient, IdMessageClient, IdSMTP,
  ExtCtrls;

type
  TEnviaNFe = class(TForm)
    GroupBox1: TGroupBox;
    GroupBox2: TGroupBox;
    BT_Sair: TBitBtn;
    GroupBox3: TGroupBox;
    Label1: TLabel;
    Dados_Procura: TEdit;
    Opcoes_Procura: TComboBox;
    Label2: TLabel;
    BT_Procurar: TBitBtn;
    DBGrid_Pedidos: TDBGrid;
    BT_Sobre: TLabel;
    Posicao_1: TEdit;
    IdSMTP: TIdSMTP;
    IdMessage: TIdMessage;
    Opc_Manual: TRadioButton;
    Opc_Automatica: TRadioButton;
    Intervalo_Envio: TTimer;
    BT_Organizar: TBitBtn;
    procedure BT_SairClick(Sender: TObject);
    procedure BT_SobreClick(Sender: TObject);
    procedure FormShow(Sender: TObject);
    procedure FormCreate(Sender: TObject);
    procedure BT_ProcurarClick(Sender: TObject);
    procedure DBGrid_PedidosDrawColumnCell(Sender: TObject;
      const Rect: TRect; DataCol: Integer; Column: TColumn;
      State: TGridDrawState);
    procedure DBGrid_PedidosCellClick(Column: TColumn);
    procedure Intervalo_EnvioTimer(Sender: TObject);
    procedure Opc_ManualClick(Sender: TObject);
    procedure Opc_AutomaticaClick(Sender: TObject);
    procedure BT_OrganizarClick(Sender: TObject);
  private
    { Private declarations }
    function TemAtributo(Attr, Val: Integer): Boolean;
    function Verifica_Registro():Boolean;
    procedure Procurar();
    procedure Envia_Email(Selecionado: String);
    procedure Envio_Automatico();
    procedure ListarArquivosXML(Diretorio: string; Sub:Boolean);    

  public
    { Public declarations }
  end;

var
  EnviaNFe: TEnviaNFe;
  Email_Destino: String;
  Email_Enviado: Boolean;
  Arquivos_Localizados: Array[0..30000] of String;
  Arquivo_Sequencia: Integer;

implementation

uses Sobre_00, Conexao_BD, Rotinas_Gerais;

{$R *.dfm}

//***************
//*** Funções ***
//***************

function TEnviaNFe.TemAtributo(Attr, Val: Integer): Boolean;
begin
  Result := Attr and Val = Val;
end;

function TEnviaNFe.Verifica_Registro():Boolean;

var
   Nro_HD: String;
   Posicao: Array[0..10] of String;
   Posicao_Nro: Array[0..10] of Real;
   Ind: Integer;

   Str_Posicao, Letra_1, Letra_2, Letra_3, Calculo_1, Calculo_2, Calculo_3, Licenca: String;

   Retorno: Boolean;
begin
     Retorno := False;

     If Trim(Posicao_1.Text) = '' Then
        Begin
        Nro_HD := Numero_HD('C');
        Nro_HD := Trim(UpperCase(Nro_HD));

        //*** Registro ***

        For Ind := 1 To Length(Nro_HD) Do
            Begin
            If Nro_HD[Ind] = 'A' Then
               Begin
               Posicao[(Ind - 1)] := '01';
               End
            Else If Nro_HD[Ind] = 'B' Then
               Begin
               Posicao[(Ind - 1)] := '02';
               End
            Else If Nro_HD[Ind] = 'C' Then
               Begin
               Posicao[(Ind - 1)] := '03';
               End
            Else If Nro_HD[Ind] = 'D' Then
               Begin
               Posicao[(Ind - 1)] := '04';
               End
            Else If Nro_HD[Ind] = 'E' Then
               Begin
               Posicao[(Ind - 1)] := '05';
               End
            Else If Nro_HD[Ind] = 'F' Then
               Begin
               Posicao[(Ind - 1)] := '06';
               End
            Else If Nro_HD[Ind] = 'G' Then
               Begin
               Posicao[(Ind - 1)] := '07';
               End
            Else If Nro_HD[Ind] = 'H' Then
               Begin
               Posicao[(Ind - 1)] := '08';
               End
            Else If Nro_HD[Ind] = 'I' Then
               Begin
               Posicao[(Ind - 1)] := '09';
               End
            Else If Nro_HD[Ind] = 'J' Then
               Begin
               Posicao[(Ind - 1)] := '10';
               End
            Else If Nro_HD[Ind] = 'K' Then
               Begin
               Posicao[(Ind - 1)] := '11';
               End
            Else If Nro_HD[Ind] = 'L' Then
               Begin
               Posicao[(Ind - 1)] := '12';
               End
            Else If Nro_HD[Ind] = 'M' Then
               Begin
               Posicao[(Ind - 1)] := '13';
               End
            Else If Nro_HD[Ind] = 'N' Then
               Begin
               Posicao[(Ind - 1)] := '14';
               End
            Else If Nro_HD[Ind] = 'O' Then
               Begin
               Posicao[(Ind - 1)] := '15';
               End
            Else If Nro_HD[Ind] = 'P' Then
               Begin
               Posicao[(Ind - 1)] := '16';
               End
            Else If Nro_HD[Ind] = 'Q' Then
               Begin
               Posicao[(Ind - 1)] := '17';
               End
            Else If Nro_HD[Ind] = 'R' Then
               Begin
               Posicao[(Ind - 1)] := '18';
               End
            Else If Nro_HD[Ind] = 'S' Then
               Begin
               Posicao[(Ind - 1)] := '19';
               End
            Else If Nro_HD[Ind] = 'T' Then
               Begin
               Posicao[(Ind - 1)] := '20';
               End
            Else If Nro_HD[Ind] = 'U' Then
               Begin
               Posicao[(Ind - 1)] := '21';
               End
            Else If Nro_HD[Ind] = 'V' Then
               Begin
               Posicao[(Ind - 1)] := '22';
               End
            Else If Nro_HD[Ind] = 'W' Then
               Begin
               Posicao[(Ind - 1)] := '23';
               End
            Else If Nro_HD[Ind] = 'X' Then
               Begin
               Posicao[(Ind - 1)] := '24';
               End
            Else If Nro_HD[Ind] = 'Y' Then
               Begin
               Posicao[(Ind - 1)] := '25';
               End
            Else If Nro_HD[Ind] = 'Z' Then
               Begin
               Posicao[(Ind - 1)] := '26';
               End
            Else If Nro_HD[Ind] = '0' Then
               Begin
               Posicao[(Ind - 1)] := '00';
               End
            Else If Nro_HD[Ind] = '1' Then
               Begin
               Posicao[(Ind - 1)] := '01';
               End
            Else If Nro_HD[Ind] = '2' Then
               Begin
               Posicao[(Ind - 1)] := '02';
               End
            Else If Nro_HD[Ind] = '3' Then
               Begin
               Posicao[(Ind - 1)] := '03';
               End
            Else If Nro_HD[Ind] = '4' Then
               Begin
               Posicao[(Ind - 1)] := '04';
               End
            Else If Nro_HD[Ind] = '5' Then
               Begin
               Posicao[(Ind - 1)] := '05';
               End
            Else If Nro_HD[Ind] = '6' Then
               Begin
               Posicao[(Ind - 1)] := '06';
               End
            Else If Nro_HD[Ind] = '7' Then
               Begin
               Posicao[(Ind - 1)] := '07';
               End
            Else If Nro_HD[Ind] = '8' Then
               Begin
               Posicao[(Ind - 1)] := '08';
               End
            Else If Nro_HD[Ind] = '9' Then
               Begin
               Posicao[(Ind - 1)] := '09';
            End;
        End;

        //*** Troca e Multiplicação de Posições ***

        Posicao[0] := IntToStr(StrToInt(Posicao[0]) * 3);
        Posicao[4] := IntToStr(StrToInt(Posicao[4]) * 3);
        Posicao[1] := IntToStr(StrToInt(Posicao[1]) * 3);
        Posicao[5] := IntToStr(StrToInt(Posicao[5]) * 3);
        Posicao[2] := IntToStr(StrToInt(Posicao[2]) * 3);
        Posicao[6] := IntToStr(StrToInt(Posicao[6]) * 3);
        Posicao[3] := IntToStr(StrToInt(Posicao[3]) * 3);
        Posicao[7] := IntToStr(StrToInt(Posicao[7]) * 3);

        If Length(Trim(Posicao[0])) <= 1 Then
           Begin
           Posicao[0] := '0'+Trim(Posicao[0]);
        End;

        If Length(Trim(Posicao[1])) <= 1 Then
           Begin
           Posicao[1] := '0'+Trim(Posicao[1]);
        End;

        If Length(Trim(Posicao[2])) <= 1 Then
           Begin
           Posicao[2] := '0'+Trim(Posicao[2]);
        End;

        If Length(Trim(Posicao[3])) <= 1 Then
           Begin
           Posicao[3] := '0'+Trim(Posicao[3]);
        End;

        If Length(Trim(Posicao[4])) <= 1 Then
           Begin
           Posicao[4] := '0'+Trim(Posicao[4]);
        End;

        If Length(Trim(Posicao[5])) <= 1 Then
           Begin
           Posicao[5] := '0'+Trim(Posicao[5]);
        End;

        If Length(Trim(Posicao[6])) <= 1 Then
           Begin
           Posicao[6] := '0'+Trim(Posicao[6]);
        End;

        If Length(Trim(Posicao[7])) <= 1 Then
           Begin
           Posicao[7] := '0'+Trim(Posicao[7]);
        End;

        //*** Obtem a 1a. Letra ***

        If Posicao[5]  = '01' Then
           Begin
           Letra_1 := 'A';
           End
        Else If Posicao[5]  = '02' Then
           Begin
           Letra_1 := 'B';
           End
        Else If Posicao[5]  = '03' Then
           Begin
           Letra_1 := 'C';
           End
        Else If Posicao[5]  = '04' Then
           Begin
           Letra_1 := 'D';
           End
        Else If Posicao[5]  = '05' Then
           Begin
           Letra_1 := 'E';
           End
        Else If Posicao[5]  = '06' Then
           Begin
           Letra_1 := 'F';
           End
        Else If Posicao[5]  = '07' Then
           Begin
           Letra_1 := 'G';
           End
        Else If Posicao[5]  = '08' Then
           Begin
           Letra_1 := 'H';
           End
        Else If Posicao[5]  = '09' Then
           Begin
           Letra_1 := 'I';
           End
        Else If Posicao[5]  = '10' Then
           Begin
           Letra_1 := 'J';
           End
        Else If Posicao[5]  = '11' Then
           Begin
           Letra_1 := 'K';
           End
        Else If Posicao[5]  = '12' Then
           Begin
           Letra_1 := 'L';
           End
        Else If Posicao[5]  = '13' Then
           Begin
           Letra_1 := 'M';
           End
        Else If Posicao[5]  = '14' Then
           Begin
           Letra_1 := 'N';
           End
        Else If Posicao[5]  = '15' Then
           Begin
           Letra_1 := 'O';
           End
        Else If Posicao[5]  = '16' Then
           Begin
           Letra_1 := 'P';
           End
        Else If Posicao[5]  = '17' Then
           Begin
           Letra_1 := 'Q';
           End
        Else If Posicao[5]  = '18' Then
           Begin
           Letra_1 := 'R';
           End
        Else If Posicao[5]  = '19' Then
           Begin
           Letra_1 := 'S';
           End
        Else If Posicao[5]  = '20' Then
           Begin
           Letra_1 := 'T';
           End
        Else If Posicao[5]  = '21' Then
           Begin
           Letra_1 := 'U';
           End
        Else If Posicao[5]  = '22' Then
           Begin
           Letra_1 := 'V';
           End
        Else If Posicao[5]  = '23' Then
           Begin
           Letra_1 := 'W';
           End
        Else If Posicao[5]  = '24' Then
           Begin
           Letra_1 := 'X';
           End
        Else If Posicao[5]  = '25' Then
           Begin
           Letra_1 := 'Y';
           End
        Else If Posicao[5]  = '26' Then
           Begin
           Letra_1 := 'Z';
           End
        Else
           Begin
           Letra_1 := 'A';
        End;

        //*** Obtem a 2a. Letra ***

        If Posicao[2]  = '01' Then
           Begin
           Letra_2 := 'A';
           End
        Else If Posicao[2]  = '02' Then
           Begin
           Letra_2 := 'B';
           End
        Else If Posicao[2]  = '03' Then
           Begin
           Letra_2 := 'C';
           End
        Else If Posicao[2]  = '04' Then
           Begin
           Letra_2 := 'D';
           End
        Else If Posicao[2]  = '05' Then
           Begin
           Letra_2 := 'E';
           End
        Else If Posicao[2]  = '06' Then
           Begin
           Letra_2 := 'F';
           End
        Else If Posicao[2]  = '07' Then
           Begin
           Letra_2 := 'G';
           End
        Else If Posicao[2]  = '08' Then
           Begin
           Letra_2 := 'H';
           End
        Else If Posicao[2]  = '09' Then
           Begin
           Letra_2 := 'I';
           End
        Else If Posicao[2]  = '10' Then
           Begin
           Letra_2 := 'J';
           End
        Else If Posicao[2]  = '11' Then
           Begin
           Letra_2 := 'K';
           End
        Else If Posicao[2]  = '12' Then
           Begin
           Letra_2 := 'L';
           End
        Else If Posicao[2]  = '13' Then
           Begin
           Letra_2 := 'M';
           End
        Else If Posicao[2]  = '14' Then
           Begin
           Letra_2 := 'N';
           End
        Else If Posicao[2]  = '15' Then
           Begin
           Letra_2 := 'O';
           End
        Else If Posicao[2]  = '16' Then
           Begin
           Letra_2 := 'P';
           End
        Else If Posicao[2]  = '17' Then
           Begin
           Letra_2 := 'Q';
           End
        Else If Posicao[2]  = '18' Then
           Begin
           Letra_2 := 'R';
           End
        Else If Posicao[2]  = '19' Then
           Begin
           Letra_2 := 'S';
           End
        Else If Posicao[2]  = '20' Then
           Begin
           Letra_2 := 'T';
           End
        Else If Posicao[2]  = '21' Then
           Begin
           Letra_2 := 'U';
           End
        Else If Posicao[2]  = '22' Then
           Begin
           Letra_2 := 'V';
           End
        Else If Posicao[2]  = '23' Then
           Begin
           Letra_2 := 'W';
           End
        Else If Posicao[2]  = '24' Then
           Begin
           Letra_2 := 'X';
           End
        Else If Posicao[2]  = '25' Then
           Begin
           Letra_2 := 'Y';
           End
        Else If Posicao[2]  = '26' Then
           Begin
           Letra_2 := 'Z';
           End
        Else
           Begin
           Letra_2 := 'A';
        End;

        //*** Obtem a 3a. Letra ***

        If Posicao[6]  = '01' Then
           Begin
           Letra_3 := 'A';
           End
        Else If Posicao[6]  = '02' Then
           Begin
           Letra_3 := 'B';
           End
        Else If Posicao[6]  = '03' Then
           Begin
           Letra_3 := 'C';
           End
        Else If Posicao[6]  = '04' Then
           Begin
           Letra_3 := 'D';
           End
        Else If Posicao[6]  = '05' Then
           Begin
           Letra_3 := 'E';
           End
        Else If Posicao[6]  = '06' Then
           Begin
           Letra_3 := 'F';
           End
        Else If Posicao[6]  = '07' Then
           Begin
           Letra_3 := 'G';
           End
        Else If Posicao[6]  = '08' Then
           Begin
           Letra_3 := 'H';
           End
        Else If Posicao[6]  = '09' Then
           Begin
           Letra_3 := 'I';
           End
        Else If Posicao[6]  = '10' Then
           Begin
           Letra_3 := 'J';
           End
        Else If Posicao[6]  = '11' Then
           Begin
           Letra_3 := 'K';
           End
        Else If Posicao[6]  = '12' Then
           Begin
           Letra_3 := 'L';
           End
        Else If Posicao[6]  = '13' Then
           Begin
           Letra_3 := 'M';
           End
        Else If Posicao[6]  = '14' Then
           Begin
           Letra_3 := 'N';
           End
        Else If Posicao[6]  = '15' Then
           Begin
           Letra_3 := 'O';
           End
        Else If Posicao[6]  = '16' Then
           Begin
           Letra_3 := 'P';
           End
        Else If Posicao[6]  = '17' Then
           Begin
           Letra_3 := 'Q';
           End
        Else If Posicao[6]  = '18' Then
           Begin
           Letra_3 := 'R';
           End
        Else If Posicao[6]  = '19' Then
           Begin
           Letra_3 := 'S';
           End
        Else If Posicao[6]  = '20' Then
           Begin
           Letra_3 := 'T';
           End
        Else If Posicao[6]  = '21' Then
           Begin
           Letra_3 := 'U';
           End
        Else If Posicao[6]  = '22' Then
           Begin
           Letra_3 := 'V';
           End
        Else If Posicao[6]  = '23' Then
           Begin
           Letra_3 := 'W';
           End
        Else If Posicao[6]  = '24' Then
           Begin
           Letra_3 := 'X';
           End
        Else If Posicao[6]  = '25' Then
           Begin
           Letra_3 := 'Y';
           End
        Else If Posicao[6]  = '26' Then
           Begin
           Letra_3 := 'Z';
           End
        Else
           Begin
           Letra_3 := 'A';
        End;

        Posicao_1.Text      := Posicao[0] + Posicao[4] + Posicao[1] + Posicao[5] + Posicao[2] + Posicao[6] + Posicao[3] + Posicao[7] + Letra_1 + Letra_2 + Letra_3;
     End;

     //*** Licenca ***

     Str_Posicao := Posicao_1.Text;

     Posicao[0]  := Str_Posicao[1]+Str_Posicao[2];
     Posicao[1]  := Str_Posicao[3]+Str_Posicao[4];
     Posicao[2]  := Str_Posicao[5]+Str_Posicao[6];
     Posicao[3]  := Str_Posicao[7]+Str_Posicao[8];
     Posicao[4]  := Str_Posicao[9]+Str_Posicao[10];
     Posicao[5]  := Str_Posicao[11]+Str_Posicao[12];
     Posicao[6]  := Str_Posicao[13]+Str_Posicao[14];
     Posicao[7]  := Str_Posicao[15]+Str_Posicao[16];
     Posicao[8]  := Str_Posicao[17];
     Posicao[9]  := Str_Posicao[18];
     Posicao[10] := Str_Posicao[19];

     //*** Transforma a 1a. Letra ***

     If Posicao[8] = 'A' Then
        Begin
        Posicao[8] := '01';
        End
     Else If Posicao[8] = 'B' Then
        Begin
        Posicao[8] := '02';
        End
     Else If Posicao[8] = 'C' Then
        Begin
        Posicao[8] := '03';
        End
     Else If Posicao[8] = 'D' Then
        Begin
        Posicao[8] := '04';
        End
     Else If Posicao[8] = 'E' Then
        Begin
        Posicao[8] := '05';
        End
     Else If Posicao[8] = 'F' Then
        Begin
        Posicao[8] := '06';
        End
     Else If Posicao[8] = 'G' Then
        Begin
        Posicao[8] := '07';
        End
     Else If Posicao[8] = 'H' Then
        Begin
        Posicao[8] := '08';
        End
     Else If Posicao[8] = 'I' Then
        Begin
        Posicao[8] := '09';
        End
     Else If Posicao[8] = 'J' Then
        Begin
        Posicao[8] := '10';
        End
     Else If Posicao[8] = 'K' Then
        Begin
        Posicao[8] := '11';
        End
     Else If Posicao[8] = 'L' Then
        Begin
        Posicao[8] := '12';
        End
     Else If Posicao[8] = 'M' Then
        Begin
        Posicao[8] := '13';
        End
     Else If Posicao[8] = 'N' Then
        Begin
        Posicao[8] := '14';
        End
     Else If Posicao[8] = 'O' Then
        Begin
        Posicao[8] := '15';
        End
     Else If Posicao[8] = 'P' Then
        Begin
        Posicao[8] := '16';
        End
     Else If Posicao[8] = 'Q' Then
        Begin
        Posicao[8] := '17';
        End
     Else If Posicao[8] = 'R' Then
        Begin
        Posicao[8] := '18';
        End
     Else If Posicao[8] = 'S' Then
        Begin
        Posicao[8] := '19';
        End
     Else If Posicao[8] = 'T' Then
        Begin
        Posicao[8] := '20';
        End
     Else If Posicao[8] = 'U' Then
        Begin
        Posicao[8] := '21';
        End
     Else If Posicao[8] = 'V' Then
        Begin
        Posicao[8] := '22';
        End
     Else If Posicao[8] = 'W' Then
        Begin
        Posicao[8] := '23';
        End
     Else If Posicao[8] = 'X' Then
        Begin
        Posicao[8] := '24';
        End
     Else If Posicao[8] = 'Y' Then
        Begin
        Posicao[8] := '25';
        End
     Else If Posicao[8] = 'Z' Then
        Begin
        Posicao[8] := '26';
     End;

     //*** Transforma a 2a. Letra ***

     If Posicao[9] = 'A' Then
        Begin
        Posicao[9] := '01';
        End
     Else If Posicao[9] = 'B' Then
        Begin
        Posicao[9] := '02';
        End
     Else If Posicao[9] = 'C' Then
        Begin
        Posicao[9] := '03';
        End
     Else If Posicao[9] = 'D' Then
        Begin
        Posicao[9] := '04';
        End
     Else If Posicao[9] = 'E' Then
        Begin
        Posicao[9] := '05';
        End
     Else If Posicao[9] = 'F' Then
        Begin
        Posicao[9] := '06';
        End
     Else If Posicao[9] = 'G' Then
        Begin
        Posicao[9] := '07';
        End
     Else If Posicao[9] = 'H' Then
        Begin
        Posicao[9] := '08';
        End
     Else If Posicao[9] = 'I' Then
        Begin
        Posicao[9] := '09';
        End
     Else If Posicao[9] = 'J' Then
        Begin
        Posicao[9] := '10';
        End
     Else If Posicao[9] = 'K' Then
        Begin
        Posicao[9] := '11';
        End
     Else If Posicao[9] = 'L' Then
        Begin
        Posicao[9] := '12';
        End
     Else If Posicao[9] = 'M' Then
        Begin
        Posicao[9] := '13';
        End
     Else If Posicao[9] = 'N' Then
        Begin
        Posicao[9] := '14';
        End
     Else If Posicao[9] = 'O' Then
        Begin
        Posicao[9] := '15';
        End
     Else If Posicao[9] = 'P' Then
        Begin
        Posicao[9] := '16';
        End
     Else If Posicao[9] = 'Q' Then
        Begin
        Posicao[9] := '17';
        End
     Else If Posicao[9] = 'R' Then
        Begin
        Posicao[9] := '18';
        End
     Else If Posicao[9] = 'S' Then
        Begin
        Posicao[9] := '19';
        End
     Else If Posicao[9] = 'T' Then
        Begin
        Posicao[9] := '20';
        End
     Else If Posicao[9] = 'U' Then
        Begin
        Posicao[9] := '21';
        End
     Else If Posicao[9] = 'V' Then
        Begin
        Posicao[9] := '22';
        End
     Else If Posicao[9] = 'W' Then
        Begin
        Posicao[9] := '23';
        End
     Else If Posicao[9] = 'X' Then
        Begin
        Posicao[9] := '24';
        End
     Else If Posicao[9] = 'Y' Then
        Begin
        Posicao[9] := '25';
        End
     Else If Posicao[9] = 'Z' Then
        Begin
        Posicao[9] := '26';
     End;

     //*** Transforma a 3a. Letra ***

     If Posicao[10] = 'A' Then
        Begin
        Posicao[10] := '01';
        End
     Else If Posicao[10] = 'B' Then
        Begin
        Posicao[10] := '02';
        End
     Else If Posicao[10] = 'C' Then
        Begin
        Posicao[10] := '03';
        End
     Else If Posicao[10] = 'D' Then
        Begin
        Posicao[10] := '04';
        End
     Else If Posicao[10] = 'E' Then
        Begin
        Posicao[10] := '05';
        End
     Else If Posicao[10] = 'F' Then
        Begin
        Posicao[10] := '06';
        End
     Else If Posicao[10] = 'G' Then
        Begin
        Posicao[10] := '07';
        End
     Else If Posicao[10] = 'H' Then
        Begin
        Posicao[10] := '08';
        End
     Else If Posicao[10] = 'I' Then
        Begin
        Posicao[10] := '09';
        End
     Else If Posicao[10] = 'J' Then
        Begin
        Posicao[10] := '10';
        End
     Else If Posicao[10] = 'K' Then
        Begin
        Posicao[10] := '11';
        End
     Else If Posicao[10] = 'L' Then
        Begin
        Posicao[10] := '12';
        End
     Else If Posicao[10] = 'M' Then
        Begin
        Posicao[10] := '13';
        End
     Else If Posicao[10] = 'N' Then
        Begin
        Posicao[10] := '14';
        End
     Else If Posicao[10] = 'O' Then
        Begin
        Posicao[10] := '15';
        End
     Else If Posicao[10] = 'P' Then
        Begin
        Posicao[10] := '16';
        End
     Else If Posicao[10] = 'Q' Then
        Begin
        Posicao[10] := '17';
        End
     Else If Posicao[10] = 'R' Then
        Begin
        Posicao[10] := '18';
        End
     Else If Posicao[10] = 'S' Then
        Begin
        Posicao[10] := '19';
        End
     Else If Posicao[10] = 'T' Then
        Begin
        Posicao[10] := '20';
        End
     Else If Posicao[10] = 'U' Then
        Begin
        Posicao[10] := '21';
        End
     Else If Posicao[10] = 'V' Then
        Begin
        Posicao[10] := '22';
        End
     Else If Posicao[10] = 'W' Then
        Begin
        Posicao[10] := '23';
        End
     Else If Posicao[10] = 'X' Then
        Begin
        Posicao[10] := '24';
        End
     Else If Posicao[10] = 'Y' Then
        Begin
        Posicao[10] := '25';
        End
     Else If Posicao[10] = 'Z' Then
        Begin
        Posicao[10] := '26';
     End;

     //*** Efetua o Cálculo da Licença ***

     Posicao_Nro[0]  := Int(((StrToInt(Posicao[0]) / 7) * 100));
     Posicao_Nro[1]  := Int((StrToInt(Posicao[1]) / 7) * 100);
     Posicao_Nro[2]  := Int((StrToInt(Posicao[2]) / 7) * 100);
     Posicao_Nro[3]  := Int((StrToInt(Posicao[3]) / 7) * 100);
     Posicao_Nro[4]  := Int((StrToInt(Posicao[4]) / 7) * 100);
     Posicao_Nro[5]  := Int((StrToInt(Posicao[5]) / 7) * 100);
     Posicao_Nro[6]  := Int((StrToInt(Posicao[6]) / 7) * 100);
     Posicao_Nro[7]  := Int((StrToInt(Posicao[7]) / 7) * 100);
     Posicao_Nro[8]  := Int((StrToInt(Posicao[8]) / 7) * 100);
     Posicao_Nro[9]  := Int((StrToInt(Posicao[9]) / 7) * 100);
     Posicao_Nro[10] := Int((StrToInt(Posicao[10]) / 7) * 100);

     Calculo_1 := FloatToStr(Posicao_Nro[0]) + FloatToStr(Posicao_Nro[1]) + FloatToStr(Posicao_Nro[2]) + FloatToStr(Posicao_Nro[3]);
     Calculo_2 := FloatToStr(Posicao_Nro[4]) + FloatToStr(Posicao_Nro[5]) + FloatToStr(Posicao_Nro[6]) + FloatToStr(Posicao_Nro[7]);
     Calculo_3 := FloatToStr(Posicao_Nro[8]) + FloatToStr(Posicao_Nro[9]) + FloatToStr(Posicao_Nro[10]);

     Licenca   := FloatToStr((StrToFloat(Calculo_1) * 5)) + FloatToStr((StrToFloat(Calculo_3) * 5)) + FloatToStr((StrToFloat(Calculo_2) * 5));

     //*** Carrega a Connexão da Estação Local ***

     conexaoBD.SQL_Comunitario.Close;
     conexaoBD.SQL_Comunitario.SQL.Clear;
     conexaoBD.SQL_Comunitario.SQL.Add('SELECT TABLE_SCHEMA, TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ' +#39+ 'mgt_managertex_w' +#39+ ' AND TABLE_NAME = ' +#39+ 'mgt_envios' +#39);
     conexaoBD.SQL_Comunitario.Open;

     If conexaoBD.SQL_Comunitario.RecordCount > 0 Then
        Begin
        conexaoBD.SQL_Licencas.Close;
        conexaoBD.SQL_Licencas.SQL.Clear;
        conexaoBD.SQL_Licencas.SQL.Add('Select * from mgt_envios where mgt_envio_licenca = ' + #39 + Trim(Licenca) + #39 );
        conexaoBD.SQL_Licencas.Open;

        If conexaoBD.SQL_Licencas.RecordCount > 0 Then
           Begin
           Retorno := True;
           End
        Else
           Begin
           Retorno := False;
        End;

        conexaoBD.SQL_Licencas.Close;
        End
     Else
        Begin
        Retorno := False;
     End;

     conexaoBD.SQL_Comunitario.Close;

     Verifica_Registro := Retorno;
end;

//******************
//*** Procedures ***
//******************

procedure TEnviaNFe.Procurar();
begin
     Ampulheta();

     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;

     If Trim(Dados_Procura.Text) <> '' Then
        Begin

        If Opcoes_Procura.Text = 'Nro.NF-e' Then
           Begin
           ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') AND mgt_nota_fiscal_numero = ' + Trim(Dados_Procura.Text) + ' Order By mgt_nota_fiscal_numero Desc');
           End
        Else If Opcoes_Procura.Text = 'Cliente' Then
           Begin
           ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') AND mgt_nota_fiscal_razao_social Like '  +#39+'%'+ Trim(Dados_Procura.Text) +'%'+#39+ ' Order By mgt_nota_fiscal_numero Desc');
        End;

        End
     Else
        Begin

        If Opcoes_Procura.Text = 'Nro.NF-e' Then
           Begin
           ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') Order By mgt_nota_fiscal_numero Desc');
           End
        Else If Opcoes_Procura.Text = 'Cliente' Then
           Begin
           ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') Order By mgt_nota_fiscal_numero Desc');
        End;

     End;

     ConexaoBD.SQL_Pedidos.Open;

     Seta();
end;

procedure TEnviaNFe.Envia_Email(Selecionado: String);

var
   Nro_Nota_Str, Anexo_DANFE, Anexo_XML, Palavra_Procurada, Ler_Linha: String;
   Nro_Nota, I: Integer;
   Encontrou_DANFE, Encontrou_XML, Enviar: Boolean;
   Arq_TXT: TextFile;
   SR: TSearchRec;

begin
     Ampulheta();

     Encontrou_DANFE := False;
     Encontrou_XML   := False;
     Enviar          := True;
     Email_Enviado   := True;

     IdMessage.MessageParts.Clear;

     //*** Seleciona as Opções de Envio ***
     ConexaoBD.SQL_Envio.Close;
     ConexaoBD.SQL_Envio.SQL.Clear;
     ConexaoBD.SQL_Envio.SQL.Add('Select * from mgt_envios');
     ConexaoBD.SQL_Envio.Open;

     IdSMTP.Host     := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_smtp').Text);
     IdSMTP.Username := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_user').Text);
     IdSMTP.Password := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_pass').Text);

     IdMessage.From.Address := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_address').Text);
     IdMessage.From.Name    := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_name').Text);
     IdMessage.From.Text    := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_text').Text);

     //*** Seleciona as Opções de Envio ***
     ConexaoBD.SQL_Empresa.Close;
     ConexaoBD.SQL_Empresa.SQL.Clear;
     ConexaoBD.SQL_Empresa.SQL.Add('Select * from mgt_empresas');
     ConexaoBD.SQL_Empresa.Open;

     //*** Prepara o Envio do E-Mail ***
     If Trim(Email_Destino) <> '' Then
        Begin
        IdMessage.Recipients.EMailAddresses := Trim(Email_Destino);
        End
     Else
        Begin
        IdMessage.Recipients.EMailAddresses := Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_email').Text);
     End;

     Email_Destino := '';

     IdMessage.CCList.EMailAddresses := '';
     IdMessage.BccList.EMailAddresses := '';
     IdMessage.Priority := mpNormal;
     IdMessage.Subject := Trim(ConexaoBD.SQL_Empresa.FieldByName('mgt_empresa_nome_fantasia').Text) + ' - Envio da NF-e: ' + Trim(DBGrid_Pedidos.Fields[0].Text);

     //*** Obtem o Número da Nota para Anexar o Arquivo ***
     Nro_Nota := StrToInt( Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_numero').Text) );

     If Nro_Nota > 0 Then
        Begin

        //*** Anexa o DANFE ***
        Anexo_DANFE := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_danfe').Text) + '\' + Trim(IntToStr(Nro_Nota)) + '.pdf';

        If FileExists(Anexo_DANFE) Then
           Begin
           TIdAttachment.create(IdMessage.MessageParts, TFileName(Anexo_DANFE));
           Encontrou_DANFE := True;
           End
        Else
           Begin
           Encontrou_DANFE := False;
        End;

        //*** Anexa o XML ***
        Palavra_Procurada := '<nNF>' + Trim(IntToStr(Nro_Nota)) + '</nNF>';

        I := FindFirst(Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\*.xml', faAnyFile, SR);

        While I = 0 do
              Begin
              If (SR.Attr and faDirectory) <> faDirectory Then
                 Begin

                 Anexo_XML := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\' + SR.Name;
                 AssignFile(Arq_TXT,Anexo_XML);
                 Reset(Arq_TXT);
                 Readln(Arq_TXT, Ler_Linha);

                 If ( Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) ) > 0 ) Then
                    Begin
                    TIdAttachment.create(IdMessage.MessageParts, TFileName(Anexo_XML));
                    Encontrou_XML := True;
                    CloseFile(Arq_TXT);
                    Break;
                    End
                 Else
                    Begin
                    CloseFile(Arq_TXT);
                 End;
              End;
              I := FindNext(SR);
        End;

        //*** Anexa o Cancelamento da Nota XML ***
        Palavra_Procurada := '<idLote>' + Trim(IntToStr(Nro_Nota)) + '</idLote>';

        I := FindFirst(Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\*.xml', faAnyFile, SR);

        While I = 0 do
              Begin
              If (SR.Attr and faDirectory) <> faDirectory Then
                 Begin

                 Anexo_XML := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\' + SR.Name;
                 AssignFile(Arq_TXT,Anexo_XML);
                 Reset(Arq_TXT);
                 Readln(Arq_TXT, Ler_Linha);

                 If ( Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) ) > 0 ) Then
                    Begin
                    TIdAttachment.create(IdMessage.MessageParts, TFileName(Anexo_XML));
                    Encontrou_XML := True;
                    CloseFile(Arq_TXT);
                    Break;
                    End
                 Else
                    Begin
                    CloseFile(Arq_TXT);
                 End;
              End;
              I := FindNext(SR);
        End;
     End;

     IdMessage.Body.Clear;
     If Encontrou_DANFE And Encontrou_XML Then
        Begin
        IdMessage.Body.Add('Segue anexo o DANFE e XML da Nota Fiscal Eletrônica.');
        End
     Else If Encontrou_DANFE Then
        Begin
        IdMessage.Body.Add('Segue anexo o DANFE da Nota Fiscal Eletrônica.');
        End
     Else If Encontrou_XML Then
        Begin
        IdMessage.Body.Add('Segue anexo o XML da Nota Fiscal Eletrônica.');
        End
     Else
        Begin
        IdMessage.Body.Add('Sua Nota Fiscal Eletrônica foi gerada.');
        //Enviar := False;
     End;

     If Enviar Then
        Begin
        IdSMTP.Connect;

        Try
           Try
              IdSMTP.Send(IdMessage);
           Except
              Email_Enviado := False;
              MSG_Erro('NF-e: ' + Trim(DBGrid_Pedidos.Fields[0].Text) + ' erro de envio, por favor verifique!!!');
           End;
        Finally
           IdSMTP.Disconnect;
        End;

        //*** Alteração do Status ***

        If Email_Enviado = True Then
           Begin
           ConexaoBD.SQL_Comunitario.SQL.Clear;
           ConexaoBD.SQL_Comunitario.SQL.Add('Update mgt_notas_fiscais Set mgt_nota_fiscal_status_envio = '+#39+ 'Enviado' +#39+ ' Where mgt_nota_fiscal_numero = ' + Trim(Selecionado) );
           ConexaoBD.SQL_Comunitario.ExecSQL;
        End;
     End;

     Seta();
end;

procedure TEnviaNFe.Envio_Automatico();

var
   Selecionado: String;

begin
     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;
     ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') AND mgt_nota_fiscal_status_envio <> ' +#39+ 'Enviado' +#39+ ' Order By mgt_nota_fiscal_numero Desc');
     ConexaoBD.SQL_Pedidos.Open;

     DBGrid_Pedidos.Refresh;

     ConexaoBD.SQL_Pedidos.First;

     While NOT ConexaoBD.SQL_Pedidos.Eof Do
           Begin

           Selecionado := ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_numero').Text;

           //*** Seleciona o Cliente ***
           If Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_email').Text) <> '' Then
              Begin
              Email_Destino := '';
              Envia_Email(Selecionado);
           End;

           ConexaoBD.SQL_Pedidos.Next;
     End;

     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;
     ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') AND mgt_nota_fiscal_status_envio <> ' +#39+ 'Enviado' +#39+ ' Order By mgt_nota_fiscal_numero Desc');
     ConexaoBD.SQL_Pedidos.Open;

     DBGrid_Pedidos.Refresh;    
end;

procedure TEnviaNFe.BT_SairClick(Sender: TObject);
begin
     Ampulheta();

     ConexaoBD.Conexao_Principal.Connected  := False;
     ConexaoBD.Conexao_Principal.Close;

     Seta();

     EnviaNFe.Close;
end;

procedure TEnviaNFe.BT_SobreClick(Sender: TObject);
begin
     Application.CreateForm(TSobre00,Sobre00);
     Sobre00.ShowModal;
     Sobre00.Destroy;
end;

procedure TEnviaNFe.FormShow(Sender: TObject);
begin
      If Verifica_Registro() Then
        Begin
        ConexaoBD.Conexao_Principal.Connected := True;

        //*** INICIO - Efetua o Ajuste do Ano 0010 para 2010 ***

        //*** 2010 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2010'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0010-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0010-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2010'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0010-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0010-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2010'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0010-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0010-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** 2011 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2011'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0011-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0011-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2011'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0011-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0011-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2011'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0011-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0011-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** 2012 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2012'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0012-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0012-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2012'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0012-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0012-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2012'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0012-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0012-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** 2013 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2013'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0013-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0013-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2013'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0013-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0013-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2013'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0013-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0013-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** 2014 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2014'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0014-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0014-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2014'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0014-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0014-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2014'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0014-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0014-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** 2015 ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data = concat('+#39+'2015'+#39+',substr(mgt_nota_fiscal_data,5,6)) where mgt_nota_fiscal_data >= '+#39+'0015-01-01'+#39+' and mgt_nota_fiscal_data <= '+#39+'0015-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_entrega = concat('+#39+'2015'+#39+',substr(mgt_nota_fiscal_data_entrega,5,6)) where mgt_nota_fiscal_data_entrega >= '+#39+'0015-01-01'+#39+' and mgt_nota_fiscal_data_entrega <= '+#39+'0015-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('update mgt_notas_fiscais set mgt_nota_fiscal_data_emissao = concat('+#39+'2015'+#39+',substr(mgt_nota_fiscal_data_emissao,5,6)) where mgt_nota_fiscal_data_emissao >= '+#39+'0015-01-01'+#39+' and mgt_nota_fiscal_data_emissao <= '+#39+'0015-12-31'+#39+';');
        ConexaoBD.SQL_Comunitario.ExecSQL;

        //*** FINAL - Efetua o Ajuste do Ano 0010 para 2010 ***

        If Trim(Dados_Procura.Text) <> '' Then
           Begin
           Procurar();
           End
        Else
           Begin
           ConexaoBD.SQL_Pedidos.Close;
           ConexaoBD.SQL_Pedidos.SQL.Clear;
           ConexaoBD.SQL_Pedidos.SQL.Add('Select * from mgt_notas_fiscais WHERE (mgt_nota_fiscal_finalidade = '+#39+'PRD'+#39+' OR mgt_nota_fiscal_finalidade = '+#39+'SRV'+#39+') Order By mgt_nota_fiscal_numero Desc');
           ConexaoBD.SQL_Pedidos.Open;
        End;

        If Opc_Automatica.Checked Then
           Begin
           Intervalo_Envio.Enabled := True;
           Envio_Automatico();
        End;

        End
      Else
        Begin
        MSG_Erro('Este Sistema não está autorizado a Funcionar neste Equipamento.'+Chr(13)+Chr(10)+Chr(13)+Chr(10)+'Entre em Contato com:'+Chr(13)+Chr(10)+Chr(13)+Chr(10)+'Datatex Informática e Serviços Ltda'+Chr(13)+Chr(10)+'Fone: (0xx11) 2896-4707'+Chr(13)+Chr(10)+'E-Mail: sistemas@datatex.com.br'+Chr(13)+Chr(10)+Chr(13)+Chr(10)+'Seu Número de Registro é: ' + Trim(Posicao_1.Text));
        EnviaNFe.Close;
      End;
end;

procedure TEnviaNFe.FormCreate(Sender: TObject);
begin
     //*** Trabalha com o Ano de 4 Dígitos ***
     ShortDateFormat := 'dd/mm/yyyy';

     //*** Formata da Data conforme o Padrão Desejado ***
     ShortTimeFormat := 'hh:mm:ss';
end;

procedure TEnviaNFe.BT_ProcurarClick(Sender: TObject);
begin
     Procurar();
end;

procedure TEnviaNFe.DBGrid_PedidosDrawColumnCell(Sender: TObject;
  const Rect: TRect; DataCol: Integer; Column: TColumn;
  State: TGridDrawState);
begin
     If (Trim(DBGrid_Pedidos.Fields[6].Text) = 'Enviado') Then
        Begin
        DBGrid_Pedidos.Canvas.Brush.Color := clMoneyGreen;
        End
     Else
        Begin
        DBGrid_Pedidos.Canvas.Brush.Color := clRed;
     End;

     DBGrid_Pedidos.DefaultDrawDataCell(Rect, DBGrid_Pedidos.columns[datacol].field, State);
end;

procedure TEnviaNFe.DBGrid_PedidosCellClick(Column: TColumn);

var
   Selecionado: String;

begin
    If DBGrid_Pedidos.Fields[0].Text <> '' Then
       Begin

       Selecionado := DBGrid_Pedidos.Fields[0].Text;

       //*** Seleciona o Cliente ***
       If Confirma('Envia o E-Mail da NF-e?' + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'Para: ' + Trim(DBGrid_Pedidos.Fields[2].Text) + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'Referente a NF-e: ' + Trim(DBGrid_Pedidos.Fields[0].Text) + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'E-Mail de Destino: ' + Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_email').Text) ) = 6 Then
          Begin
          Email_Destino := Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_email').Text);

          repeat
                Email_Destino := InputBox('E-Mail', 'Por favor, confirme o E-Mail para envio:', Email_Destino);
          until Email_Destino <> '';

          Envia_Email(Selecionado);
          Procurar();

          If Email_Enviado = True Then
             Begin
             Application.MessageBox('Email enviado com sucesso!', 'Confirmação', MB_ICONINFORMATION + MB_OK);
          End;
       End;

       ConexaoBD.SQL_Pedidos.Locate('mgt_nota_fiscal_numero',Trim(Selecionado),[]);
    End;
end;

procedure TEnviaNFe.Intervalo_EnvioTimer(Sender: TObject);
begin
     Envio_Automatico();
end;

procedure TEnviaNFe.Opc_ManualClick(Sender: TObject);
begin
     Intervalo_Envio.Enabled := False;
     Procurar();
end;

procedure TEnviaNFe.Opc_AutomaticaClick(Sender: TObject);
begin
     Intervalo_Envio.Enabled := True;
     Envio_Automatico();
end;

procedure TEnviaNFe.ListarArquivosXML(Diretorio: string; Sub:Boolean);
var
  F: TSearchRec;
  Ret: Integer;
  TempNome: string;
begin
  Ret := FindFirst(Diretorio+'\*.xml', faAnyFile, F);
  try
    while Ret = 0 do
      begin
        if TemAtributo(F.Attr, faDirectory) then
          begin
            if (F.Name <> '.') And (F.Name <> '..') then
              if Sub = True then
                begin
                  TempNome := Diretorio+'\' + F.Name;
                  ListarArquivosXML(TempNome, True);
                end;
          end
        else
          begin
            Arquivo_Sequencia := Arquivo_Sequencia + 1;
            Arquivos_Localizados[Arquivo_Sequencia] := Diretorio+'\'+F.Name;
          end;
        //
        Ret := FindNext(F);
      end;
  finally
    begin
      FindClose(F);
    end;
  end;
end;

procedure TEnviaNFe.BT_OrganizarClick(Sender: TObject);

var
   Caminho_IMP, Caminho_XML, Caminho_DANFE, Arquivo_Tratado, Nome_Arquivo_XML, Nome_Arquivo_DANFE: String;
   Pasta_Ano, Pasta_Mes: String;
   Palavra_Procurada, Arquivo_XML, Ler_Linha: String;
   Posicao_Procura: Integer;
   Arq_TXT: TextFile;

   SR: TSearchRec;
   I: integer;

begin
   If Confirma('ATENÇÃO: Só clique em "Organizar XML" se todas as suas Notas Fiscais já foram emitidas e se todos os seus XMLs já tiverem sido enviados aos E-Mails de seus Clientes.'+#13+#10+#13+#10+'Ao Clicar em "Organizar XML" os XMLs não poderão mais serem enviados aos E-Mails de seus Clientes e Todos os Aquivos de Importação (.IMP) serão apagados.'+#13+#10+#13+#10+'Deseja continuar com a Organização de XMLs?') = 6 Then
      Begin

      //************************************
      //*** Apaga todos os Arquivos .IMP ***
      //************************************

      //*** Seleciona as Opções da Empresa ***
      ConexaoBD.SQL_Empresa.Close;
      ConexaoBD.SQL_Empresa.SQL.Clear;
      ConexaoBD.SQL_Empresa.SQL.Add('Select * from mgt_empresas');
      ConexaoBD.SQL_Empresa.Open;

      Caminho_IMP := Trim(ConexaoBD.SQL_Empresa.FieldByName('mgt_empresa_caminho_importacao').Text);

      //*** Apaga os Arquivos .IMP ***

      I := FindFirst(Trim(Caminho_IMP) + '*.IMP', faAnyFile, SR);

      While I = 0 do
            Begin
            If (SR.Attr and faDirectory) <> faDirectory Then
               Begin
               If NOT DeleteFile(Trim(Caminho_IMP) + SR.Name) Then
                  Begin
                  ShowMessage('Não foi possível excluir ' + Trim(Caminho_IMP) + SR.Name);
               End;
            End;
            I := FindNext(SR);
      End;

      //********************************************
      //*** Move os XMLs para as pastas Corretas ***
      //********************************************

      Arquivo_Sequencia := 0;

      //*** Inicia a Organização dos XMLs e DANFEs ***

      //*** Seleciona as Opções de Envio ***
      ConexaoBD.SQL_Envio.Close;
      ConexaoBD.SQL_Envio.SQL.Clear;
      ConexaoBD.SQL_Envio.SQL.Add('Select * from mgt_envios');
      ConexaoBD.SQL_Envio.Open;

      Caminho_XML   := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text);
      Caminho_DANFE := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_danfe').Text);

      ListarArquivosXML(Caminho_XML, False);

      Arquivo_Tratado := 'Iniciar Tratamento';

      Arquivo_Sequencia := 0;

      While Trim(Arquivo_Tratado) <> '' Do
         Begin
         Arquivo_Sequencia := Arquivo_Sequencia + 1;

         Arquivo_Tratado := Arquivos_Localizados[Arquivo_Sequencia];

         If Trim(Arquivo_Tratado) <> '' Then
            Begin

            //*** Localiza as Datas de Emissões ***
            
            //*** NFe ***
            //*** Procura pela Data de Emissão da NFe ***
            //*** Exemplo de como a Informação se encontra no XML: <dEmi>2012-12-26</dEmi> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dEmi>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('NFE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, (Pos('NFE_', UpperCase(Trim(Arquivo_Tratado))) + 4), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFE_', UpperCase(Trim(Arquivo_Tratado)))) - 4)) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 6),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 11),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** NFe Contingencia ***
            //*** Procura pela Data de Emissão da NFe Contingencia ***
            //*** Exemplo de como a Informação se encontra no XML: <dEmi>2012-12-26</dEmi> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dEmi>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('NFE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, (Pos('NFE_', UpperCase(Trim(Arquivo_Tratado))) + 4), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFE_', UpperCase(Trim(Arquivo_Tratado)))) - 4)) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 6),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 11),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** NFSe ***
            //*** Procura pela Data de Emissão da NFSe ***
            //*** Exemplo de como a Informação se encontra no XML: <DataEmissao>2011-04-27T00:00:00</DataEmissao> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<DataEmissao>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('NFSE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFSE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, Pos('NFSE_', UpperCase(Trim(Arquivo_Tratado))), (Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('NFSE_', UpperCase(Trim(Arquivo_Tratado))))) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 13),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 18),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** CCe ***
            //*** Procura pela Data de Emissão da CCe ***
            //*** Exemplo de como a Informação se encontra no XML: <dhEvento>2011-11-25T16:42:26-03:00</dhEvento> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dhEvento>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('CCE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CCE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, Pos('CCE_', UpperCase(Trim(Arquivo_Tratado))), (Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CCE_', UpperCase(Trim(Arquivo_Tratado))))) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 10),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 15),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** Cancelamento de NFe ***
            //*** Procura pela Data de Emissão da Cancelamento de NFe ***
            //*** Exemplo de como a Informação se encontra no XML: <dhRegEvento>2013-04-04T16:47:07-03:00</dhRegEvento> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dhRegEvento>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  //Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))), (Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))))) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 13),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 18),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  //If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                  //   Begin
                  //   Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  //End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** Inutilização de NFe ***
            //*** Procura pela Data de Emissão da Inutilização da NFe ***
            //*** Exemplo de como a Informação se encontra no XML: <dhRecbto>2013-04-04T16:47:07-03:00</dhRecbto> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dhRecbto>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('INUTNFE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('INUTNFE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  //Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, Pos('INUTNFE_', UpperCase(Trim(Arquivo_Tratado))), (Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('INUTNFE_', UpperCase(Trim(Arquivo_Tratado))))) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 10),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 15),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  //If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                  //   Begin
                  //   Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  //End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

            //*** Cancelamento de NFe ***
            //*** Procura pela Data de Emissão da Cancelamento de NFe ***
            //*** Exemplo de como a Informação se encontra no XML: <dhRecbto>2011-01-05T09:14:14</dhRecbto> ***

            If FileExists(Trim(Arquivo_Tratado)) Then
               Begin
               Palavra_Procurada := '<dhRecbto>';

               Arquivo_XML := Trim(Arquivo_Tratado);
               AssignFile(Arq_TXT,Arquivo_XML);
               Reset(Arq_TXT);
               Readln(Arq_TXT, Ler_Linha);
               Posicao_Procura := Pos( UpperCase(Palavra_Procurada), UpperCase(Ler_Linha) );

               If ( Posicao_Procura > 0 ) Then
                  Begin
                  //*** Separa o Nome do Arquivo do Diretório ***

                  Nome_Arquivo_XML   := Trim(Copy(Arquivo_Tratado, Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))), ((Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado)))) + 4)));
                  //Nome_Arquivo_DANFE := Trim(Copy(Arquivo_Tratado, Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))), (Pos('.XML', UpperCase(Trim(Arquivo_Tratado))) - Pos('CANCNFE_', UpperCase(Trim(Arquivo_Tratado))))) + '.pdf');

                  //*** Separa o Nome das Pastas ***

                  Pasta_Ano := Copy(Ler_Linha,(Posicao_Procura + 10),4);
                  Pasta_Mes := Copy(Ler_Linha,(Posicao_Procura + 15),2);
                  CloseFile(Arq_TXT);

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes)) Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes));
                  End;

                  If Not DirectoryExists(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE') Then
                     Begin
                     CreateDir(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE');
                  End;

                  If FileExists(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML) Then
                     Begin
                     Movefile(PChar(Trim(Caminho_XML) + '\' + Nome_Arquivo_XML), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\' + Nome_Arquivo_XML));
                  End;

                  //If FileExists(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE) Then
                  //   Begin
                  //   Movefile(PChar(Trim(Caminho_XML) + '\DANFE\' + Nome_Arquivo_DANFE), PChar(Trim(Caminho_XML) + '\' + Trim(Pasta_Ano) + '\' + Trim(Pasta_Mes) + '\DANFE\' + Nome_Arquivo_DANFE));
                  //End;

                  End
               Else
                  Begin
                  CloseFile(Arq_TXT);
               End;
            End;

         End;
      End;

      MSG_Erro('Organização dos Arquivos XML foi Concluída com Sucesso!!!');
   End;
end;

end.
