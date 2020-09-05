unit uZendPropertyEditors;

interface

 uses Windows, Classes, Dialogs, Controls,
    Forms, Graphics, SysUtils, D4PHPIntf,
    ComCtrls, valedit, grids, FileCtrl, AnsiStrings, uArrayEditor,
    uNativePropertyEditors;


type
    TZFeedAuthorsPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
    end;

    TZFeedLinksPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
        procedure vePropertiesGetPickList(Sender: TObject; const KeyName: string; Values: TStrings);
    end;

    TZFeedImagePropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
    end;

    TZFeedCategoriesPropertyEditor = class(TArrayPropertyEditor)
    private
        latestkeyname: string;
    public
        procedure beforeShowEditor(dialog: TForm); override;
        procedure vePropertiesSelectCell(Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
        procedure GetNewItemCaption(Sender: TObject; var itemcaption: string);
    end;

implementation


// TZFeedAuthorsPropertyEditor
procedure TZFeedAuthorsPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'Authors info';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Name';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Email=');
            add('Uri=');
            add('Name=');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TZFeedAuthorsPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Author' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TZFeedAuthorsPropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;

// TZFeedLinksPropertyEditor
procedure TZFeedLinksPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'Feedlinks info';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Value';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Uri=');
            add('Type=');
            add('Value=');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnGetPickList := vePropertiesGetPickList;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TZFeedLinksPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Feedlinks' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TZFeedLinksPropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;

procedure TZFeedLinksPropertyEditor.vePropertiesGetPickList(
    Sender: TObject; const KeyName: string; Values: TStrings);
begin
    if (KeyName = 'Type') then begin
        with values do begin
            add('atom');
            add('rss');
            add('rdf');
        end;
    end;
end;

// TZFeedImagePropertyEditor
procedure TZFeedImagePropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'Image info';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Value';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Uri=');
            add('Link=');
            add('Title=');
            add('Description=');
            add('Height=');
            add('Width=');
            add('Value=');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TZFeedImagePropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Image' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TZFeedImagePropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;

// TZFeedCategoriesPropertyEditor
procedure TZFeedCategoriesPropertyEditor.beforeShowEditor(dialog: TForm);
begin
    inherited;
    latestkeyname := '';
    with dialog as TArrayEditorDlg do begin
        OnGetNewItemCaption := GetNewItemCaption;
        caption := 'Categories info';
        btnNewSubItem.Visible := false;
        btnLoad.Visible := false;
        captionproperty := 'Value';
        btnDelete.Top := btnNewSubItem.top;
        with defaultproperties do begin
            add('Term=');
            add('Label=');
            add('Scheme=');
            add('Value=');
        end;
        veProperties.FixedCols := 1;
        veProperties.OnSelectCell := vePropertiesSelectCell;
    end;
end;

procedure TZFeedCategoriesPropertyEditor.GetNewItemCaption(Sender: TObject;
    var itemcaption: string);
begin
    itemcaption := 'Category' + inttostr((sender as TArrayEditorDlg).tvItems.Items.Count + 1);
end;

procedure TZFeedCategoriesPropertyEditor.vePropertiesSelectCell(
    Sender: TObject; ACol, ARow: Integer; var CanSelect: Boolean);
begin
    latestkeyname := (sender as TValueListEditor).Cells[0, Arow];
end;



initialization
    registerPropertyEditor('ZFeedWriter','AuthorsFeed',TZFeedAuthorsPropertyEditor);
    registerPropertyEditor('ZFeedWriter','FeedLinksFeed',TZFeedLinksPropertyEditor);
    registerPropertyEditor('ZFeedWriter','ImagesFeed',TZFeedImagePropertyEditor);
    registerPropertyEditor('ZFeedWriter','CategoriesFeed',TZFeedCategoriesPropertyEditor);
    registerPropertyEditor('ZBarcode','FontPath',TDirectoryPropertyEditor);

end.
