unit Envia_CTe;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls, Buttons, Grids, DBGrids, IdMessage, IdBaseComponent,
  IdComponent, IdTCPConnection, IdTCPClient, IdMessageClient, IdSMTP,
  ExtCtrls, IdIOHandler, IdIOHandlerSocket;

type
  TEnviaCTe = class(TForm)
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
    Label3: TLabel;
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
    procedure Label3Click(Sender: TObject);
  private
    { Private declarations }
    function Verifica_Registro():Boolean;
    procedure Procurar();
    procedure Envia_Email(Selecionado: String);
    procedure Envio_Automatico();

  public
    { Public declarations }
  end;

var
  EnviaCTe: TEnviaCTe;
  Email_Destino: String;

implementation

uses Sobre_00, Conexao_BD, Rotinas_Gerais, Contabilidade_00;

{$R *.dfm}

//***************
//*** Funções ***
//***************

function TEnviaCTe.Verifica_Registro():Boolean;

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
     conexaoBD.SQL_Comunitario.SQL.Add('SELECT TABLE_SCHEMA, TABLE_NAME FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_SCHEMA = ' +#39+ 'mgt_managertex' +#39+ ' AND TABLE_NAME = ' +#39+ 'mgt_envios' +#39);
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

procedure TEnviaCTe.Procurar();

var
   Comando_SQL: String;

begin
     Ampulheta();

     Comando_SQL := 'SELECT  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_numero, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_modelo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_serie, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo_servico, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tomador, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_forma_pagto, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_cfop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_natureza_operacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_predominante, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_total_mercadoria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_total, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_situacao_tributaria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_percentual_reducao_bc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_bc_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_aliquota_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_outorgado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_observacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_rntrc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_lotacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_entrega, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_renavam, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_placa, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tara, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capkg, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capm3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_uf, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpprop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpveic, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tprod, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpcar, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_status_envio, ';
     Comando_SQL := Comando_SQL + 'mgt_cliente_email AS mgt_cte_email ';
     Comando_SQL := Comando_SQL + 'FROM  ';
     Comando_SQL := Comando_SQL + 'mgt_ctes, mgt_clientes ';
     Comando_SQL := Comando_SQL + 'WHERE  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo = mgt_cliente_codigo ';

     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;

     If Trim(Dados_Procura.Text) <> '' Then
        Begin

        If Opcoes_Procura.Text = 'Nro.CT-e' Then
           Begin
           Comando_SQL := Comando_SQL + 'AND mgt_cte_numero = ' + Trim(Dados_Procura.Text) + ' Order By mgt_cte_numero Desc';
           ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
           End
        Else If Opcoes_Procura.Text = 'Cliente' Then
           Begin
           Comando_SQL := Comando_SQL + 'AND mgt_cte_razao_social Like '  +#39+'%'+ Trim(Dados_Procura.Text) +'%'+#39+ ' Order By mgt_cte_numero Desc';
           ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
        End;

        End
     Else
        Begin

        If Opcoes_Procura.Text = 'Nro.CT-e' Then
           Begin
           Comando_SQL := Comando_SQL + ' Order By mgt_cte_numero Desc';
           ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
           End
        Else If Opcoes_Procura.Text = 'Cliente' Then
           Begin
           Comando_SQL := Comando_SQL + ' Order By mgt_cte_numero Desc';
           ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
        End;

     End;

     ConexaoBD.SQL_Pedidos.Open;

     Seta();
end;

procedure TEnviaCTe.Envia_Email(Selecionado: String);

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
        IdMessage.Recipients.EMailAddresses := Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_email').Text);
     End;

     Email_Destino := '';

     IdMessage.CCList.EMailAddresses := '';
     IdMessage.BccList.EMailAddresses := '';
     IdMessage.Priority := mpNormal;
     IdMessage.Subject := Trim(ConexaoBD.SQL_Empresa.FieldByName('mgt_empresa_nome_fantasia').Text) + ' - Envio da CT-e: ' + Trim(DBGrid_Pedidos.Fields[0].Text);

     //*** Obtem o Número da Nota para Anexar o Arquivo ***
     Nro_Nota := StrToInt( Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_numero').Text) );

     If Nro_Nota > 0 Then
        Begin

        //*** Anexa o DANFE ***
        Anexo_DANFE := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_danfe').Text) + '\CTe_' + Trim(IntToStr(Nro_Nota)) + '.pdf';

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
        Palavra_Procurada := '<nCT>' + Trim(IntToStr(Nro_Nota)) + '</nCT>';

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
        IdMessage.Body.Add('Segue anexo o DANFE e XML do Conhecimento de Transportes Eletrônico.');
        End
     Else If Encontrou_DANFE Then
        Begin
        IdMessage.Body.Add('Segue anexo o DANFE do Conhecimento de Transportes Eletrônico.');
        End
     Else If Encontrou_XML Then
        Begin
        IdMessage.Body.Add('Segue anexo o XML do Conhecimento de Transportes Eletrônico.');
        End
     Else
        Begin
        IdMessage.Body.Add('Seu do Conhecimento de Transportes Eletrônico foi gerada.');
        Enviar := False;
     End;

     If Enviar Then
        Begin
        IdSMTP.Connect;
        try
           IdSMTP.Send(IdMessage);
        finally
           IdSMTP.Disconnect;
        end;

        //*** Alteração do Status ***
        ConexaoBD.SQL_Comunitario.SQL.Clear;
        ConexaoBD.SQL_Comunitario.SQL.Add('Update mgt_ctes Set mgt_cte_status_envio = '+#39+ 'Enviado' +#39+ ' Where mgt_cte_numero = ' + Trim(Selecionado) );
        ConexaoBD.SQL_Comunitario.ExecSQL;
     End;

     Seta();
end;

procedure TEnviaCTe.Envio_Automatico();

var
   Selecionado, Comando_SQL: String;

begin
     Comando_SQL := 'SELECT  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_numero, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_modelo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_serie, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo_servico, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tomador, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_forma_pagto, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_cfop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_natureza_operacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_predominante, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_total_mercadoria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_total, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_situacao_tributaria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_percentual_reducao_bc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_bc_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_aliquota_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_outorgado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_observacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_rntrc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_lotacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_entrega, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_renavam, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_placa, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tara, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capkg, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capm3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_uf, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpprop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpveic, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tprod, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpcar, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_status_envio, ';
     Comando_SQL := Comando_SQL + 'mgt_cliente_email AS mgt_cte_email ';
     Comando_SQL := Comando_SQL + 'FROM  ';
     Comando_SQL := Comando_SQL + 'mgt_ctes, mgt_clientes ';
     Comando_SQL := Comando_SQL + 'WHERE  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo = mgt_cliente_codigo AND ';
     Comando_SQL := Comando_SQL + 'mgt_cte_status_envio <> ' +#39+ 'Enviado' +#39+ ' Order By mgt_cte_numero Desc';

     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;
     ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
     ConexaoBD.SQL_Pedidos.Open;

     DBGrid_Pedidos.Refresh;

     ConexaoBD.SQL_Pedidos.First;

     While NOT ConexaoBD.SQL_Pedidos.Eof Do
           Begin

           Selecionado := ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_numero').Text;

           //*** Seleciona o Cliente ***
           If Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_email').Text) <> '' Then
              Begin
              Email_Destino := '';
              Envia_Email(Selecionado);
           End;

           ConexaoBD.SQL_Pedidos.Next;
     End;

     Comando_SQL := 'SELECT  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_numero, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_modelo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_serie, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tipo_servico, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tomador, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_forma_pagto, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_cfop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_natureza_operacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_origem_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destino_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_remetente_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_razao_social, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_inscricao_estadual, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_fone, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_endereco, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_bairro, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cidade, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_estado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cep, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_pais, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_predominante, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_produto_total_mercadoria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_total, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_receber, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_situacao_tributaria, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_percentual_reducao_bc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_bc_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_aliquota_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_icms, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_valor_outorgado, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_1, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_2, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_4, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_5, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_6, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_7, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_8, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_9, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_chave_10, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_observacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_rntrc, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_lotacao, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_data_entrega, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_renavam, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_placa, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tara, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capkg, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_capm3, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_uf, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpprop, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpveic, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tprod, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_tpcar, ';
     Comando_SQL := Comando_SQL + 'mgt_cte_status_envio, ';
     Comando_SQL := Comando_SQL + 'mgt_cliente_email AS mgt_cte_email ';
     Comando_SQL := Comando_SQL + 'FROM  ';
     Comando_SQL := Comando_SQL + 'mgt_ctes, mgt_clientes ';
     Comando_SQL := Comando_SQL + 'WHERE  ';
     Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo = mgt_cliente_codigo AND ';
     Comando_SQL := Comando_SQL + 'mgt_cte_status_envio <> ' +#39+ 'Enviado' +#39+ ' Order By mgt_cte_numero Desc';

     ConexaoBD.SQL_Pedidos.Close;
     ConexaoBD.SQL_Pedidos.SQL.Clear;
     ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
     ConexaoBD.SQL_Pedidos.Open;

     DBGrid_Pedidos.Refresh;    
end;

procedure TEnviaCTe.BT_SairClick(Sender: TObject);
begin
     Ampulheta();

     ConexaoBD.Conexao_Principal.Connected  := False;
     ConexaoBD.Conexao_Principal.Close;

     Seta();

     EnviaCTe.Close;
end;

procedure TEnviaCTe.BT_SobreClick(Sender: TObject);
begin
     Application.CreateForm(TSobre00,Sobre00);
     Sobre00.ShowModal;
     Sobre00.Destroy;
end;

procedure TEnviaCTe.FormShow(Sender: TObject);

var
   Comando_SQL: String;
begin
      If Verifica_Registro() Then
        Begin
        ConexaoBD.Conexao_Principal.Connected := True;

        If Trim(Dados_Procura.Text) <> '' Then
           Begin
           Procurar();
           End
        Else
           Begin
           Comando_SQL := 'SELECT  ';
           Comando_SQL := Comando_SQL + 'mgt_cte_numero, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_modelo, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_serie, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tipo, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tipo_servico, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tomador, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_forma_pagto, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_cfop, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_natureza_operacao, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_origem_estado, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_origem_cidade, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destino_estado, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destino_cidade, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_codigo, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_razao_social, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_inscricao_estadual, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_fone, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_endereco, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_bairro, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cidade, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_estado, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_cep, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_remetente_pais, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_razao_social, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_inscricao_estadual, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_fone, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_endereco, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_bairro, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cidade, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_estado, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_cep, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_pais, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_predominante, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_1, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_1, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_2, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_2, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_4, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_4, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_5, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_5, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_6, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_6, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_7, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_7, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_8, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_8, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_9, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_9, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_quantidade_10, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_unidade_10, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_produto_total_mercadoria, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_1, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_1, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_2, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_2, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_4, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_4, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_5, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_5, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_6, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_6, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_7, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_7, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_8, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_8, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_9, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_9, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_10, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_10, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_total, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_servico_valor_receber, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_data_receber, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_situacao_tributaria, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_percentual_reducao_bc, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_valor_bc_icms, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_aliquota_icms, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_valor_icms, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_valor_outorgado, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_1, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_2, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_4, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_5, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_6, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_7, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_8, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_9, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_chave_10, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_observacao, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_rntrc, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_lotacao, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_data_entrega, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_renavam, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_placa, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tara, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_capkg, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_capm3, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_uf, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tpprop, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tpveic, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tprod, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_tpcar, ';
           Comando_SQL := Comando_SQL + 'mgt_cte_status_envio, ';
           Comando_SQL := Comando_SQL + 'mgt_cliente_email AS mgt_cte_email ';
           Comando_SQL := Comando_SQL + 'FROM  ';
           Comando_SQL := Comando_SQL + 'mgt_ctes, mgt_clientes ';
           Comando_SQL := Comando_SQL + 'WHERE  ';
           Comando_SQL := Comando_SQL + 'mgt_cte_destinatario_codigo = mgt_cliente_codigo ';
           Comando_SQL := Comando_SQL + 'Order By mgt_cte_numero Desc';

           ConexaoBD.SQL_Pedidos.Close;
           ConexaoBD.SQL_Pedidos.SQL.Clear;
           ConexaoBD.SQL_Pedidos.SQL.Add(Comando_SQL);
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
        EnviaCTe.Close;
      End;
end;

procedure TEnviaCTe.FormCreate(Sender: TObject);
begin
     //*** Trabalha com o Ano de 4 Dígitos ***
     ShortDateFormat := 'dd/mm/yyyy';

     //*** Formata da Data conforme o Padrão Desejado ***
     ShortTimeFormat := 'hh:mm:ss';
end;

procedure TEnviaCTe.BT_ProcurarClick(Sender: TObject);
begin
     Procurar();
end;

procedure TEnviaCTe.DBGrid_PedidosDrawColumnCell(Sender: TObject;
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

procedure TEnviaCTe.DBGrid_PedidosCellClick(Column: TColumn);

var
   Selecionado: String;

begin
    If DBGrid_Pedidos.Fields[0].Text <> '' Then
       Begin

       Selecionado := DBGrid_Pedidos.Fields[0].Text;

       //*** Seleciona o Cliente ***
       If Confirma('Envia o E-Mail da CT-e?' + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'Para: ' + Trim(DBGrid_Pedidos.Fields[2].Text) + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'Referente a CT-e: ' + Trim(DBGrid_Pedidos.Fields[0].Text) + Chr(13)+Chr(10)+Chr(13)+Chr(10) + 'E-Mail de Destino: ' + Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_email').Text) ) = 6 Then
          Begin
             Email_Destino := Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_cte_email').Text);

             repeat
                   Email_Destino := InputBox('E-Mail', 'Por favor, confirme o E-Mail para envio:', Email_Destino);
             until Email_Destino <> '';

             Envia_Email(Selecionado);
             Procurar();
             Application.MessageBox('Email enviado com sucesso!', 'Confirmação', MB_ICONINFORMATION + MB_OK);
       End;

       ConexaoBD.SQL_Pedidos.Locate('mgt_cte_numero',Trim(Selecionado),[]);
    End;
end;

procedure TEnviaCTe.Intervalo_EnvioTimer(Sender: TObject);
begin
     Envio_Automatico();
end;

procedure TEnviaCTe.Opc_ManualClick(Sender: TObject);
begin
     Intervalo_Envio.Enabled := False;
     Procurar();
end;

procedure TEnviaCTe.Opc_AutomaticaClick(Sender: TObject);
begin
     Intervalo_Envio.Enabled := True;
     Envio_Automatico();
end;

procedure TEnviaCTe.Label3Click(Sender: TObject);
begin
     Application.CreateForm(TContabilidade00,Contabilidade00);
     Contabilidade00.ShowModal;
     Contabilidade00.Destroy;
end;

end.
