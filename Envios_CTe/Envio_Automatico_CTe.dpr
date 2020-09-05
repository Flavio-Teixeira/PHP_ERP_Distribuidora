program Envio_Automatico_CTe;

uses
  Forms,
  Dialogs,
  SysUtils,
  Windows,
  Envia_CTe in 'Envia_CTe.pas' {EnviaCTe},
  Conexao_BD in 'Conexao_BD.pas' {ConexaoBD: TDataModule},
  Rotinas_Gerais in 'Rotinas_Gerais.pas',
  Sobre_00 in 'Sobre_00.pas' {Sobre00},
  Contabilidade_00 in 'Contabilidade_00.pas' {Contabilidade00};

{$R *.res}

begin

  //*** Permite Apenas Uma Inst�ncia do Aplicativo ***

  CreateMutex(nil, false, 'Envio_Automatico_CTe');

  If GetLastError = ERROR_ALREADY_EXISTS Then
     Begin
     SendMessage(HWND_BROADCAST, RegisterWindowMessage('Envio_Automatico_CTe'), 0, 0);
     MessageDlg('O aplicativo de Envio Autom�tico de E-Mails para a NF-e, j� est� sendo executado !!!', mtInformation, [mbOk], 0);
     End
  Else
     Begin
     Application.Initialize;
     Application.CreateForm(TEnviaCTe, EnviaCTe);
     Application.CreateForm(TConexaoBD, ConexaoBD);
     Application.Run;
  End;
  
end.
