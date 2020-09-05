unit Rotinas_Gerais;

interface

uses SysUtils, Forms, Windows, Messages, Variants, Classes, Graphics, Controls,
     Dialogs, Menus, ExtCtrls, StdCtrls, ComCtrls, TabNotBk, DB, DBTables,
     DBCtrls, Buttons;

// ******************
// ***** Funções ****
// ******************

function Subtrai_Data(Data_1, Data_2: String): String;

function MostraData:String;
function Data_Extenso: String;
function MSG_Erro(strTexto: String): Integer;
function Confirma(strTexto: String): Integer;
function Numero_HD(FDrive:String): String;
function Encripta_HD(FDrive:String): String;
function Ponto_Virgula(Valor: String): String;
function Virgula_Ponto(Valor: String): String;
function Valida_Data(StrData: String):Boolean;
function Inverte_Data(DT: String): String;
function Inverte_Data_Plus(DT, Formato, Separador: String): String;

function Valida_CPF(num_cpf: String): Boolean;
function Valida_CNPJ(xCNPJ: String):Boolean;

function Obtem_CFOP_Entrada(CFOP_Saida: String): String;
function Obtem_Nro_Estado(Estado: String): Integer;
function Obtem_Nro_Midia(Midia: String): Integer;

function Obtem_Nro_Emulsao(Emulsao: String): Integer;
function Obtem_Nro_Filme(Filme: String): Integer;
function Obtem_Nro_Plataforma(Plataforma: String): Integer;
function Obtem_Nro_Forma(Forma: String): Integer;

function Obtem_Nro_Preco_Em(Preco_Em: String): Integer;
function Obtem_Nro_Forma_Pagamento(Pagamento: String): Integer;
function Obtem_Nro_Pais(Pais: String): Integer;
function Obtem_Nro_Mes(Mes: String): Integer;
function Obtem_Nro_Antes_Traco(Texto: String): String;
function Obtem_Antes(Texto, Antes: String): String;
function Obtem_Depois_Traco(Texto: String): String;
function Obtem_Depois(Texto, Depois: String): String;
function Obtem_Nro_Tipo_Codigo(Tipo_Codigo: String): Integer;
function Obtem_Nro_Status_Credito(Status_Credito: String): Integer;
function Obtem_Nro_Tipo_Pessoa(Tipo_Pessoa: String): Integer;
function Obtem_Nro_Consignacao(Consignacao: String): Integer;
function Obtem_Nro_Opcao_Cobranca(Opcao_Cobranca: String): Integer;
function Obtem_Nro_Opcao_entrega(Opcao_Entrega: String): Integer;
function Obtem_Nro_Produto_Desconto(Desconto: String): Integer;
function Obtem_Nro_Produto_Pedido_Padrao(Padrao: String): Integer;
function Obtem_Nro_Tipo_Transporte(Tipo_Transporte: String): Integer;
function Obtem_Nro_Tipo_Faturamento(Tipo_Faturamento: String): Integer;
function Obtem_Nro_Tipo_Tabela(Tipo_Tabela: String): Integer;
function Obtem_Nro_Emite_Lote(Emite_Lote: String): Integer;
function Obtem_Nro_Consumo(Consumo: String): Integer;
function Obtem_Nro_Pgto_Frete(Pgto_Frete: String): Integer;

function Obtem_Nro_Tipo_Tabela_EMP(Empresa, Tipo_Tabela: String): Integer;

function Espacos(Qtde: Integer): String;
function Exibe_Nro_Impressao(Numero: String; Tamanho: Integer): String;
function Letra_Maiuscula(Texto: String): string;

function Gera_Zeros(Nro, Tamanho: Integer): string;
function Gera_Zeros_Str(Nro_Str: String; Tamanho: Integer): string;
function Gera_Espacos(Texto: String; Tamanho: Integer): string;
function Retira_Caracter(Texto, Caracter: String): string;
function Localiza_Caracter(Origem, Localiza: String): Boolean;
function Gera_Str_To_Nro_Int(Texto: String): Integer;

function Zera_Centavos(Valor: String): String;
function Zera_Centavos_Com_Sifrao(Valor: String): String;

function Troca_Caracter(Caracter, Troca, Texto: String): string;

// ******************
// *** Procedures ***
// ******************

procedure Seta();
procedure Ampulheta();

procedure So_Valor(Sender: TObject; var Key: Char);
procedure So_Numero(Sender: TObject; var Key: Char);
procedure So_Numero_Ponto(Sender: TObject; var Key: Char);
procedure So_Data(Sender: TObject; var Key: Char);
procedure So_Numero_Menos(Sender: TObject; var Key: Char);

procedure Abre_Conexao();
procedure Fecha_Conexao();

implementation

uses Conexao_BD, DateUtils;

// ***************
// *** Funções ***
// ***************

function Obtem_Nro_Pgto_Frete(Pgto_Frete: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Pgto_Frete: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Pgto_Frete[0] := 'Cliente';
     Relacao_Pgto_Frete[1] := 'Empresa';

     // Obtem o Número do Pgto do Frete no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Pgto_Frete[Ind] = Trim(Pgto_Frete)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Subtrai_Data(Data_1, Data_2: String): String;

var
   Data_Invertida_1, Data_Invertida_2: String;

begin
     If ((Trim(Data_1) <> '/  /') And (Trim(Data_1) <> '00/00/0000'))  And ((Trim(Data_2) <> '/  /') And (Trim(Data_2) <> '00/00/0000')) Then
        Begin
        Data_Invertida_1 := Inverte_Data_Plus(Data_1,'amd','');
        Data_Invertida_2 := Inverte_Data_Plus(Data_2,'amd','');

        If Trim(Data_Invertida_1) = '' Then
           Begin
           Data_Invertida_1 := '0';
        End;

        If Trim(Data_Invertida_2) = '' Then
           Begin
           Data_Invertida_2 := '0';
        End;

        Result := IntToStr(DaysBetween(StrToDate(Data_1),StrToDate(Data_2)));
        
        End
     Else
        Begin
        Result := '';
     End;
end;

function MostraData: String;

var
   dtHoje: TDateTime;
   intDiaSemana: Integer;
   strDiaSemana: String;

begin
     dtHoje := Date;
     intDiaSemana := DayOfWeek(dtHoje);
     case intDiaSemana of
          1: strDiaSemana := 'Domingo - ';
          2: strDiaSemana := 'Segunda-feira - ';
          3: strDiaSemana := 'Terça-feira - ';
          4: strDiaSemana := 'Quarta-feira - ';
          5: strDiaSemana := 'Quinta-feira - ';
          6: strDiaSemana := 'Sexta-feira - ';
          7: strDiaSemana := 'Sábado - ';
     end;
     Result := strDiaSemana + DateToStr(dtHoje);
end;

function Data_Extenso: String;

var
   dtHoje: TDateTime;
   intDiaSemana: Integer;
   strDiaSemana: String;
   intMesSemana: Integer;
   strMesSemana: String;

begin
     dtHoje := Date;
     intDiaSemana := DayOfWeek(dtHoje);
     case intDiaSemana of
          1: strDiaSemana := 'Domingo, ';
          2: strDiaSemana := 'Segunda-feira, ';
          3: strDiaSemana := 'Terça-feira, ';
          4: strDiaSemana := 'Quarta-feira, ';
          5: strDiaSemana := 'Quinta-feira, ';
          6: strDiaSemana := 'Sexta-feira, ';
          7: strDiaSemana := 'Sábado, ';
     end;

     intMesSemana := MonthOf(dtHoje);
     case intMesSemana of
          1: strMesSemana   := ' de Janeiro de ' + Copy(DateToStr(dtHoje),7,4);
          2: strMesSemana   := ' de Fevereiro de ' + Copy(DateToStr(dtHoje),7,4);
          3: strMesSemana   := ' de Março de ' + Copy(DateToStr(dtHoje),7,4);
          4: strMesSemana   := ' de Abril de ' + Copy(DateToStr(dtHoje),7,4);
          5: strMesSemana   := ' de Maio de ' + Copy(DateToStr(dtHoje),7,4);
          6: strMesSemana   := ' de Junho de ' + Copy(DateToStr(dtHoje),7,4);
          7: strMesSemana   := ' de Julho de ' + Copy(DateToStr(dtHoje),7,4);
          8: strMesSemana   := ' de Agosto de ' + Copy(DateToStr(dtHoje),7,4);
          9: strMesSemana   := ' de Setembro de ' + Copy(DateToStr(dtHoje),7,4);
          10: strMesSemana  := ' de Outubro de ' + Copy(DateToStr(dtHoje),7,4);
          11: strMesSemana  := ' de Novembro de ' + Copy(DateToStr(dtHoje),7,4);
          12: strMesSemana  := ' de Dezembro de ' + Copy(DateToStr(dtHoje),7,4);
     end;

     Result := strDiaSemana + Copy(DateToStr(dtHoje),0,2) + strMesSemana;
end;

function MSG_Erro(strTexto: String):Integer;
begin
     Result := Application.MessageBox(PChar(strTexto),'Atenção !!!',mb_OK+mb_IconExclamation);
end;

function Confirma(strTexto: String):Integer;
begin
     Result := Application.MessageBox(PChar(strTexto),'Confirmação',mb_YesNo+mb_DefButton2+mb_IconQuestion);
end;

function Numero_HD(FDrive:String): String;

var
    Serial:DWord;
    DirLen,Flags: DWord;
    DLabel : Array[0..11] of Char;

begin
     Try
        GetVolumeInformation(PChar(FDrive+':\'),dLabel,12,@Serial,DirLen,Flags,nil,0);
        Result := IntToHex(Serial,8);
        Except Result :='';
     end;
end;

function Encripta_HD(FDrive:String): String;

var
   Ind: Integer;
   Encriptado: String;

begin
     Encriptado := '*';
     For Ind := 1 To Length( Trim(FDrive) ) do
         begin
         if (FDrive[Ind] in ['0'..'9']) Then
            begin
            Encriptado := Encriptado +  Chr(Ord(FDrive[Ind]) - 22);
            end
         else
            begin
            Encriptado := Encriptado +  Chr(Ord(FDrive[Ind]) - 64);
         end;
     end;
     Encriptado := Encriptado + '*';

     Result := Encriptado;
end;

function Ponto_Virgula(Valor: String): String;

Var
   Ind: Integer;

begin
     If Length(Valor) > 0 then
        Begin
        for Ind := 0 to Length(Valor) do
            begin
            if Valor[Ind] = '.' then
               begin
               Valor[Ind] := ',';
            end;
        end;
        End
     Else
        Begin
        Valor := '0';
     End;

     Ponto_Virgula := Trim(Valor);
end;

function Virgula_Ponto(Valor: String): String;

Var
   Ind: Integer;

begin
     If Length(Valor) > 0 then
        Begin
        For Ind := 0 to Length(Valor) do
            begin
            if Valor[Ind] = ',' then
               begin
               Valor[Ind] := '.';
            end;
        End;
        End
     Else
        Begin
        Valor := '0';
     End;

     Virgula_Ponto := Trim(Valor);
end;

function Valida_Data(StrData: String):Boolean;
begin
     Result := True;
     try
        StrToDate(StrData);
     except
        on EConvertError do
           Result := False;
     end;
end;

function Inverte_Data(DT: String): String;

var
  Ano, Mes, Dia: Word;
  Str_Ano, Str_Mes, Str_Dia, Str_Data: String;

begin
     If Trim(DT) <> '' Then
        Begin
        DecodeDate(StrToDate(DT), Ano, Mes, Dia);

        Str_Ano := IntToStr(Ano);
        Str_Mes := IntToStr(Mes);
        Str_Dia := IntToStr(Dia);

        Str_Data := Trim(Str_Mes)+'/'+Trim(Str_Dia)+'/'+Trim(Str_Ano);
        End
     Else
        Begin
        Str_Data := '';
     End;

     Inverte_Data := Str_Data;
end;

function Inverte_Data_Plus(DT, Formato, Separador: String): String;

var
  Ano, Mes, Dia: Word;
  Str_Ano, Str_Mes, Str_Dia, Str_Data: String;

begin
     If ((Trim(DT) <> '') And (Trim(DT) <> '/  /')  And (Trim(DT) <> '00/00/0000')) Then
        Begin
        DecodeDate(StrToDate(DT), Ano, Mes, Dia);

        Str_Ano := IntToStr(Ano);
        Str_Mes := IntToStr(Mes);
        Str_Dia := IntToStr(Dia);

        If Length(Trim(Str_Mes)) <= 1 Then
           Begin
           Str_Mes := '0' + Str_Mes;
        End;

        If Length(Trim(Str_Dia)) <= 1 Then
           Begin
           Str_Dia := '0' + Str_Dia;
        End;

        If Formato = 'dma' Then
           Begin
           Str_Data := Trim(Str_Dia)+Trim(Separador)+Trim(Str_Mes)+Trim(Separador)+Trim(Str_Ano);
           End
        Else If Formato = 'amd' Then
           Begin
           Str_Data := Trim(Str_Ano)+Trim(Separador)+Trim(Str_Mes)+Trim(Separador)+Trim(Str_Dia);
           End
        Else If Formato = 'mda' Then
           Begin
           Str_Data := Trim(Str_Mes)+Trim(Separador)+Trim(Str_Dia)+Trim(Separador)+Trim(Str_Ano);
           End
        Else If Formato = 'mad' Then
           Begin
           Str_Data := Trim(Str_Mes)+Trim(Separador)+Trim(Str_Ano)+Trim(Separador)+Trim(Str_Dia);
        End;
        End
     Else
        Begin
        Str_Data := '';
     End;

     Inverte_Data_Plus := Str_Data;
end;

function Valida_CPF(num_cpf: String): Boolean;

var
   n1,n2,n3,n4,n5,n6,n7,n8,n9: Integer;
   d1,d2,Ind: Integer;
   num, digitado, calculado: String;

begin
     num := '';

     for Ind := 0 to Length(num_cpf) do
         begin
         if (num_cpf[Ind] = '0') or
            (num_cpf[Ind] = '1') or
            (num_cpf[Ind] = '2') or
            (num_cpf[Ind] = '3') or
            (num_cpf[Ind] = '4') or
            (num_cpf[Ind] = '5') or
            (num_cpf[Ind] = '6') or
            (num_cpf[Ind] = '7') or
            (num_cpf[Ind] = '8') or
            (num_cpf[Ind] = '9') then
            begin
            num := num + num_cpf[Ind];
         end;
     end;

     num := trim(num);

     if Length(num) = 1 then
        begin
        num := '0000000000' + num;
        end
     else if Length(num) = 2 then
        begin
        num := '000000000' + num;
        end
     else if Length(num) = 3 then
        begin
        num := '00000000' + num;
        end
     else if Length(num) = 4 then
        begin
        num := '0000000' + num;
        end
     else if Length(num) = 5 then
        begin
        num := '000000' + num;
        end
     else if Length(num) = 6 then
        begin
        num := '00000' + num;
        end
     else if Length(num) = 7 then
        begin
        num := '0000' + num;
        end
     else if Length(num) = 8 then
        begin
        num := '000' + num;
        end
     else if Length(num) = 9 then
        begin
        num := '00' + num;
        end
     else if Length(num) = 10 then
        begin
        num := '0' + num;
     end;

     n1 := StrToInt(num[1]);
     n2 := StrToInt(num[2]);
     n3 := StrToInt(num[3]);
     n4 := StrToInt(num[4]);
     n5 := StrToInt(num[5]);
     n6 := StrToInt(num[6]);
     n7 := StrToInt(num[7]);
     n8 := StrToInt(num[8]);
     n9 := StrToInt(num[9]);
     d1 := n9*2+n8*3+n7*4+n6*5+n5*6+n4*7+n3*8+n2*9+n1*10;
     d1 := 11-(d1 mod 11);

     if d1 >= 10 then
        begin
        d1 := 0;
     end;

     d2 := d1*2+n9*3+n8*4+n7*5+n6*6+n5*7+n4*8+n3*9+n2*10+n1*11;
     d2 := 11-(d2 mod 11);

     if d2>=10 then
        begin
        d2 := 0;
     end;

     calculado := inttostr(d1) + inttostr(d2);
     digitado  := num[10] + num[11];

     if calculado = digitado then
        begin
        Valida_CPF := True;
        end
     else
        begin
        Valida_CPF := False;
     end;
end;

function Valida_CNPJ(xCNPJ: String):Boolean;

Var
  d1,d4,xx,nCount,fator,resto,digito1,digito2 : Integer;
  Check : String;

begin
     d1 := 0;
     d4 := 0;
     xx := 1;

     for nCount := 1 to Length( xCNPJ )-2 do
         begin
         if Pos( Copy( xCNPJ, nCount, 1 ), '/-.' ) = 0 then
            begin
            if xx < 5 then
               begin
               fator := 6 - xx;
               end
            else
               begin
               fator := 14 - xx;
            end;
            d1 := d1 + StrToInt( Copy( xCNPJ, nCount, 1 ) ) * fator;
            if xx < 6 then
               begin
               fator := 7 - xx;
               end
            else
               begin
               fator := 15 - xx;    end;
               d4 := d4 + StrToInt( Copy( xCNPJ, nCount, 1 ) ) * fator;
               xx := xx+1;
            end;
         end;
         resto := (d1 mod 11);
         if resto < 2 then
            begin
            digito1 := 0;
            end
         else
            begin
            digito1 := 11 - resto;
         end;
         d4 := d4 + 2 * digito1;
         resto := (d4 mod 11);
         if resto < 2 then
            begin
            digito2 := 0;
            end
         else
            begin
            digito2 := 11 - resto;
         end;
         Check := IntToStr(Digito1) + IntToStr(Digito2);
         if Check <> copy(xCNPJ,succ(length(xCNPJ)-2),2) then
            begin
            Result := False;
            end
         else
            begin
            Result := True;
     end;
end;

function Obtem_CFOP_Entrada(CFOP_Saida: String): String;

var
   Ind: Integer;
   Resultado: String;
   Relacao_CFOP_Saida: Array[0..256] of String;
   Relacao_CFOP_Entrada: Array[0..256] of String;

begin
     CFOP_Saida := Retira_Caracter(CFOP_Saida, '.');

     //Carrega o Array com os CFOPs de Saídas

     Relacao_CFOP_Saida[0]   := '5000';
     Relacao_CFOP_Saida[1]   := '5100';
     Relacao_CFOP_Saida[2]   := '5101';
     Relacao_CFOP_Saida[3]   := '5102';
     Relacao_CFOP_Saida[4]   := '5111';
     Relacao_CFOP_Saida[5]   := '5113';
     Relacao_CFOP_Saida[6]   := '5116';
     Relacao_CFOP_Saida[7]   := '5117';
     Relacao_CFOP_Saida[8]   := '5118';
     Relacao_CFOP_Saida[9]   := '5120';
     Relacao_CFOP_Saida[0]   := '5122';
     Relacao_CFOP_Saida[11]  := '5124';
     Relacao_CFOP_Saida[12]  := '5125';
     Relacao_CFOP_Saida[13]  := '5150';
     Relacao_CFOP_Saida[14]  := '5151';
     Relacao_CFOP_Saida[15]  := '5152';
     Relacao_CFOP_Saida[16]  := '5153';
     Relacao_CFOP_Saida[17]  := '5200';
     Relacao_CFOP_Saida[18]  := '5201';
     Relacao_CFOP_Saida[19]  := '5202';
     Relacao_CFOP_Saida[20]  := '5205';
     Relacao_CFOP_Saida[21]  := '5206';
     Relacao_CFOP_Saida[22]  := '5207';
     Relacao_CFOP_Saida[23]  := '5208';
     Relacao_CFOP_Saida[24]  := '5209';
     Relacao_CFOP_Saida[25]  := '5250';
     Relacao_CFOP_Saida[26]  := '5251';
     Relacao_CFOP_Saida[27]  := '5252';
     Relacao_CFOP_Saida[28]  := '5253';
     Relacao_CFOP_Saida[29]  := '5254';
     Relacao_CFOP_Saida[30]  := '5255';
     Relacao_CFOP_Saida[31]  := '5256';
     Relacao_CFOP_Saida[32]  := '5257';
     Relacao_CFOP_Saida[33]  := '5300';
     Relacao_CFOP_Saida[34]  := '5301';
     Relacao_CFOP_Saida[35]  := '5302';
     Relacao_CFOP_Saida[36]  := '5303';
     Relacao_CFOP_Saida[37]  := '5304';
     Relacao_CFOP_Saida[38]  := '5305';
     Relacao_CFOP_Saida[39]  := '5306';
     Relacao_CFOP_Saida[40]  := '5350';
     Relacao_CFOP_Saida[41]  := '5351';
     Relacao_CFOP_Saida[42]  := '5352';
     Relacao_CFOP_Saida[43]  := '5353';
     Relacao_CFOP_Saida[44]  := '5354';
     Relacao_CFOP_Saida[45]  := '5355';
     Relacao_CFOP_Saida[46]  := '5356';
     Relacao_CFOP_Saida[47]  := '5400';
     Relacao_CFOP_Saida[48]  := '5401';
     Relacao_CFOP_Saida[49]  := '5403';
     Relacao_CFOP_Saida[50]  := '5408';
     Relacao_CFOP_Saida[51]  := '5409';
     Relacao_CFOP_Saida[52]  := '5410';
     Relacao_CFOP_Saida[53]  := '5411';
     Relacao_CFOP_Saida[54]  := '5414';
     Relacao_CFOP_Saida[55]  := '5415';
     Relacao_CFOP_Saida[56]  := '5450';
     Relacao_CFOP_Saida[57]  := '5451';
     Relacao_CFOP_Saida[58]  := '5500';
     Relacao_CFOP_Saida[59]  := '5501';
     Relacao_CFOP_Saida[60]  := '5503';
     Relacao_CFOP_Saida[61]  := '5504';
     Relacao_CFOP_Saida[62]  := '5505';
     Relacao_CFOP_Saida[63]  := '5550';
     Relacao_CFOP_Saida[64]  := '5551';
     Relacao_CFOP_Saida[65]  := '5552';
     Relacao_CFOP_Saida[66]  := '5553';
     Relacao_CFOP_Saida[67]  := '5554';
     Relacao_CFOP_Saida[68]  := '5555';
     Relacao_CFOP_Saida[69]  := '5556';
     Relacao_CFOP_Saida[70]  := '5557';
     Relacao_CFOP_Saida[71]  := '5600';
     Relacao_CFOP_Saida[72]  := '5601';
     Relacao_CFOP_Saida[73]  := '5602';
     Relacao_CFOP_Saida[74]  := '5603';
     Relacao_CFOP_Saida[75]  := '5605';
     Relacao_CFOP_Saida[76]  := '5650';
     Relacao_CFOP_Saida[77]  := '5651';
     Relacao_CFOP_Saida[78]  := '5652';
     Relacao_CFOP_Saida[79]  := '5653';
     Relacao_CFOP_Saida[80]  := '5658';
     Relacao_CFOP_Saida[81]  := '5659';
     Relacao_CFOP_Saida[82]  := '5660';
     Relacao_CFOP_Saida[83]  := '5661';
     Relacao_CFOP_Saida[84]  := '5662';
     Relacao_CFOP_Saida[85]  := '5663';
     Relacao_CFOP_Saida[86]  := '5664';
     Relacao_CFOP_Saida[87]  := '5900';
     Relacao_CFOP_Saida[88]  := '5901';
     Relacao_CFOP_Saida[89]  := '5902';
     Relacao_CFOP_Saida[90]  := '5903';
     Relacao_CFOP_Saida[91]  := '5904';
     Relacao_CFOP_Saida[92]  := '5905';
     Relacao_CFOP_Saida[93]  := '5906';
     Relacao_CFOP_Saida[94]  := '5907';
     Relacao_CFOP_Saida[95]  := '5908';
     Relacao_CFOP_Saida[96]  := '5909';
     Relacao_CFOP_Saida[97]  := '5910';
     Relacao_CFOP_Saida[98]  := '5911';
     Relacao_CFOP_Saida[99]  := '5912';
     Relacao_CFOP_Saida[100] := '5913';
     Relacao_CFOP_Saida[101] := '5914';
     Relacao_CFOP_Saida[102] := '5915';
     Relacao_CFOP_Saida[103] := '5916';
     Relacao_CFOP_Saida[104] := '5917';
     Relacao_CFOP_Saida[105] := '5918';
     Relacao_CFOP_Saida[106] := '5919';
     Relacao_CFOP_Saida[107] := '5920';
     Relacao_CFOP_Saida[108] := '5921';
     Relacao_CFOP_Saida[109] := '5922';
     Relacao_CFOP_Saida[110] := '5923';
     Relacao_CFOP_Saida[111] := '5924';
     Relacao_CFOP_Saida[112] := '5925';
     Relacao_CFOP_Saida[113] := '5926';
     Relacao_CFOP_Saida[114] := '5931';
     Relacao_CFOP_Saida[115] := '5932';
     Relacao_CFOP_Saida[116] := '5933';
     Relacao_CFOP_Saida[117] := '5949';
     Relacao_CFOP_Saida[118] := '6000';
     Relacao_CFOP_Saida[119] := '6100';
     Relacao_CFOP_Saida[120] := '6101';
     Relacao_CFOP_Saida[121] := '6102';
     Relacao_CFOP_Saida[122] := '6111';
     Relacao_CFOP_Saida[123] := '6113';
     Relacao_CFOP_Saida[124] := '6116';
     Relacao_CFOP_Saida[125] := '6117';
     Relacao_CFOP_Saida[126] := '6118';
     Relacao_CFOP_Saida[127] := '6120';
     Relacao_CFOP_Saida[128] := '6122';
     Relacao_CFOP_Saida[129] := '6124';
     Relacao_CFOP_Saida[130] := '6125';
     Relacao_CFOP_Saida[131] := '6150';
     Relacao_CFOP_Saida[132] := '6151';
     Relacao_CFOP_Saida[133] := '6152';
     Relacao_CFOP_Saida[134] := '6153';
     Relacao_CFOP_Saida[135] := '6200';
     Relacao_CFOP_Saida[136] := '6201';
     Relacao_CFOP_Saida[137] := '6202';
     Relacao_CFOP_Saida[138] := '6205';
     Relacao_CFOP_Saida[139] := '6206';
     Relacao_CFOP_Saida[140] := '6207';
     Relacao_CFOP_Saida[141] := '6208';
     Relacao_CFOP_Saida[142] := '6209';
     Relacao_CFOP_Saida[143] := '6250';
     Relacao_CFOP_Saida[144] := '6251';
     Relacao_CFOP_Saida[145] := '6252';
     Relacao_CFOP_Saida[146] := '6253';
     Relacao_CFOP_Saida[147] := '6254';
     Relacao_CFOP_Saida[148] := '6255';
     Relacao_CFOP_Saida[149] := '6256';
     Relacao_CFOP_Saida[150] := '6257';
     Relacao_CFOP_Saida[151] := '6300';
     Relacao_CFOP_Saida[152] := '6301';
     Relacao_CFOP_Saida[153] := '6302';
     Relacao_CFOP_Saida[154] := '6303';
     Relacao_CFOP_Saida[155] := '6304';
     Relacao_CFOP_Saida[156] := '6305';
     Relacao_CFOP_Saida[157] := '6306';
     Relacao_CFOP_Saida[158] := '6350';
     Relacao_CFOP_Saida[159] := '6351';
     Relacao_CFOP_Saida[160] := '6352';
     Relacao_CFOP_Saida[161] := '6353';
     Relacao_CFOP_Saida[162] := '6354';
     Relacao_CFOP_Saida[163] := '6355';
     Relacao_CFOP_Saida[164] := '6356';
     Relacao_CFOP_Saida[165] := '6400';
     Relacao_CFOP_Saida[166] := '6401';
     Relacao_CFOP_Saida[167] := '6403';
     Relacao_CFOP_Saida[168] := '6408';
     Relacao_CFOP_Saida[169] := '6409';
     Relacao_CFOP_Saida[170] := '6410';
     Relacao_CFOP_Saida[171] := '6411';
     Relacao_CFOP_Saida[172] := '6414';
     Relacao_CFOP_Saida[173] := '6415';
     Relacao_CFOP_Saida[174] := '6500';
     Relacao_CFOP_Saida[175] := '6501';
     Relacao_CFOP_Saida[176] := '6503';
     Relacao_CFOP_Saida[177] := '6504';
     Relacao_CFOP_Saida[178] := '6505';
     Relacao_CFOP_Saida[179] := '6550';
     Relacao_CFOP_Saida[180] := '6551';
     Relacao_CFOP_Saida[181] := '6552';
     Relacao_CFOP_Saida[182] := '6553';
     Relacao_CFOP_Saida[183] := '6554';
     Relacao_CFOP_Saida[184] := '6555';
     Relacao_CFOP_Saida[185] := '6556';
     Relacao_CFOP_Saida[186] := '6557';
     Relacao_CFOP_Saida[187] := '6600';
     Relacao_CFOP_Saida[188] := '6603';
     Relacao_CFOP_Saida[189] := '6650';
     Relacao_CFOP_Saida[190] := '6651';
     Relacao_CFOP_Saida[191] := '6652';
     Relacao_CFOP_Saida[192] := '6653';
     Relacao_CFOP_Saida[193] := '6658';
     Relacao_CFOP_Saida[194] := '6659';
     Relacao_CFOP_Saida[195] := '6660';
     Relacao_CFOP_Saida[196] := '6661';
     Relacao_CFOP_Saida[197] := '6662';
     Relacao_CFOP_Saida[198] := '6663';
     Relacao_CFOP_Saida[199] := '6664';
     Relacao_CFOP_Saida[200] := '6900';
     Relacao_CFOP_Saida[201] := '6901';
     Relacao_CFOP_Saida[202] := '6902';
     Relacao_CFOP_Saida[203] := '6903';
     Relacao_CFOP_Saida[204] := '6904';
     Relacao_CFOP_Saida[205] := '6905';
     Relacao_CFOP_Saida[206] := '6906';
     Relacao_CFOP_Saida[207] := '6907';
     Relacao_CFOP_Saida[208] := '6908';
     Relacao_CFOP_Saida[209] := '6909';
     Relacao_CFOP_Saida[210] := '6910';
     Relacao_CFOP_Saida[211] := '6911';
     Relacao_CFOP_Saida[212] := '6912';
     Relacao_CFOP_Saida[213] := '6913';
     Relacao_CFOP_Saida[214] := '6914';
     Relacao_CFOP_Saida[215] := '6915';
     Relacao_CFOP_Saida[216] := '6916';
     Relacao_CFOP_Saida[217] := '6917';
     Relacao_CFOP_Saida[218] := '6918';
     Relacao_CFOP_Saida[219] := '6919';
     Relacao_CFOP_Saida[220] := '6920';
     Relacao_CFOP_Saida[221] := '6921';
     Relacao_CFOP_Saida[222] := '6922';
     Relacao_CFOP_Saida[223] := '6923';
     Relacao_CFOP_Saida[224] := '6924';
     Relacao_CFOP_Saida[225] := '6925';
     Relacao_CFOP_Saida[226] := '6931';
     Relacao_CFOP_Saida[227] := '6932';
     Relacao_CFOP_Saida[228] := '6933';
     Relacao_CFOP_Saida[229] := '6949';
     Relacao_CFOP_Saida[230] := '7000';
     Relacao_CFOP_Saida[231] := '7100';
     Relacao_CFOP_Saida[232] := '7101';
     Relacao_CFOP_Saida[233] := '7102';
     Relacao_CFOP_Saida[234] := '7127';
     Relacao_CFOP_Saida[235] := '7200';
     Relacao_CFOP_Saida[236] := '7201';
     Relacao_CFOP_Saida[237] := '7202';
     Relacao_CFOP_Saida[238] := '7205';
     Relacao_CFOP_Saida[239] := '7206';
     Relacao_CFOP_Saida[240] := '7207';
     Relacao_CFOP_Saida[241] := '7211';
     Relacao_CFOP_Saida[242] := '7250';
     Relacao_CFOP_Saida[243] := '7251';
     Relacao_CFOP_Saida[244] := '7300';
     Relacao_CFOP_Saida[245] := '7301';
     Relacao_CFOP_Saida[246] := '7350';
     Relacao_CFOP_Saida[247] := '7500';
     Relacao_CFOP_Saida[248] := '7551';
     Relacao_CFOP_Saida[249] := '7553';
     Relacao_CFOP_Saida[250] := '7556';
     Relacao_CFOP_Saida[251] := '7650';
     Relacao_CFOP_Saida[252] := '7651';
     Relacao_CFOP_Saida[253] := '7900';
     Relacao_CFOP_Saida[254] := '7930';
     Relacao_CFOP_Saida[255] := '7949';
     Relacao_CFOP_Saida[256] := '5929';

     //Carrega o Array com os CFOPs de Entrada

     Relacao_CFOP_Entrada[0]   := '1.000';
     Relacao_CFOP_Entrada[1]   := '1.100';
     Relacao_CFOP_Entrada[2]   := '1.101';
     Relacao_CFOP_Entrada[3]   := '3.102';
     Relacao_CFOP_Entrada[4]   := '1.111';
     Relacao_CFOP_Entrada[5]   := '1.113';
     Relacao_CFOP_Entrada[6]   := '1.116';
     Relacao_CFOP_Entrada[7]   := '1.117';
     Relacao_CFOP_Entrada[8]   := '1.118';
     Relacao_CFOP_Entrada[9]   := '1.120';
     Relacao_CFOP_Entrada[0]   := '1.122';
     Relacao_CFOP_Entrada[11]  := '1.124';
     Relacao_CFOP_Entrada[12]  := '1.125';
     Relacao_CFOP_Entrada[13]  := '1.150';
     Relacao_CFOP_Entrada[14]  := '1.151';
     Relacao_CFOP_Entrada[15]  := '1.152';
     Relacao_CFOP_Entrada[16]  := '1.153';
     Relacao_CFOP_Entrada[17]  := '1.200';
     Relacao_CFOP_Entrada[18]  := '1.201';
     Relacao_CFOP_Entrada[19]  := '1.202';
     Relacao_CFOP_Entrada[20]  := '1.205';
     Relacao_CFOP_Entrada[21]  := '1.206';
     Relacao_CFOP_Entrada[22]  := '1.207';
     Relacao_CFOP_Entrada[23]  := '1.208';
     Relacao_CFOP_Entrada[24]  := '1.209';
     Relacao_CFOP_Entrada[25]  := '1.250';
     Relacao_CFOP_Entrada[26]  := '1.251';
     Relacao_CFOP_Entrada[27]  := '1.252';
     Relacao_CFOP_Entrada[28]  := '1.253';
     Relacao_CFOP_Entrada[29]  := '1.254';
     Relacao_CFOP_Entrada[30]  := '1.255';
     Relacao_CFOP_Entrada[31]  := '1.256';
     Relacao_CFOP_Entrada[32]  := '1.257';
     Relacao_CFOP_Entrada[33]  := '1.300';
     Relacao_CFOP_Entrada[34]  := '1.301';
     Relacao_CFOP_Entrada[35]  := '1.302';
     Relacao_CFOP_Entrada[36]  := '1.303';
     Relacao_CFOP_Entrada[37]  := '1.304';
     Relacao_CFOP_Entrada[38]  := '1.305';
     Relacao_CFOP_Entrada[39]  := '1.306';
     Relacao_CFOP_Entrada[40]  := '1.350';
     Relacao_CFOP_Entrada[41]  := '1.351';
     Relacao_CFOP_Entrada[42]  := '1.352';
     Relacao_CFOP_Entrada[43]  := '1.353';
     Relacao_CFOP_Entrada[44]  := '1.354';
     Relacao_CFOP_Entrada[45]  := '1.355';
     Relacao_CFOP_Entrada[46]  := '1.356';
     Relacao_CFOP_Entrada[47]  := '1.400';
     Relacao_CFOP_Entrada[48]  := '1.401';
     Relacao_CFOP_Entrada[49]  := '1.403';
     Relacao_CFOP_Entrada[50]  := '1.408';
     Relacao_CFOP_Entrada[51]  := '1.409';
     Relacao_CFOP_Entrada[52]  := '1.410';
     Relacao_CFOP_Entrada[53]  := '1.411';
     Relacao_CFOP_Entrada[54]  := '1.414';
     Relacao_CFOP_Entrada[55]  := '1.415';
     Relacao_CFOP_Entrada[56]  := '1.450';
     Relacao_CFOP_Entrada[57]  := '1.451';
     Relacao_CFOP_Entrada[58]  := '1.500';
     Relacao_CFOP_Entrada[59]  := '1.501';
     Relacao_CFOP_Entrada[60]  := '1.503';
     Relacao_CFOP_Entrada[61]  := '1.504';
     Relacao_CFOP_Entrada[62]  := '1.505';
     Relacao_CFOP_Entrada[63]  := '1.550';
     Relacao_CFOP_Entrada[64]  := '1.551';
     Relacao_CFOP_Entrada[65]  := '1.552';
     Relacao_CFOP_Entrada[66]  := '1.553';
     Relacao_CFOP_Entrada[67]  := '1.554';
     Relacao_CFOP_Entrada[68]  := '1.555';
     Relacao_CFOP_Entrada[69]  := '1.556';
     Relacao_CFOP_Entrada[70]  := '1.557';
     Relacao_CFOP_Entrada[71]  := '1.600';
     Relacao_CFOP_Entrada[72]  := '1.601';
     Relacao_CFOP_Entrada[73]  := '1.602';
     Relacao_CFOP_Entrada[74]  := '1.603';
     Relacao_CFOP_Entrada[75]  := '1.605';
     Relacao_CFOP_Entrada[76]  := '1.650';
     Relacao_CFOP_Entrada[77]  := '1.651';
     Relacao_CFOP_Entrada[78]  := '1.652';
     Relacao_CFOP_Entrada[79]  := '1.653';
     Relacao_CFOP_Entrada[80]  := '1.658';
     Relacao_CFOP_Entrada[81]  := '1.659';
     Relacao_CFOP_Entrada[82]  := '1.660';
     Relacao_CFOP_Entrada[83]  := '1.661';
     Relacao_CFOP_Entrada[84]  := '1.662';
     Relacao_CFOP_Entrada[85]  := '1.663';
     Relacao_CFOP_Entrada[86]  := '1.664';
     Relacao_CFOP_Entrada[87]  := '1.901';
     Relacao_CFOP_Entrada[88]  := '1.901';
     Relacao_CFOP_Entrada[89]  := '1.902';
     Relacao_CFOP_Entrada[90]  := '1.903';
     Relacao_CFOP_Entrada[91]  := '1.904';
     Relacao_CFOP_Entrada[92]  := '1.905';
     Relacao_CFOP_Entrada[93]  := '1.906';
     Relacao_CFOP_Entrada[94]  := '1.907';
     Relacao_CFOP_Entrada[95]  := '1.908';
     Relacao_CFOP_Entrada[96]  := '1.909';
     Relacao_CFOP_Entrada[97]  := '1.910';
     Relacao_CFOP_Entrada[98]  := '1.911';
     Relacao_CFOP_Entrada[99]  := '1.912';
     Relacao_CFOP_Entrada[100] := '1.913';
     Relacao_CFOP_Entrada[101] := '1.914';
     Relacao_CFOP_Entrada[102] := '1.915';
     Relacao_CFOP_Entrada[103] := '1.916';
     Relacao_CFOP_Entrada[104] := '1.917';
     Relacao_CFOP_Entrada[105] := '1.918';
     Relacao_CFOP_Entrada[106] := '1.919';
     Relacao_CFOP_Entrada[107] := '1.920';
     Relacao_CFOP_Entrada[108] := '1.921';
     Relacao_CFOP_Entrada[109] := '1.922';
     Relacao_CFOP_Entrada[110] := '1.923';
     Relacao_CFOP_Entrada[111] := '1.924';
     Relacao_CFOP_Entrada[112] := '1.925';
     Relacao_CFOP_Entrada[113] := '1.926';
     Relacao_CFOP_Entrada[114] := '1.931';
     Relacao_CFOP_Entrada[115] := '1.932';
     Relacao_CFOP_Entrada[116] := '1.933';
     Relacao_CFOP_Entrada[117] := '1.949';
     Relacao_CFOP_Entrada[118] := '2.000';
     Relacao_CFOP_Entrada[119] := '2.100';
     Relacao_CFOP_Entrada[120] := '2.101';
     Relacao_CFOP_Entrada[121] := '2.102';
     Relacao_CFOP_Entrada[122] := '2.111';
     Relacao_CFOP_Entrada[123] := '2.113';
     Relacao_CFOP_Entrada[124] := '2.116';
     Relacao_CFOP_Entrada[125] := '2.117';
     Relacao_CFOP_Entrada[126] := '2.118';
     Relacao_CFOP_Entrada[127] := '2.120';
     Relacao_CFOP_Entrada[128] := '2.122';
     Relacao_CFOP_Entrada[129] := '2.124';
     Relacao_CFOP_Entrada[130] := '2.125';
     Relacao_CFOP_Entrada[131] := '2.150';
     Relacao_CFOP_Entrada[132] := '2.151';
     Relacao_CFOP_Entrada[133] := '2.152';
     Relacao_CFOP_Entrada[134] := '2.153';
     Relacao_CFOP_Entrada[135] := '2.200';
     Relacao_CFOP_Entrada[136] := '2.201';
     Relacao_CFOP_Entrada[137] := '2.202';
     Relacao_CFOP_Entrada[138] := '2.205';
     Relacao_CFOP_Entrada[139] := '2.206';
     Relacao_CFOP_Entrada[140] := '2.207';
     Relacao_CFOP_Entrada[141] := '2.208';
     Relacao_CFOP_Entrada[142] := '2.209';
     Relacao_CFOP_Entrada[143] := '2.250';
     Relacao_CFOP_Entrada[144] := '2.251';
     Relacao_CFOP_Entrada[145] := '2.252';
     Relacao_CFOP_Entrada[146] := '2.253';
     Relacao_CFOP_Entrada[147] := '2.254';
     Relacao_CFOP_Entrada[148] := '2.255';
     Relacao_CFOP_Entrada[149] := '2.256';
     Relacao_CFOP_Entrada[150] := '2.257';
     Relacao_CFOP_Entrada[151] := '2.300';
     Relacao_CFOP_Entrada[152] := '2.301';
     Relacao_CFOP_Entrada[153] := '2.302';
     Relacao_CFOP_Entrada[154] := '2.303';
     Relacao_CFOP_Entrada[155] := '2.304';
     Relacao_CFOP_Entrada[156] := '2.305';
     Relacao_CFOP_Entrada[157] := '2.306';
     Relacao_CFOP_Entrada[158] := '2.350';
     Relacao_CFOP_Entrada[159] := '2.351';
     Relacao_CFOP_Entrada[160] := '2.352';
     Relacao_CFOP_Entrada[161] := '2.353';
     Relacao_CFOP_Entrada[162] := '2.354';
     Relacao_CFOP_Entrada[163] := '2.355';
     Relacao_CFOP_Entrada[164] := '2.356';
     Relacao_CFOP_Entrada[165] := '2.400';
     Relacao_CFOP_Entrada[166] := '2.401';
     Relacao_CFOP_Entrada[167] := '2.403';
     Relacao_CFOP_Entrada[168] := '2.408';
     Relacao_CFOP_Entrada[169] := '2.409';
     Relacao_CFOP_Entrada[170] := '2.410';
     Relacao_CFOP_Entrada[171] := '2.411';
     Relacao_CFOP_Entrada[172] := '2.414';
     Relacao_CFOP_Entrada[173] := '2.415';
     Relacao_CFOP_Entrada[174] := '2.500';
     Relacao_CFOP_Entrada[175] := '2.501';
     Relacao_CFOP_Entrada[176] := '2.503';
     Relacao_CFOP_Entrada[177] := '2.504';
     Relacao_CFOP_Entrada[178] := '2.505';
     Relacao_CFOP_Entrada[179] := '2.550';
     Relacao_CFOP_Entrada[180] := '2.551';
     Relacao_CFOP_Entrada[181] := '2.552';
     Relacao_CFOP_Entrada[182] := '2.553';
     Relacao_CFOP_Entrada[183] := '2.554';
     Relacao_CFOP_Entrada[184] := '2.555';
     Relacao_CFOP_Entrada[185] := '2.556';
     Relacao_CFOP_Entrada[186] := '2.557';
     Relacao_CFOP_Entrada[187] := '2.600';
     Relacao_CFOP_Entrada[188] := '2.603';
     Relacao_CFOP_Entrada[189] := '2.650';
     Relacao_CFOP_Entrada[190] := '2.651';
     Relacao_CFOP_Entrada[191] := '2.652';
     Relacao_CFOP_Entrada[192] := '2.653';
     Relacao_CFOP_Entrada[193] := '2.658';
     Relacao_CFOP_Entrada[194] := '2.659';
     Relacao_CFOP_Entrada[195] := '2.660';
     Relacao_CFOP_Entrada[196] := '2.661';
     Relacao_CFOP_Entrada[197] := '2.662';
     Relacao_CFOP_Entrada[198] := '2.663';
     Relacao_CFOP_Entrada[199] := '2.664';
     Relacao_CFOP_Entrada[200] := '2.900';
     Relacao_CFOP_Entrada[201] := '2.901';
     Relacao_CFOP_Entrada[202] := '2.902';
     Relacao_CFOP_Entrada[203] := '2.903';
     Relacao_CFOP_Entrada[204] := '2.904';
     Relacao_CFOP_Entrada[205] := '2.905';
     Relacao_CFOP_Entrada[206] := '2.906';
     Relacao_CFOP_Entrada[207] := '2.907';
     Relacao_CFOP_Entrada[208] := '2.908';
     Relacao_CFOP_Entrada[209] := '2.909';
     Relacao_CFOP_Entrada[210] := '2.910';
     Relacao_CFOP_Entrada[211] := '2.911';
     Relacao_CFOP_Entrada[212] := '2.912';
     Relacao_CFOP_Entrada[213] := '2.913';
     Relacao_CFOP_Entrada[214] := '2.914';
     Relacao_CFOP_Entrada[215] := '2.915';
     Relacao_CFOP_Entrada[216] := '2.916';
     Relacao_CFOP_Entrada[217] := '2.917';
     Relacao_CFOP_Entrada[218] := '2.918';
     Relacao_CFOP_Entrada[219] := '2.919';
     Relacao_CFOP_Entrada[220] := '2.920';
     Relacao_CFOP_Entrada[221] := '2.921';
     Relacao_CFOP_Entrada[222] := '2.922';
     Relacao_CFOP_Entrada[223] := '2.923';
     Relacao_CFOP_Entrada[224] := '2.924';
     Relacao_CFOP_Entrada[225] := '2.925';
     Relacao_CFOP_Entrada[226] := '2.931';
     Relacao_CFOP_Entrada[227] := '2.932';
     Relacao_CFOP_Entrada[228] := '2.933';
     Relacao_CFOP_Entrada[229] := '2.949';
     Relacao_CFOP_Entrada[230] := '3.000';
     Relacao_CFOP_Entrada[231] := '3.100';
     Relacao_CFOP_Entrada[232] := '3.101';
     Relacao_CFOP_Entrada[233] := '3.102';
     Relacao_CFOP_Entrada[234] := '3.127';
     Relacao_CFOP_Entrada[235] := '3.200';
     Relacao_CFOP_Entrada[236] := '3.201';
     Relacao_CFOP_Entrada[237] := '3.202';
     Relacao_CFOP_Entrada[238] := '3.205';
     Relacao_CFOP_Entrada[239] := '3.206';
     Relacao_CFOP_Entrada[240] := '3.207';
     Relacao_CFOP_Entrada[241] := '3.211';
     Relacao_CFOP_Entrada[242] := '3.250';
     Relacao_CFOP_Entrada[243] := '3.251';
     Relacao_CFOP_Entrada[244] := '3.300';
     Relacao_CFOP_Entrada[245] := '3.301';
     Relacao_CFOP_Entrada[246] := '3.350';
     Relacao_CFOP_Entrada[247] := '3.500';
     Relacao_CFOP_Entrada[248] := '3.551';
     Relacao_CFOP_Entrada[249] := '3.553';
     Relacao_CFOP_Entrada[250] := '3.556';
     Relacao_CFOP_Entrada[251] := '3.650';
     Relacao_CFOP_Entrada[252] := '3.651';
     Relacao_CFOP_Entrada[253] := '3.900';
     Relacao_CFOP_Entrada[254] := '3.930';
     Relacao_CFOP_Entrada[255] := '3.949';
     Relacao_CFOP_Entrada[256] := '1.901';

     // Obtem o CFOP Correto no Array

     Resultado := CFOP_Saida;

     For Ind := 0 To 256 Do
         Begin
         If (Relacao_CFOP_Saida[Ind] = Trim(CFOP_Saida)) Then
            Begin
            Resultado := Relacao_CFOP_Entrada[Ind];
         End;
     End;

     Obtem_CFOP_Entrada := Resultado;
end;

function Obtem_Nro_Estado(Estado: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Estado: Array[0..27] of String;

begin
     //Carrega o Array

     Relacao_Estado[0]  := 'AC';
     Relacao_Estado[1]  := 'AL';
     Relacao_Estado[2]  := 'AP';
     Relacao_Estado[3]  := 'AM';
     Relacao_Estado[4]  := 'BA';
     Relacao_Estado[5]  := 'CE';
     Relacao_Estado[6]  := 'DF';
     Relacao_Estado[7]  := 'ES';
     Relacao_Estado[8]  := 'GO';
     Relacao_Estado[9]  := 'MA';
     Relacao_Estado[10] := 'MT';
     Relacao_Estado[11] := 'MS';
     Relacao_Estado[12] := 'MG';
     Relacao_Estado[13] := 'PA';
     Relacao_Estado[14] := 'PB';
     Relacao_Estado[15] := 'PR';
     Relacao_Estado[16] := 'PE';
     Relacao_Estado[17] := 'PI';
     Relacao_Estado[18] := 'RN';
     Relacao_Estado[19] := 'RS';
     Relacao_Estado[20] := 'RJ';
     Relacao_Estado[21] := 'RO';
     Relacao_Estado[22] := 'RR';
     Relacao_Estado[23] := 'SC';
     Relacao_Estado[24] := 'SP';
     Relacao_Estado[25] := 'SE';
     Relacao_Estado[26] := 'TO';
     Relacao_Estado[27] := '--';

     // Obtem o Número do Estado no Array

     Resultado := 0;

     For Ind := 0 To 27 Do
         Begin
         If (Relacao_Estado[Ind] = Trim(Estado)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Estado := Resultado;
end;

function Obtem_Nro_Midia(Midia: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Midia: Array[0..2] of String;

begin
     //Carrega o Array

     Relacao_Midia[0]  := 'CD Rom';
     Relacao_Midia[1]  := 'FTP';
     Relacao_Midia[2]  := 'E-Mail';

     // Obtem o Número da Midia no Array

     Resultado := 0;

     For Ind := 0 To 2 Do
         Begin
         If (Relacao_Midia[Ind] = Trim(Midia)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Midia := Resultado;
end;

function Obtem_Nro_Emulsao(Emulsao: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Emulsao: Array[0..2] of String;

begin
     //Carrega o Array

     Relacao_Emulsao[0]  := '---';
     Relacao_Emulsao[1]  := 'Positivo';
     Relacao_Emulsao[2]  := 'Negativo';

     Resultado := 0;

     For Ind := 0 To 2 Do
         Begin
         If (Relacao_Emulsao[Ind] = Trim(Emulsao)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Emulsao := Resultado;
end;

function Obtem_Nro_Filme(Filme: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Filme: Array[0..4] of String;

begin
     //Carrega o Array

     Relacao_Filme[0]  := '---';
     Relacao_Filme[1]  := 'Serigrafia';
     Relacao_Filme[2]  := 'Off Set';
     Relacao_Filme[3]  := 'Silk';
     Relacao_Filme[4]  := 'Hot Stamp';

     Resultado := 0;

     For Ind := 0 To 4 Do
         Begin
         If (Relacao_Filme[Ind] = Trim(Filme)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Filme := Resultado;
end;

function Obtem_Nro_Plataforma(Plataforma: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Plataforma: Array[0..2] of String;

begin
     //Carrega o Array

     Relacao_Plataforma[0]  := '---';
     Relacao_Plataforma[1]  := 'PC';
     Relacao_Plataforma[2]  := 'MAC';

     Resultado := 0;

     For Ind := 0 To 2 Do
         Begin
         If (Relacao_Plataforma[Ind] = Trim(Plataforma)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Plataforma := Resultado;
end;

function Obtem_Nro_Forma(Forma: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Forma: Array[0..2] of String;

begin
     //Carrega o Array

     Relacao_Forma[0]  := '---';
     Relacao_Forma[1]  := 'Normal';
     Relacao_Forma[2]  := 'Espelhado';

     Resultado := 0;

     For Ind := 0 To 2 Do
         Begin
         If (Relacao_Forma[Ind] = Trim(Forma)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Forma := Resultado;
end;

function Obtem_Nro_Preco_Em(Preco_Em: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Preco_Em: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Preco_Em[0]  := 'Reais';
     Relacao_Preco_Em[1]  := 'Dolar';

     // Obtem o Número do Preco Em no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Preco_Em[Ind] = Trim(Preco_Em)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Preco_Em := Resultado;
end;

function Obtem_Nro_Forma_Pagamento(Pagamento: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Pagamento: Array[0..2] of String;

begin
     //Carrega o Array

     Relacao_Pagamento[0]  := 'Dinheiro';
     Relacao_Pagamento[1]  := 'Boleto';
     Relacao_Pagamento[2]  := 'Cheque';

     // Obtem o Número do Estado no Array

     Resultado := 0;

     For Ind := 0 To 2 Do
         Begin
         If (Relacao_Pagamento[Ind] = Trim(Pagamento)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Forma_Pagamento := Resultado;
end;

function Obtem_Nro_Pais(Pais: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Pais: Array[0..16] of String;

begin
     //Carrega o Array

     Relacao_Pais[0]  := 'Brasil';
     Relacao_Pais[1]  := 'Argentina';
     Relacao_Pais[2]  := 'América Central';
     Relacao_Pais[3]  := 'Bolívia';
     Relacao_Pais[4]  := 'Canadá';
     Relacao_Pais[5]  := 'Chile';
     Relacao_Pais[6]  := 'Colômbia';
     Relacao_Pais[7]  := 'Equador';
     Relacao_Pais[8]  := 'Estados Unidos';
     Relacao_Pais[9]  := 'Paraguai';
     Relacao_Pais[10] := 'Portugal';
     Relacao_Pais[11] := 'Uruguai';
     Relacao_Pais[12] := 'Suiça';
     Relacao_Pais[13] := 'Inglaterra';
     Relacao_Pais[14] := 'Suécia';
     Relacao_Pais[15] := 'Alemanha';
     Relacao_Pais[16] := 'Islândia';

     // Obtem o Número do Pais no Array

     Resultado := 0;

     For Ind := 0 To 16 Do
         Begin
         If (Relacao_Pais[Ind] = Trim(Pais)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Pais := Resultado;
end;

function Obtem_Nro_Mes(Mes: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Mes: Array[0..11] of String;

begin
     //Carrega o Array

     Relacao_Mes[0]   := '1';
     Relacao_Mes[1]   := '2';
     Relacao_Mes[2]   := '3';
     Relacao_Mes[3]   := '4';
     Relacao_Mes[4]   := '5';
     Relacao_Mes[5]   := '6';
     Relacao_Mes[6]   := '7';
     Relacao_Mes[7]   := '8';
     Relacao_Mes[8]   := '9';
     Relacao_Mes[9]   := '10';
     Relacao_Mes[10]  := '11';
     Relacao_Mes[11]  := '12';

     // Obtem o Número do Mês no Array

     Resultado := 0;

     For Ind := 0 To 11 Do
         Begin
         If (Relacao_Mes[Ind] = Trim(Mes)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Mes := Resultado;
end;

function Obtem_Nro_Antes_Traco(Texto: String): String;

var
   Ind: Integer;
   Resultado: String;
   Ativa: Boolean;

begin
     Resultado := ' ';
     Ativa     := True;

     For Ind := 1 To Length(Texto) Do
         Begin
         If Texto[Ind] = '-' Then
            Begin
            Ativa := False;
         End;

         If Ativa = True Then
            Begin
            If Texto[Ind] <> '-' Then
               Begin
               Resultado := Resultado + Texto[Ind];
            End
         End;
     End;

     Result := Trim(Resultado);
end;

function Obtem_Antes(Texto, Antes: String): String;

var
   Ind: Integer;
   Resultado: String;
   Ativa: Boolean;

begin
     Resultado := ' ';
     Ativa     := True;

     For Ind := 1 To Length(Texto) Do
         Begin
         If Texto[Ind] = Antes Then
            Begin
            Ativa := False;
         End;

         If Ativa = True Then
            Begin
            If Texto[Ind] <> Antes Then
               Begin
               Resultado := Resultado + Texto[Ind];
            End
         End;
     End;

     Result := Trim(Resultado);
end;

function Obtem_Depois_Traco(Texto: String): String;

var
   Ind: Integer;
   Resultado: String;
   Ativa: Boolean;

begin
     Resultado := ' ';
     Ativa     := False;

     For Ind := 1 To Length(Texto) Do
         Begin
         If Texto[Ind] = '-' Then
            Begin
            Ativa := True;
         End;

         If Ativa = True Then
            Begin
            If Texto[Ind] <> '-' Then
               Begin
               Resultado := Resultado + Texto[Ind];
            End
         End;
     End;

     Result := Trim(Resultado);
end;

function Obtem_Depois(Texto, Depois: String): String;

var
   Ind: Integer;
   Resultado: String;
   Ativa: Boolean;

begin
     Resultado := ' ';
     Ativa     := False;

     For Ind := 1 To Length(Texto) Do
         Begin
         If Texto[Ind] = Depois Then
            Begin
            Ativa := True;
         End;

         If Ativa = True Then
            Begin
            If Texto[Ind] <> Depois Then
               Begin
               Resultado := Resultado + Texto[Ind];
            End
         End;
     End;

     Result := Trim(Resultado);
end;

function Obtem_Nro_Tipo_Codigo(Tipo_Codigo: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Codigo: Array[0..3] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Codigo[0] := 'CNPJ';
     Relacao_Tipo_Codigo[1] := 'CPF';
     Relacao_Tipo_Codigo[2] := 'RG';
     Relacao_Tipo_Codigo[3] := 'E-Mail';

     // Obtem o Número do Tipo do Código no Array

     Resultado := 0;

     For Ind := 0 To 3 Do
         Begin
         If (Relacao_Tipo_Codigo[Ind] = Trim(Tipo_Codigo)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Status_Credito(Status_Credito: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Status_Credito: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Status_Credito[0] := 'N';
     Relacao_Status_Credito[1] := 'S';

     // Obtem o Número do Status do Crédito no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Status_Credito[Ind] = Trim(Status_Credito)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Tipo_Pessoa(Tipo_Pessoa: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Pessoa: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Pessoa[0] := 'PJ';
     Relacao_Tipo_Pessoa[1] := 'PF';

     // Obtem o Número do Tipo de Pessoa no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Tipo_Pessoa[Ind] = Trim(Tipo_Pessoa)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Consignacao(Consignacao: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Consignacao: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Consignacao[0] := 'N';
     Relacao_Consignacao[1] := 'S';

     // Obtem o Número da Consignacao no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Consignacao[Ind] = Trim(Consignacao)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Opcao_Cobranca(Opcao_Cobranca: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Opcao_Cobranca: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Opcao_Cobranca[0] := 'O Mesmo';
     Relacao_Opcao_Cobranca[1] := 'Outro';

     // Obtem o Número da Opcao de Cobranca no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Opcao_Cobranca[Ind] = Trim(Opcao_Cobranca)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Opcao_Entrega(Opcao_Entrega: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Opcao_Entrega: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Opcao_Entrega[0] := 'O Mesmo';
     Relacao_Opcao_Entrega[1] := 'Outro';

     // Obtem o Número da Opcao de Cobranca no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Opcao_Entrega[Ind] = Trim(Opcao_Entrega)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Produto_Desconto(Desconto: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Desconto: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Desconto[0] := 'N';
     Relacao_Desconto[1] := 'S';

     // Obtem o Número do Desconto no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Desconto[Ind] = Trim(Desconto)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Produto_Pedido_Padrao(Padrao: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Padrao: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Padrao[0] := 'N';
     Relacao_Padrao[1] := 'S';

     // Obtem o Número do Pedido Padrão no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Padrao[Ind] = Trim(Padrao)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Tipo_Transporte(Tipo_Transporte: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Transporte: Array[0..3] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Transporte[0]  := 'Rodoviário';
     Relacao_Tipo_Transporte[1]  := 'Aéreo';
     Relacao_Tipo_Transporte[2]  := 'Marítimo';
     Relacao_Tipo_Transporte[3]  := 'Ferroviário';

     // Obtem o Número do Tipo de Transporte no Array

     Resultado := 0;

     For Ind := 0 To 3 Do
         Begin
         If (Relacao_Tipo_Transporte[Ind] = Trim(Tipo_Transporte)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Obtem_Nro_Tipo_Transporte := Resultado;
end;

function Obtem_Nro_Tipo_Faturamento(Tipo_Faturamento: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Faturamento: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Faturamento[0] := 'Nota Fiscal';
     Relacao_Tipo_Faturamento[1] := 'Orçamento';

     // Obtem o Número do Tipo de Faturamento no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Tipo_Faturamento[Ind] = Trim(Tipo_Faturamento)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Tipo_Tabela(Tipo_Tabela: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Tabela: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Tabela[0] := 'Normal';
     Relacao_Tipo_Tabela[1] := 'Duplycopy';

     // Obtem o Número do Tipo de Tabela no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Tipo_Tabela[Ind] = Trim(Tipo_Tabela)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Emite_Lote(Emite_Lote: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Emite_Lote: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Emite_Lote[0] := 'N';
     Relacao_Emite_Lote[1] := 'S';

     // Obtem o Número da Emissão de Lote no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Emite_Lote[Ind] = Trim(Emite_Lote)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Consumo(Consumo: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Consumo: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Consumo[0] := 'N';
     Relacao_Consumo[1] := 'S';

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Consumo[Ind] = Trim(Consumo)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Obtem_Nro_Tipo_Tabela_EMP(Empresa, Tipo_Tabela: String): Integer;

var
   Ind, Resultado: Integer;
   Relacao_Tipo_Tabela: Array[0..1] of String;

begin
     //Carrega o Array

     Relacao_Tipo_Tabela[0] := 'Normal';
     Relacao_Tipo_Tabela[1] := 'Duplycopy';

     // Obtem o Número do Tipo de Tabela no Array

     Resultado := 0;

     For Ind := 0 To 1 Do
         Begin
         If (Relacao_Tipo_Tabela[Ind] = Trim(Tipo_Tabela)) Then
            Begin
            Resultado := Ind;
         End;
     End;

     Result := Resultado;
end;

function Espacos(Qtde: Integer): String;

var
   Resultado: String;
   Ind: Integer;

begin
     For Ind := 1 To Qtde Do
         Begin
         Resultado := Resultado + ' ';
     End;

     Espacos := Resultado;
end;

function Exibe_Nro_Impressao(Numero: String; Tamanho: Integer): String;

var
   Resultado: String;
   Ind: Integer;

begin
     If Length(Trim(Numero)) < Tamanho Then
        Begin
        Resultado := Espacos((Tamanho - Length(Trim(Numero)))) + Trim(Numero);
        End
     Else
        Begin
        Resultado := Trim(Numero);
     End;

     Exibe_Nro_Impressao := Resultado;
end;

function Letra_Maiuscula(Texto: String): string;

var
   Ind: Integer;
   Resultado: String;

begin
     Texto     := UpperCase(Texto);
     Texto     := Trim(Texto);
     Resultado := ' ';

     For Ind := 1 To Length(Texto) Do
         Begin
         If Texto[Ind] = 'á' Then
            Begin
            Resultado := Resultado + 'Á';
            End
         Else If Texto[Ind] = 'á' Then
            Begin
            Resultado := Resultado + 'Á';
            End
         Else If Texto[Ind] = 'à' Then
            Begin
            Resultado := Resultado + 'À';
            End
         Else If Texto[Ind] = 'â' Then
            Begin
            Resultado := Resultado + 'Â';
            End
         Else If Texto[Ind] = 'ã' Then
            Begin
            Resultado := Resultado + 'Ã';
            End
         Else If Texto[Ind] = 'ä' Then
            Begin
            Resultado := Resultado + 'Ä';
            End
         Else If Texto[Ind] = 'é' Then
            Begin
            Resultado := Resultado + 'É';
            End
         Else If Texto[Ind] = 'è' Then
            Begin
            Resultado := Resultado + 'È';
            End
         Else If Texto[Ind] = 'ê' Then
            Begin
            Resultado := Resultado + 'Ê';
            End
         Else If Texto[Ind] = 'ë' Then
            Begin
            Resultado := Resultado + 'Ë';
            End
         Else If Texto[Ind] = 'í' Then
            Begin
            Resultado := Resultado + 'Í';
            End
         Else If Texto[Ind] = 'ì' Then
            Begin
            Resultado := Resultado + 'Ì';
            End
         Else If Texto[Ind] = 'î' Then
            Begin
            Resultado := Resultado + 'Î';
            End
         Else If Texto[Ind] = 'ï' Then
            Begin
            Resultado := Resultado + 'Ï';
            End
         Else If Texto[Ind] = 'ó' Then
            Begin
            Resultado := Resultado + 'Ó';
            End
         Else If Texto[Ind] = 'ò' Then
            Begin
            Resultado := Resultado + 'Ò';
            End
         Else If Texto[Ind] = 'õ' Then
            Begin
            Resultado := Resultado + 'Õ';
            End
         Else If Texto[Ind] = 'ô' Then
            Begin
            Resultado := Resultado + 'Ô';
            End
         Else If Texto[Ind] = 'ö' Then
            Begin
            Resultado := Resultado + 'Ö';
            End
         Else If Texto[Ind] = 'ú' Then
            Begin
            Resultado := Resultado + 'Ú';
            End
         Else If Texto[Ind] = 'ù' Then
            Begin
            Resultado := Resultado + 'Ù';
            End
         Else If Texto[Ind] = 'û' Then
            Begin
            Resultado := Resultado + 'Û';
            End
         Else If Texto[Ind] = 'ü' Then
            Begin
            Resultado := Resultado + 'Ü';
            End
         Else If Texto[Ind] = 'ç' Then
            Begin
            Resultado := Resultado + 'Ç';
            End
         Else
            Begin
            Resultado := Resultado + Texto[Ind];
         End;
     End;

     Letra_Maiuscula := Trim(Resultado);
end;

function Gera_Zeros(Nro, Tamanho: Integer): string;

Var
   Nro_Str, Zeros: String;
   Ind: Integer;

begin
     Nro_Str := Trim(IntToStr(Nro));
     Zeros   := ' ';

     For Ind := 1 To (Tamanho - Length(Nro_Str)) Do
         Begin
         Zeros := Zeros + '0';
     End;

     Nro_Str := Trim(Zeros) + Trim(Nro_Str);
     Nro_Str := Copy(Nro_Str,1,Tamanho);

     Gera_Zeros := Trim(Nro_Str);
end;

function Gera_Zeros_Str(Nro_Str: String; Tamanho: Integer): string;

Var
   Zeros: String;
   Ind: Integer;

begin
     Nro_Str := Trim(Nro_Str);
     Zeros   := ' ';

     For Ind := 1 To (Tamanho - Length(Nro_Str)) Do
         Begin
         Zeros := Zeros + '0';
     End;

     Nro_Str := Trim(Zeros) + Trim(Nro_Str);
     Nro_Str := Copy(Nro_Str,1,Tamanho);

     Gera_Zeros_Str := Trim(Nro_Str);
end;

function Gera_Espacos(Texto: String; Tamanho: Integer): string;

Var
   Espacos: String;
   Ind: Integer;

begin
     For Ind := 1 To (Tamanho - Length(Texto)) Do
         Begin
         Espacos := Espacos + ' ';
     End;

     Texto := Texto + Espacos;
     Texto := Copy(Texto,1,Tamanho);

     Gera_Espacos := Texto;
end;

function Retira_Caracter(Texto, Caracter: String): string;

Var
   Ind: Integer;
   Resultado: String;

begin
     Resultado := ' ';

     For Ind := 1 To Length(Texto) Do
         Begin

         If Texto[Ind] <> Caracter Then
            Begin
            Resultado := Resultado + Texto[Ind];
         End;
     End;

     Retira_Caracter := Trim(Resultado);
end;

function Localiza_Caracter(Origem, Localiza: String): Boolean;

Var
   Ind: Integer;
   Resultado: Boolean;

begin
     Resultado := False;

     For Ind := 1 To Length(Origem) Do
         Begin

         If Origem[Ind] = Localiza Then
            Begin
            Resultado := True;
         End;
     End;

     Localiza_Caracter := Resultado;
end;

function Gera_Str_To_Nro_Int(Texto: String): Integer;

Var
   Resultado: Integer;

begin
     Resultado := StrToInt(Trim(Texto));

     If Resultado <= 0 Then
        Begin
        Resultado := 0;
     End;

     Gera_Str_To_Nro_Int := Resultado;
end;

function Zera_Centavos(Valor: String): String;

Var
   Resultado: String;
   Inteiro: Integer;
   Centavos: Real;

begin
     If (StrToFloat(Ponto_Virgula(Valor)) - Int(StrToFloat(Ponto_Virgula(Valor)))) > 0 Then
        Begin
        Resultado := Trim(Valor);
        End
     Else
        Begin
        Centavos := Int(StrToFloat(Ponto_Virgula(Valor)));
        Resultado := FloatToStr(Centavos);
     End;

     Resultado := Trim(Resultado);

     Zera_Centavos := Resultado;
end;

function Zera_Centavos_Com_Sifrao(Valor: String): String;

Var
   Resultado: String;
   Inteiro: Integer;
   Centavos: Real;

begin
     If (StrToFloat(Ponto_Virgula(Valor)) - Int(StrToFloat(Ponto_Virgula(Valor)))) > 0 Then
        Begin
        Resultado := Trim(Valor);
        End
     Else
        Begin
        Centavos := Int(StrToFloat(Ponto_Virgula(Valor)));
        Resultado := FloatToStr(Centavos);
     End;

     Resultado := 'R$ ' + Trim(Resultado);

     Zera_Centavos_Com_Sifrao := Resultado;
end;

function Troca_Caracter(Caracter, Troca, Texto: String): string;

Var
   Ind: Integer;
   Resultado: String;

begin
     Resultado := ' ';

     For Ind := 1 To Length(Texto) Do
         Begin

         If Texto[Ind] <> Caracter Then
            Begin
            Resultado := Resultado + Texto[Ind];
            End
         Else
            Begin
            Resultado := Resultado + Troca;
         End;

     End;

     Troca_Caracter := Trim(Resultado);
end;

// ******************
// *** Procedures ***
// ******************

procedure Seta();
begin
     Screen.Cursor := crDefault; // *** Tira a Ampulheta do Cursor ***
end;

procedure Ampulheta();
begin
     Screen.Cursor := crHourglass; // *** Coloca a Ampúlheta no cursor ***
end;

procedure So_Valor(Sender: TObject; var Key: Char);
begin
     If Key <> #22 Then
        Begin
        If Not(key in ['0'..'9','-','.',',',#8,#13]) Then
           Begin
           key := #0;
        End;

        If key in [',','.'] Then
           Begin
           key := DecimalSeparator;
        End;

        If key = DecimalSeparator Then
           Begin
           If pos(key,TEdit(Sender).Text) <> 0 Then
              Begin
              key := #0;
           End;
        End;
     End;
end;

procedure So_Numero(Sender: TObject; var Key: Char);
begin
     If Key <> #22 Then
        Begin
        If Not(key in ['0'..'9','-',#8,#13]) Then
           Begin
           key := #0;
        End;
     End;
end;

procedure So_Numero_Ponto(Sender: TObject; var Key: Char);
begin
     If Key <> #22 Then
        Begin
        If Not(key in ['0'..'9','.','-',#8,#13]) Then
           Begin
           key := #0;
        End;
     End;
end;

procedure So_Data(Sender: TObject; var Key: Char);
begin
     If Key <> #22 Then
        Begin
        If Not(key in ['0'..'9','/',#8,#13]) Then
           Begin
           key := #0;
        End;
     End;
end;

procedure So_Numero_Menos(Sender: TObject; var Key: Char);
begin
     If Key <> #22 Then
        Begin
        If Not(key in ['0'..'9','-',#8,#13,#45]) Then
           Begin
           key := #0;
        End;
     End;   
end;

procedure Abre_Conexao();
begin
     Ampulheta();

     ConexaoBD.Conexao_Principal.Connected := True;

     Seta();
end;

procedure Fecha_Conexao();
begin
     Ampulheta();

     ConexaoBD.Conexao_Principal.Connected  := False;
     ConexaoBD.Conexao_Principal.Close;

     Seta();
end;

end.
