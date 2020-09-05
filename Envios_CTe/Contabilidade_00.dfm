object Contabilidade00: TContabilidade00
  Left = 259
  Top = 114
  BorderStyle = bsDialog
  Caption = 'Envio de XML para a Contabilidade'
  ClientHeight = 188
  ClientWidth = 201
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  OldCreateOrder = False
  Position = poScreenCenter
  PixelsPerInch = 96
  TextHeight = 13
  object GroupBox1: TGroupBox
    Left = 8
    Top = 8
    Width = 185
    Height = 126
    Caption = '  M'#234's / Ano  '
    TabOrder = 0
    object Label1: TLabel
      Left = 35
      Top = 43
      Width = 23
      Height = 13
      Caption = 'M'#234's:'
    end
    object Label2: TLabel
      Left = 91
      Top = 43
      Width = 22
      Height = 13
      Caption = 'Ano:'
    end
    object Label3: TLabel
      Left = 14
      Top = 16
      Width = 156
      Height = 13
      Caption = 'Informe o M'#234's e o Ano desejado:'
    end
    object LBL_Status: TLabel
      Left = 6
      Top = 104
      Width = 172
      Height = 13
      Alignment = taCenter
      AutoSize = False
      Caption = 'Aguardando Gera'#231#227'o'
      Font.Charset = DEFAULT_CHARSET
      Font.Color = clRed
      Font.Height = -11
      Font.Name = 'MS Sans Serif'
      Font.Style = []
      ParentFont = False
    end
    object Label4: TLabel
      Left = 8
      Top = 64
      Width = 114
      Height = 13
      Caption = 'E-Mail da Contabilidade:'
    end
    object Mes: TEdit
      Left = 61
      Top = 40
      Width = 19
      Height = 19
      Color = clWhite
      Ctl3D = False
      MaxLength = 2
      ParentCtl3D = False
      TabOrder = 0
      OnKeyPress = MesKeyPress
    end
    object Ano: TEdit
      Left = 117
      Top = 40
      Width = 31
      Height = 19
      Color = clWhite
      Ctl3D = False
      MaxLength = 4
      ParentCtl3D = False
      TabOrder = 1
      OnKeyPress = AnoKeyPress
    end
    object EMail_Contabilidade: TEdit
      Left = 8
      Top = 80
      Width = 169
      Height = 19
      Color = clWhite
      Ctl3D = False
      ParentCtl3D = False
      TabOrder = 2
      OnKeyPress = EMail_ContabilidadeKeyPress
    end
  end
  object GroupBox2: TGroupBox
    Left = 9
    Top = 135
    Width = 185
    Height = 48
    Caption = '  Op'#231#245'es  '
    TabOrder = 1
    object BT_Sair: TBitBtn
      Left = 102
      Top = 15
      Width = 75
      Height = 25
      Caption = '&Sair'
      TabOrder = 1
      OnClick = BT_SairClick
      Glyph.Data = {
        76010000424D7601000000000000760000002800000020000000100000000100
        04000000000000010000120B0000120B00001000000000000000000000000000
        800000800000008080008000000080008000808000007F7F7F00BFBFBF000000
        FF0000FF000000FFFF00FF000000FF00FF00FFFF0000FFFFFF00330000000000
        03333377777777777F333301111111110333337F333333337F33330111111111
        0333337F333333337F333301111111110333337F333333337F33330111111111
        0333337F333333337F333301111111110333337F333333337F33330111111111
        0333337F3333333F7F333301111111B10333337F333333737F33330111111111
        0333337F333333337F333301111111110333337F33FFFFF37F3333011EEEEE11
        0333337F377777F37F3333011EEEEE110333337F37FFF7F37F3333011EEEEE11
        0333337F377777337F333301111111110333337F333333337F33330111111111
        0333337FFFFFFFFF7F3333000000000003333377777777777333}
      NumGlyphs = 2
    end
    object BT_Gerar: TBitBtn
      Left = 6
      Top = 15
      Width = 75
      Height = 25
      Caption = '&Gerar'
      TabOrder = 0
      OnClick = BT_GerarClick
      Glyph.Data = {
        76010000424D7601000000000000760000002800000020000000100000000100
        04000000000000010000120B0000120B00001000000000000000000000000000
        800000800000008080008000000080008000808000007F7F7F00BFBFBF000000
        FF0000FF000000FFFF00FF000000FF00FF00FFFF0000FFFFFF00555555555555
        555555555555555555555555555555555555555555FF55555555555559055555
        55555555577FF5555555555599905555555555557777F5555555555599905555
        555555557777FF5555555559999905555555555777777F555555559999990555
        5555557777777FF5555557990599905555555777757777F55555790555599055
        55557775555777FF5555555555599905555555555557777F5555555555559905
        555555555555777FF5555555555559905555555555555777FF55555555555579
        05555555555555777FF5555555555557905555555555555777FF555555555555
        5990555555555555577755555555555555555555555555555555}
      NumGlyphs = 2
    end
  end
  object IdSMTP: TIdSMTP
    MaxLineAction = maException
    ReadTimeout = 0
    Port = 25
    AuthenticationType = atLogin
    Left = 530
    Top = 269
  end
  object IdMessage: TIdMessage
    AttachmentEncoding = 'MIME'
    BccList = <>
    CCList = <>
    Encoding = meMIME
    Recipients = <>
    ReplyTo = <>
    Left = 562
    Top = 269
  end
end
