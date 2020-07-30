function helpHook(keyEvent)
{
  if ((keyEvent.type=="keydown") && (keyEvent.keyCode==112))
  {
    focushandler=qx.ui.core.FocusHandler.getInstance();
    focuswidget=focushandler.getFocusedWidget();
    if (focuswidget)
    {
      if (focuswidget.helpcontext!=0) alert(focuswidget.helpcontext)
      else if (focuswidget.helpkeyword!='') alert(focuswidget.helpkeyword)
    }
  }
}