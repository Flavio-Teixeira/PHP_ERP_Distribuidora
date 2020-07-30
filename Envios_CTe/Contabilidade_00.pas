unit Contabilidade_00;

interface

uses
  Windows, Messages, SysUtils, Variants, Classes, Graphics, Controls, Forms,
  Dialogs, StdCtrls, Buttons, IdMessage, IdBaseComponent, IdComponent,
  IdTCPConnection, IdTCPClient, IdMessageClient, IdSMTP;

type
  TContabilidade00 = class(TForm)
    GroupBox1: TGroupBox;
    GroupBox2: TGroupBox;
    Label1: TLabel;
    Mes: TEdit;
    Label2: TLabel;
    Ano: TEdit;
    BT_Sair: TBitBtn;
    BT_Gerar: TBitBtn;
    Label3: TLabel;
    LBL_Status: TLabel;
    Label4: TLabel;
    EMail_Contabilidade: TEdit;
    IdSMTP: TIdSMTP;
    IdMessage: TIdMessage;
    procedure BT_SairClick(Sender: TObject);
    procedure MesKeyPress(Sender: TObject; var Key: Char);
    procedure AnoKeyPress(Sender: TObject; var Key: Char);
    procedure BT_GerarClick(Sender: TObject);
    procedure EMail_ContabilidadeKeyPress(Sender: TObject; var Key: Char);
  private
    { Private declarations }
  public
    { Public declarations }
  end;

var
  Contabilidade00: TContabilidade00;

implementation

uses Rotinas_Gerais, Conexao_BD;

{$R *.dfm}

procedure TContabilidade00.BT_SairClick(Sender: TObject);
begin
     Contabilidade00.Close;
end;

procedure TContabilidade00.MesKeyPress(Sender: TObject;
  var Key: Char);
begin
     So_Numero(Sender, Key);

     If Key = #13 Then
        Begin
        Key := #0;
        Perform(WM_NEXTDLGCTL, 0, 0);
     End;
end;

procedure TContabilidade00.AnoKeyPress(Sender: TObject; var Key: Char);
begin
     So_Numero(Sender, Key);

     If Key = #13 Then
        Begin
        Key := #0;
        Perform(WM_NEXTDLGCTL, 0, 0);
     End;
end;

procedure TContabilidade00.BT_GerarClick(Sender: TObject);

var
   NFes: Array[1..1000] of String;
   AguardaTempo: Cardinal;
   Posicao, Ind, I: Integer;
   Anexo_XML, Ler_Linha, Palavra_Procurada, Arquivos_Anexar: String;
   Encontrou_XML: Boolean;
   Arq_TXT: TextFile;
   SR: TSearchRec;

begin
     Ampulheta();

     If Trim(Mes.Text) = '' Then
        Begin
        Mes.Text := '0';
     End;

     If Trim(Ano.Text) = '' Then
        Begin
        Ano.Text := '0';
     End;

     If Length(Trim(Mes.Text)) <= 1 Then
        Begin
        Mes.Text := '0' + Trim(Mes.Text);
     End;

     If ((((StrToInt(Mes.Text) >= 1) And (StrToInt(Mes.Text) <= 12))  And (StrToInt(Ano.Text) >= 2000)) And (Trim(EMail_Contabilidade.Text) <> '')) Then
        Begin

        Posicao       := 0;
        Encontrou_XML := False;

        //*** Seleciona as Opções de Envio da Empresa ***
        ConexaoBD.SQL_Empresa.Close;
        ConexaoBD.SQL_Empresa.SQL.Clear;
        ConexaoBD.SQL_Empresa.SQL.Add('Select * from mgt_empresas');
        ConexaoBD.SQL_Empresa.Open;

        //*** Seleciona as Opções de Envio do XML ***
        ConexaoBD.SQL_Envio.Close;
        ConexaoBD.SQL_Envio.SQL.Clear;
        ConexaoBD.SQL_Envio.SQL.Add('Select * from mgt_envios');
        ConexaoBD.SQL_Envio.Open;

        //*** Anexa o XML ***
        Palavra_Procurada := '<dhEmi>' + Trim(Ano.Text) + '-' + Trim(Mes.Text);

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
                    Posicao            := Posicao + 1;
                    Encontrou_XML      := True;
                    NFes[Posicao]      := TFileName(Anexo_XML);
                    LBL_Status.Caption := TFileName(SR.Name);
                    CloseFile(Arq_TXT);
                    End
                 Else
                    Begin
                    CloseFile(Arq_TXT);
                 End;
              End;
              I := FindNext(SR);
        End;

        //*** Compacta o XML para o Encio ***

        If Encontrou_XML = True Then
           Begin

           Arquivos_Anexar    := '';
           LBL_Status.Caption := 'Compactando';

           For Ind := 1 To Posicao Do
               Begin
               Arquivos_Anexar := Arquivos_Anexar + Trim(NFes[Ind]) + ' ';
           End;

           AguardaTempo := 1000 * Posicao;
           AguardaTempo := AguardaTempo + 3000;

           WinExec(Pchar(Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\rar.exe a ' + Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\MES_' + Trim(Mes.Text) + '_' + Trim(Ano.Text) + '.rar ' + Trim(Arquivos_Anexar)), SW_SHOW);
           Sleep(AguardaTempo);

           LBL_Status.Caption := 'Finalizado';

           //*** Anexa o Arquivo da Contabilidade ao E-Mail ***

           IdMessage.MessageParts.Clear;

           //*** Seleciona as Opções de Envio ***
           IdSMTP.Host     := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_smtp').Text);
           IdSMTP.Username := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_user').Text);
           IdSMTP.Password := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_host_pass').Text);

           IdMessage.From.Address := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_address').Text);
           IdMessage.From.Name    := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_name').Text);
           IdMessage.From.Text    := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_mess_text').Text);

           //*** Prepara o Envio do E-Mail ***
           If Trim(EMail_Contabilidade.Text) <> '' Then
              Begin
              IdMessage.Recipients.EMailAddresses := Trim(EMail_Contabilidade.Text);
              End
           Else
              Begin
              IdMessage.Recipients.EMailAddresses := Trim(ConexaoBD.SQL_Pedidos.FieldByName('mgt_nota_fiscal_email').Text);
           End;

           IdMessage.CCList.EMailAddresses := '';
           IdMessage.BccList.EMailAddresses := '';
           IdMessage.Priority := mpNormal;
           IdMessage.Subject := Trim(ConexaoBD.SQL_Empresa.FieldByName('mgt_empresa_nome_fantasia').Text) + ' - Envio das NF-e Referente ao Mês ' + Trim(Mes.Text) + ' de ' + Trim(Ano.Text);

           //*** Anexa o Arquivo Compactado ***
           Arquivos_Anexar := Trim(ConexaoBD.SQL_Envio.FieldByName('mgt_envio_caminho_xml').Text) + '\MES_' + Trim(Mes.Text) + '_' + Trim(Ano.Text) + '.rar';

           If FileExists(Arquivos_Anexar) Then
              Begin
              TIdAttachment.create(IdMessage.MessageParts, TFileName(Arquivos_Anexar));
           End;

           IdMessage.Body.Clear;
           IdMessage.Body.Add('Anexo NF-e Referente ao Mês ' + Trim(Mes.Text) + ' de ' + Trim(Ano.Text));
           IdSMTP.Connect;
           try
              IdSMTP.Send(IdMessage);
              Seta();
              MSG_Erro('E-Mail enviado para a Contabilidade !!!');
              Contabilidade00.Close;
           finally
              IdSMTP.Disconnect;
           end;

           Seta();

           End
        Else
           Begin
           Seta();
           MSG_Erro('Não foi encontrado nenhum XML para o período informado !!!');
        End;

        End
     Else
        Begin
        Seta();
        MSG_Erro('Por favor, informe corretamente o Mês, o Ano e o E-Mail para a Contabilidade !!!');
     End;
end;

procedure TContabilidade00.EMail_ContabilidadeKeyPress(Sender: TObject;
  var Key: Char);
begin
     If Key = #13 Then
        Begin
        Key := #0;
        Perform(WM_NEXTDLGCTL, 0, 0);
     End;
end;

end.
