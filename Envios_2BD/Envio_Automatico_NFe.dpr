program Envio_Automatico_NFe;

uses
  Forms,
  Dialogs,
  SysUtils,
  Windows,
  Envia_NFe in 'Envia_NFe.pas' {EnviaNFe},
  Conexao_BD in 'Conexao_BD.pas' {ConexaoBD: TDataModule},
  Rotinas_Gerais in 'Rotinas_Gerais.pas',
  Sobre_00 in 'Sobre_00.pas' {Sobre00};

{$R *.res}

begin

  //*** Permite Apenas Uma Instância do Aplicativo ***

  CreateMutex(nil, false, 'Envio_Automatico_NFe');

  If GetLastError = ERROR_ALREADY_EXISTS Then
     Begin
     SendMessage(HWND_BROADCAST, RegisterWindowMessage('Envio_Automatico_NFe'), 0, 0);
     MessageDlg('O aplicativo de Envio Automático de E-Mails para a NF-e, já está sendo executado !!!', mtInformation, [mbOk], 0);
     End
  Else
     Begin
     Application.Initialize;
     Application.CreateForm(TEnviaNFe, EnviaNFe);
     Application.CreateForm(TConexaoBD, ConexaoBD);
     Application.Run;
  End;
  
end.
