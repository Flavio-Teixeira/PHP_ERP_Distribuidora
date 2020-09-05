unit uJQmobilePropertyEditor;

interface

uses Windows, Classes, Dialogs, Controls,
     Forms, Graphics, SysUtils, ComCtrls, D4PHPIntf, valEdit, uArrayEditor,
     uNativePropertyEditors, grids;


 type
    // TMComboBoxPropertyEditor
    TMComboBoxPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesGetPickList(Sender: TObject; const KeyName: string; Values: TStrings);
        procedure vePropertiesEditButtonClick(Sender: TObject);
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
    end;

    // TMListPropertyEditor
    TMListPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesGetPickList(Sender: TObject; const KeyName: string; Values: TStrings);
        procedure vePropertiesEditButtonClick(Sender: TObject);
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
    end;

    // TMToolBarPropertyEditor
    TMToolBarPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
        procedure vePropertiesGetPickList(Sender: TObject; const KeyName: string; Values: TStrings);
        procedure vePropertiesEditButtonClick(Sender: TObject);
    end;


implementation


// TMComboBoxPropertyEditor
procedure TMcomboBoxPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'MComboBox Items Editor';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Value';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Key=');
            add('Value=');
            add('Group=');
            add('Disabled=false');
            add('PlaceHolder=false');
        end;

        // specify that properties are numerical
        (*
        with typeProperties do begin
             add('Group=n');
        end; *)

        // Fixed caption column
        veProperties.FixedCols := 1;
        veProperties.OnGetPickList := vePropertiesGetPickList;
        veProperties.OnEditButtonClick := vePropertiesEditButtonClick;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TMcomboBoxPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Item' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TMcomboBoxPropertyEditor.vePropertiesEditButtonClick(
    Sender: TObject);
begin

end;

procedure TMcomboBoxPropertyEditor.vePropertiesGetPickList(
    Sender: TObject; const KeyName: string; Values: TStrings);
begin
    if (KeyName = 'Disabled') then begin
        with values do begin
            add('true');
            add('false');
        end;
    end;
    if (KeyName = 'PlaceHolder') then begin
        with values do begin
            add('true');
            add('false');
        end;
    end;
end;

procedure TMcomboBoxPropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;


// TMListPropertyEditor
procedure TMListPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'MList Items Editor';
        captionproperty := 'Caption';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Caption=');
            add('Link=');
            add('Icon=');
            add('MList=');
            add('ExtraButtonHint=');
            add('ExtraButtonLink=');
            add('IsDivider=false');
            add('CounterValue=');
            add('Thumbnail=');
            add('IsIcon=false');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnGetPickList := vePropertiesGetPickList;
        veProperties.OnEditButtonClick := vePropertiesEditButtonClick;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TMListPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Item' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TMListPropertyEditor.vePropertiesEditButtonClick(Sender: TObject);
var
    value, ImageFile, s: string;
begin
    if (latestkeyname = 'Thumbnail') then begin
        value := (sender as TValueListEditor).Values[latestkeyname];
        // Get path of the current module
        s := scriptfilename;
        with TImagePropertyEditor.Create(nil) do begin
            try
                // I assign the path of current module to property scriptfilename
                // of class TImagePropertyEditor
                scriptFilename := s;
                execute(value, ImageFile);
                (sender as TValueListEditor).Values[latestkeyname] := ImageFile;
            finally
                Free;
            end;
        end;
    end;
end;

procedure TMListPropertyEditor.vePropertiesGetPickList(
    Sender: TObject; const KeyName: string; Values: TStrings);
begin
    if (KeyName = 'Icon') then begin
        with values do begin
            add('siArrowL');
            add('siArrowR');
            add('siArrowU');
            add('siArrowD');
            add('siDelete');
            add('siPlus');
            add('siMinus');
            add('siCheck');
            add('siGear');
            add('siRefresh');
            add('siForward');
            add('siFack');
            add('siGrid');
            add('siStar');
            add('siAlert');
            add('siInfo');
            add('siSearch');
            add('siHome');
        end;
    end;

    if (KeyName = 'MList') then begin
        getcomponents('MList', values);
    end;

    if (KeyName = 'IsDivider') then begin
        with values do begin
            add('true');
            add('false');
        end;
    end;

    if (KeyName = 'IsIcon') then begin
        with values do begin
            add('true');
            add('false');
        end;
    end;

    if (KeyName = 'Thumbnail') then begin
        (sender as TValueListEditor).ItemProps[KeyName].EditStyle := esEllipsis;
    end;
end;

procedure TMListPropertyEditor.vePropertiesSelectCell(Sender: TObject;
    ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;


// TMToolBarPropertyEditor
procedure TMToolBarPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'MToolBar Items Editor';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Caption';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Caption=');
            add('Link=#');
            add('SystemIcon=');
            add('Icon=');
            add('NoAjax=false');
            add('Transition=');
            add('OpenDialog=false');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnGetPickList := vePropertiesGetPickList;
        veProperties.OnEditButtonClick := vePropertiesEditButtonClick;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TMToolBarPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Item' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TMToolBarPropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;

procedure TMToolBarPropertyEditor.vePropertiesEditButtonClick(Sender: TObject);
var
    value, ImageFile, s: string;
begin
    if (latestkeyname = 'Icon') then begin
        value := (sender as TValueListEditor).Values[latestkeyname];
        // Get path of the current module
        s := scriptfilename;
        with TImagePropertyEditor.Create(nil) do begin
            try
                // I assign the path of current module to property scriptfilename
                // of class TImagePropertyEditor
                scriptFilename := s;
                execute(value, ImageFile);
                (sender as TValueListEditor).Values[latestkeyname] := ImageFile;
            finally
                Free;
            end;
        end;
    end;
end;


procedure TMToolBarPropertyEditor.vePropertiesGetPickList(
    Sender: TObject; const KeyName: string; Values: TStrings);
begin
    if (KeyName = 'SystemIcon') then begin
        with values do begin
            add('siArrowL');
            add('siArrowR');
            add('siArrowU');
            add('siArrowD');
            add('siDelete');
            add('siPlus');
            add('siMinus');
            add('siCheck');
            add('siGear');
            add('siRefresh');
            add('siForward');
            add('siFack');
            add('siGrid');
            add('siStar');
            add('siAlert');
            add('siInfo');
            add('siSearch');
            add('siHome');
        end;
    end;

    if (KeyName = 'Transition') then begin
        with values do begin
            add('trSlide');
            add('trSlideup');
            add('trSlidedown');
            add('trPop');
            add('trFade');
            add('trFlip');
        end;
    end;

    if (KeyName = 'Icon') then
        (sender as TValueListEditor).ItemProps[KeyName].EditStyle := esEllipsis;
end;


initialization
    registerPropertyEditor('MComboBox','Items', TMComboBoxPropertyEditor);
    registerPropertyEditor('MList','Items', TMListPropertyEditor);
    registerPropertyEditor('MToolBar','Items', TMToolBarPropertyEditor);

end.
