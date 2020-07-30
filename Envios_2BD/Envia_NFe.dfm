object EnviaNFe: TEnviaNFe
  Left = 259
  Top = 114
  BorderIcons = [biSystemMenu, biMinimize]
  BorderStyle = bsSingle
  Caption = 'Envio Autom'#225'tico das NF-e e DANFEs'
  ClientHeight = 329
  ClientWidth = 679
  Color = clBtnFace
  Font.Charset = DEFAULT_CHARSET
  Font.Color = clWindowText
  Font.Height = -11
  Font.Name = 'MS Sans Serif'
  Font.Style = []
  Icon.Data = {
    0000010001002020100000000000E80200001600000028000000200000004000
    0000010004000000000080020000000000000000000000000000000000000000
    000000008000008000000080800080000000800080008080000080808000C0C0
    C0000000FF0000FF000000FFFF00FF000000FF00FF00FFFF0000FFFFFF009999
    999999999999999999999999999994444F00F40F444444444444444444499C44
    4F00F40F444444444444444444499CC44F0F0F0F444444440000004444499CCC
    4F0F0F0F444440008888880044499CCCCF04F00F444008888888888804499CCC
    CF00000F4008F8F8F8F8888804499CCCCF04F00F0F8F88888888800004499CCC
    CF0F0040F8F8F8F8F800078804499CCCCCF0040F8F888F880077787804499CCC
    CCCFC0F8F8F8F8F00787878044499CCCCCCC0F8F8F8F80070878788044499CCC
    CCC0F8F8F8F807770787880444499CCCCCC0FFFF8F8077780878780444499CCC
    CC08F8F8F80F77870787804444499CCCCC0FFF8F80F0F7780878044444499CCC
    C0F8F8F8078F0F870787044444499CCCC0FF8FF07777F0F80880444444499CCC
    C0F8F8F077878F0F0804444444499CCC0FFFFF07777878F00044444444499CCC
    0FF8F000000000000F4F444444499CCC0FFFF07778787880F0F0F44444499CCC
    0FF807878787870CCF00F44444499CCC0FFF0778787870CCF000F44444499CCC
    0FF8078787800CCCCFFF0F4444499CCC0FF07878780CCCCCCCCCFF4444499CCC
    C0F0777700CCCCCCCCCCCC4444499CCCC0F07700CCCCCCCCCCCCCCC444499CCC
    CC0000CCCCCCCCCCCCCCCCCC44499CCCCCCCCCCCCCCCCCCCCCCCCCCCC4499CCC
    CCCCCCCCCCCCCCCCCCCCCCCCCC49999999999999999999999999999999990000
    0000000000000000000000000000000000000000000000000000000000000000
    0000000000000000000000000000000000000000000000000000000000000000
    0000000000000000000000000000000000000000000000000000000000000000
    000000000000000000000000000000000000000000000000000000000000}
  OldCreateOrder = False
  Position = poScreenCenter
  OnCreate = FormCreate
  OnShow = FormShow
  PixelsPerInch = 96
  TextHeight = 13
  object GroupBox1: TGroupBox
    Left = 4
    Top = 71
    Width = 672
    Height = 187
    Caption = '   Lista de NF-e a serem enviadas   '
    TabOrder = 0
    object DBGrid_Pedidos: TDBGrid
      Left = 6
      Top = 15
      Width = 658
      Height = 164
      Ctl3D = False
      DataSource = ConexaoBD.DS_Pedidos
      Options = [dgTitles, dgIndicator, dgColumnResize, dgColLines, dgRowLines, dgTabs, dgRowSelect, dgConfirmDelete, dgCancelOnExit, dgMultiSelect]
      ParentCtl3D = False
      ReadOnly = True
      TabOrder = 0
      TitleFont.Charset = DEFAULT_CHARSET
      TitleFont.Color = clWindowText
      TitleFont.Height = -11
      TitleFont.Name = 'MS Sans Serif'
      TitleFont.Style = []
      OnCellClick = DBGrid_PedidosCellClick
      OnDrawColumnCell = DBGrid_PedidosDrawColumnCell
      Columns = <
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_numero'
          Title.Caption = 'Nro.NF-e'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Width = 70
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_cliente_codigo'
          Title.Caption = 'C'#243'digo'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Width = 103
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_razao_social'
          Title.Caption = 'Cliente'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Width = 206
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_valor_total'
          Title.Caption = 'Valor (R$)'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_data_emissao'
          Title.Caption = 'Emiss'#227'o'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_cfop'
          Title.Caption = 'CFOP'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Width = 37
          Visible = True
        end
        item
          Expanded = False
          FieldName = 'mgt_nota_fiscal_status_envio'
          Title.Caption = 'Envio'
          Title.Font.Charset = DEFAULT_CHARSET
          Title.Font.Color = clWindowText
          Title.Font.Height = -11
          Title.Font.Name = 'MS Sans Serif'
          Title.Font.Style = [fsBold]
          Width = 75
          Visible = True
        end>
    end
  end
  object GroupBox2: TGroupBox
    Left = 4
    Top = 260
    Width = 672
    Height = 66
    Caption = '   Op'#231#245'es   '
    TabOrder = 1
    object BT_Sair: TBitBtn
      Left = 590
      Top = 11
      Width = 75
      Height = 25
      Caption = '&Sair'
      TabOrder = 0
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
    object Posicao_1: TEdit
      Left = 371
      Top = 14
      Width = 8
      Height = 19
      Ctl3D = False
      MaxLength = 13
      ParentCtl3D = False
      TabOrder = 1
      Visible = False
    end
    object Opc_Manual: TRadioButton
      Left = 8
      Top = 17
      Width = 360
      Height = 17
      Caption = 
        'Envio Manual (Com esta op'#231#227'o '#233' necess'#225'rio escolher a NF-e deseja' +
        'da)'
      TabOrder = 2
      OnClick = Opc_ManualClick
    end
    object Opc_Automatica: TRadioButton
      Left = 8
      Top = 40
      Width = 604
      Height = 17
      Caption = 
        'Envio Autom'#225'tico (Com esta op'#231#227'o '#233' necess'#225'rio deixar este aplica' +
        'tivo aberto, o envio ocorrer'#225' no intervalo de 10 minutos)'
      Checked = True
      TabOrder = 3
      TabStop = True
      OnClick = Opc_AutomaticaClick
    end
    object BT_Organizar: TBitBtn
      Left = 479
      Top = 11
      Width = 108
      Height = 25
      Caption = '&Organizar XML'
      TabOrder = 4
      OnClick = BT_OrganizarClick
      Glyph.Data = {
        76010000424D7601000000000000760000002800000020000000100000000100
        04000000000000010000130B0000130B00001000000000000000000000000000
        800000800000008080008000000080008000808000007F7F7F00BFBFBF000000
        FF0000FF000000FFFF00FF000000FF00FF00FFFF0000FFFFFF00333333333333
        3333333FFF33F333FF3F330E0330FFFCCFCC33777FF7F3377F7730EEE030FFFC
        CFCC377777F7F33773770EEE0000FFFFFCCF777777773F33377FEEE0BFBF0FFF
        FCCF7777333373F337730E0BFBFBF0FFCCFF77733333373F77F330BFBFBFBF0F
        CCFF37F333333F7F773330FBFBFB0B0FFFFF37F3F33F737FFFFF30B0BF0FB000
        000037F73F73F777777730FB0BF0FB0FFFFF373F73F73F7F333F330030BF0F0F
        FF993F77373F737F3377CC33330BF00FFF9977FFF373F77F3F77CC993330009F
        99FF7777F337777F77F333993330F99F99FF3F77FF37F773773F993CC330FFF9
        9F9977F77F37F3377F77993CC330FFF99F997737733733377377}
      NumGlyphs = 2
    end
  end
  object GroupBox3: TGroupBox
    Left = 4
    Top = 7
    Width = 672
    Height = 62
    Caption = '   Op'#231#227'o de Procura   '
    TabOrder = 2
    object Label1: TLabel
      Left = 6
      Top = 16
      Width = 95
      Height = 13
      Caption = 'Dados para Procura'
    end
    object Label2: TLabel
      Left = 449
      Top = 16
      Width = 37
      Height = 13
      Caption = 'Op'#231#245'es'
    end
    object BT_Sobre: TLabel
      Left = 627
      Top = 9
      Width = 40
      Height = 13
      Cursor = crHandPoint
      Caption = '<Sobre>'
      OnClick = BT_SobreClick
    end
    object Dados_Procura: TEdit
      Left = 6
      Top = 31
      Width = 440
      Height = 19
      Color = clWhite
      Ctl3D = False
      ParentCtl3D = False
      TabOrder = 0
    end
    object Opcoes_Procura: TComboBox
      Left = 449
      Top = 31
      Width = 136
      Height = 19
      BevelInner = bvNone
      BevelKind = bkSoft
      Style = csOwnerDrawFixed
      Ctl3D = False
      ItemHeight = 13
      ItemIndex = 0
      ParentCtl3D = False
      TabOrder = 1
      Text = 'Nro.NF-e'
      Items.Strings = (
        'Nro.NF-e'
        'Cliente')
    end
    object BT_Procurar: TBitBtn
      Left = 590
      Top = 28
      Width = 75
      Height = 25
      Caption = '&Procurar'
      TabOrder = 2
      OnClick = BT_ProcurarClick
      Glyph.Data = {
        36050000424D360500000000000036040000280000000E000000100000000100
        08000000000000010000CA0E0000C30E00000001000000000000000000003300
        00006600000099000000CC000000FF0000000033000033330000663300009933
        0000CC330000FF33000000660000336600006666000099660000CC660000FF66
        000000990000339900006699000099990000CC990000FF99000000CC000033CC
        000066CC000099CC0000CCCC0000FFCC000000FF000033FF000066FF000099FF
        0000CCFF0000FFFF000000003300330033006600330099003300CC003300FF00
        330000333300333333006633330099333300CC333300FF333300006633003366
        33006666330099663300CC663300FF6633000099330033993300669933009999
        3300CC993300FF99330000CC330033CC330066CC330099CC3300CCCC3300FFCC
        330000FF330033FF330066FF330099FF3300CCFF3300FFFF3300000066003300
        66006600660099006600CC006600FF0066000033660033336600663366009933
        6600CC336600FF33660000666600336666006666660099666600CC666600FF66
        660000996600339966006699660099996600CC996600FF99660000CC660033CC
        660066CC660099CC6600CCCC6600FFCC660000FF660033FF660066FF660099FF
        6600CCFF6600FFFF660000009900330099006600990099009900CC009900FF00
        990000339900333399006633990099339900CC339900FF339900006699003366
        99006666990099669900CC669900FF6699000099990033999900669999009999
        9900CC999900FF99990000CC990033CC990066CC990099CC9900CCCC9900FFCC
        990000FF990033FF990066FF990099FF9900CCFF9900FFFF99000000CC003300
        CC006600CC009900CC00CC00CC00FF00CC000033CC003333CC006633CC009933
        CC00CC33CC00FF33CC000066CC003366CC006666CC009966CC00CC66CC00FF66
        CC000099CC003399CC006699CC009999CC00CC99CC00FF99CC0000CCCC0033CC
        CC0066CCCC0099CCCC00CCCCCC00FFCCCC0000FFCC0033FFCC0066FFCC0099FF
        CC00CCFFCC00FFFFCC000000FF003300FF006600FF009900FF00CC00FF00FF00
        FF000033FF003333FF006633FF009933FF00CC33FF00FF33FF000066FF003366
        FF006666FF009966FF00CC66FF00FF66FF000099FF003399FF006699FF009999
        FF00CC99FF00FF99FF0000CCFF0033CCFF0066CCFF0099CCFF00CCCCFF00FFCC
        FF0000FFFF0033FFFF0066FFFF0099FFFF00CCFFFF00FFFFFF00000000000000
        0000000000000000000000000000000000000000000000000000000000000000
        0000000000000000000000000000000000000000000000000000000000000000
        0000000000000000000000000000000000000000000000000000000000000000
        0000000000000000000000000000000000000000000000000000000000000000
        0000000000000000000000000000000000000000000000000000ACACACACACAC
        ACACACAC0000ACAC0000ACACACACACACACACAC02230500AC0000ACAC00000000
        00000223050500000000ACAC56ACACACAC02230505ACAC000000ACAC56D7D7D7
        02230505ACD7AC000000ACAC56000056AC0505ACD7D7AC000000AC56AC23AC00
        5656ACD7D7D7AC00000056D723AC23AC00ACD7D7D7D7AC0000005623D723AC23
        00ACD7D7D7D7AC00000056D723D723AC00ACD7D7D7D7AC000000AC56D723D700
        ACD7D7D7D7D7AC000000ACAC565600ACD7D7D7D7D7D7AC000000ACAC56D7D7D7
        D7D7D7D700000000FFFFACAC56D7D7D7D7D7D7D7ACD756AC0000ACAC56D7D7D7
        D7D7D7D7AC56ACAC0000ACAC565656565656565656ACACAC0000}
    end
  end
  object IdSMTP: TIdSMTP
    MaxLineAction = maException
    ReadTimeout = 0
    Port = 587
    AuthenticationType = atLogin
    Left = 419
    Top = 269
  end
  object IdMessage: TIdMessage
    AttachmentEncoding = 'MIME'
    BccList = <>
    CCList = <>
    Encoding = meMIME
    Recipients = <>
    ReplyTo = <>
    Left = 450
    Top = 269
  end
  object Intervalo_Envio: TTimer
    Enabled = False
    Interval = 600000
    OnTimer = Intervalo_EnvioTimer
    Left = 387
    Top = 269
  end
end
