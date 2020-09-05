<?php
/**
*  This file is part of the RPCL project
*
*  Copyright (c) 2004-2011 Embarcadero Technologies, Inc.
*
*  Checkout AUTHORS file for more information on the developers
*
*  This library is free software; you can redistribute it and/or
*  modify it under the terms of the GNU Lesser General Public
*  License as published by the Free Software Foundation; either
*  version 2.1 of the License, or (at your option) any later version.
*
*  This library is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
*  Lesser General Public License for more details.
*
*  You should have received a copy of the GNU Lesser General Public
*  License along with this library; if not, write to the Free Software
*  Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
*  USA
*
*/

require_once("rpcl/rpcl.inc.php");
//Includes
use_unit("qooxdoo/grids.inc.php");
use_unit("qooxdoo/comctrls.inc.php");

/**
 * Base class for DBGrid.
 *
 * DBGrid displays and manipulates records from a dataset in a tabular grid.
 *
 * Put a DBGrid object on a form to display and edit the records from a database
 * table or query. Applications can use the data grid to insert, delete, or edit
 * data in the database, or simply to display it.
 *
 * At runtime, users can use the database paginator (DBPaginator) to move through
 * data in the grid, and to insert, delete, and edit the data. Edits that are made
 * in the data grid are not posted to the underlying dataset until the user moves
 * to a different record or closes the application.
 *
 */
class QCustomDBGrid extends QCustomGrid
{
  protected $_datasource=null;

  protected $_database;
  protected $_deletelink='';
  protected $_showstatusbar=1;
  protected $_readonly=0;

  protected $_ondatachanged=null;
  protected $_jsondatachanged=null;
  protected $_jsonrowsaved=null;
  protected $_jsonrowchanged=null;

  function dumpGUICode()
  {
    echo $this->Name . "_tableModel = new qx.ui.table.model.Simple();\n";
    $this->dumpColumns();
    $this->dumpRows();
    if ($this->_showstatusbar == false)
      echo "$this->Name.setStatusBarVisible(false);\n";
    if (($this->ControlState & csDesigning) != csDesigning)
    {
      echo $this->Name . "_tableModel.addListener(\"dataChanged\", " . $this->Name . "_rpcdatachanged, " . $this->Name . "_tableModel);\n";
      if (($this->_jsonrowchanged!="") && ($this->_jsonrowchanged!=null))
        echo "$this->Name.getSelectionModel().addListener(\"changeSelection\", $this->_jsonrowchanged);\n";
    }

    parent::dumpGUICode();
  }

  function __construct($aowner=null)
  {
    //Calls inherited constructor
    parent::__construct($aowner);

    $this->Width=400;
    $this->Height=200;
  }

  function renderColumn($a_col, $counter)
  {
    if (array_key_exists('Width', $a_col))
    {
      $col_width = $a_col['Width'];
      //echo $this->Name . "_resize.setWidth($counter, $col_width);\n";
      echo $this->Name . "_tcm.setColumnWidth($counter, $col_width);\n";
    }

    if ($this->_readonly)
      echo $this->Name . "_tableModel.setColumnEditable($counter, false);\n";
    else
    {
      if (array_key_exists('ReadOnly', $a_col))
      {
        $read_only = $a_col['ReadOnly'];
        if ($read_only == false)
          $to_edit = 'false';
        else $to_edit = 'true';
        echo $this->Name . "_tableModel.setColumnEditable($counter, $to_edit);\n";
      }
    }

    if (array_key_exists('Alignment', $a_col))
      $alignment = $a_col['Alignment'];
    else $alignment = 'taLeftJustify';

    if (array_key_exists('Color', $a_col))
      $color = $a_col['Color'];
    else $color = '';

    if (array_key_exists('FontColor', $a_col))
      $font_color = $a_col['FontColor'];
    else $font_color = '';

    if (($alignment != 'taLeftJustify') || ($color != '') || ($font_color != ''))
    {
      switch($alignment)
      {
        case "taLeftJustify": $align='left'; break;
        case "taRightJustify": $align='right'; break;
        case "taCenter": $align='center'; break;
      }

      if ($color != '') $style = 'background-color=$color';
      else $style = '';

      echo "renderer = new qx.ui.table.cellrenderer.Html(\"$align\", \"$font_color\", \"$style\", \"\");\n";
      echo $this->Name . "_tcm.setDataCellRenderer($counter, renderer);\n";
    }

    if (array_key_exists('PickList', $a_col))
    {
      $pick_list = $a_col['PickList'];
      if (is_string($pick_list)) $pick_list = safeunserialize($pick_list);
      if (is_array($pick_list) && count($pick_list) > 0)
      {
        echo "cellEditor = new qx.ui.table.celleditor.ComboBox();\n";
        echo "cellData = [];\n";
        foreach($pick_list as $k=>$v)
          echo "cellData.push([\"$v\"]);\n";
        echo "cellEditor.setListData(cellData);\n";
        echo $this->Name . "_tcm.setCellEditorFactory($counter, cellEditor);\n";
      }
    }

    if (array_key_exists('Visible', $a_col))
    {
      $visible = $a_col['Visible'];
      if ($visible == 'false')
        echo $this->Name . "_tcm.setColumnVisible($counter, false);\n";
    }
  }

  function renderColumnByField($props, $counter)
  {
      $dwidth=-1;
      $color = '';
      $alignment = '';

      if ($props)
      {
        if (array_key_exists('displaywidth', $props))
          $dwidth = $props['displaywidth'][0];

        if (array_key_exists('color', $props))
          $color = $props['color'][0];

        if (array_key_exists('alignment', $props))
          $alignment = $props['alignment'][0];
      }

      if ($dwidth != -1)
        echo $this->Name . "_tcm.setColumnWidth($counter, $dwidth);\n";
        //echo $this->Name . "_resize.setWidth($counter, $dwidth);\n";

      if (($color != '') || ($alignment != ''))
      {
        if ($alignment!='')
        {
          switch($alignment)
          {
            case "taLeftJustify": $alignment = 'left'; break;
            case "taRightJustify": $alignment = 'right'; break;
            case "taCenter": $alignment = 'center'; break;
          }
        }
        if ($color != '') $style = 'background-color=$color';
        else $style = '';
        echo "renderer = new qx.ui.table.cellrenderer.Html(\"$alignment\", \"\", \"$style\", \"\");\n";
        echo $this->Name . "_tcm.setDataCellRenderer($counter, renderer);\n";
      }

      $to_edit = 'true';
      if ($this->_readonly) $to_edit = 'false';
      echo $this->Name . "_tableModel.setColumnEditable($counter, $to_edit);\n";
  }

  function dumpColumns()
  {
    $this->setDataSource($this->_datasource);
    $all_columns = '';
    if (is_array($this->Columns) && (count($this->Columns) > 0) && ($this->ControlState & csDesigning) != csDesigning)
    {
      foreach($this->Columns as $k => $v)
      {
        if (is_array($v))
        {
          $caption = $v['Caption'];
          if (array_key_exists('Fieldname', $v))
          {
            $fname = $v['Fieldname'];
            if ($fname != '')
              $props = $this->_datasource->DataSet->readFieldProperties($fname);

            if ($props)
            {
              if (array_key_exists('displaylabel', $props))
                $caption = $props['displaylabel'][0];
            }
          }
          $caption = str_replace('"','\"', $caption);
          if ($all_columns == '') $all_columns = "\"" . $caption . "\"";
          else $all_columns .= ", \"" . $caption . "\"";
        }
      }
    }
    else if ((($this->ControlState & csDesigning) != csDesigning) && (is_object($this->_datasource)))
    {
      $ds = $this->_datasource->DataSet;
      if ($ds->Active)
      {
        $ds->first();
        $fields = $ds->Fields;
        foreach($fields as $fname => $value)
        {
          $props = $this->_datasource->DataSet->readFieldProperties($fname);
          $caption = $fname;
          if ($props)
          {
            if (array_key_exists('displaylabel', $props))
              $caption = $props['displaylabel'][0];
          }
          $caption = str_replace('"','\"', $caption);
          if ($all_columns == '') $all_columns = "\"" . $caption . "\"";
          else $all_columns .= ", \"" . $caption . "\"";
        }
      }
    }
    echo $this->Name . "_tableModel.setColumns([ $all_columns ]);\n";

/*    echo "var " . $this->Name . "_custom  = \n";
    echo "{\n";
    echo " tableColumnModel : function(obj) {\n";
    echo "    return new qx.ui.table.columnmodel.Resize(obj);\n";
    echo "  }\n";
    echo "};\n";*/

    //echo "$this->Name = new qx.ui.table.Table(" . $this->Name . "_tableModel, " . $this->Name . "_custom);\n";
    echo "$this->Name = new qx.ui.table.Table(" . $this->Name . "_tableModel);\n";
    echo $this->Name . "_tcm = $this->Name.getTableColumnModel();\n";
    //echo $this->Name . "_resize = " . $this->Name . "_tcm.getBehavior();\n";

    $counter = 0;
    if (is_array($this->_columns) && (count($this->_columns) > 0) && (($this->ControlState & csDesigning) != csDesigning))
    {
      foreach($this->Columns as $k => $v)
      {
        if (is_array($v))
          $this->renderColumn($v, $counter);
        $counter++;
      }
    }
    else if ((($this->ControlState & csDesigning) != csDesigning) && (is_object($this->_datasource)))
    {
      $ds = $this->_datasource->DataSet;
      if ($ds->Active)
      {
        $ds->first();
        $fields = $ds->Fields;
        $counter = 0;
        foreach($fields as $fname => $value)
        {
          $props = $this->_datasource->DataSet->readFieldProperties($fname);
          $this->renderColumnByField($props, $counter);
          $counter++;
        }
      }
    }
  }

  function dumpRows()
  {
    if (($this->ControlState & csDesigning) != csDesigning)
    {
      $bad_chars = array("\n\r", "\n", "\r", '"', "\\", '<', '>');
      $ok_chars = array('\n', '\n', '', '\"', '\\', '\<', '\>');

      $ds = $this->_datasource->DataSet;
      if ($ds->Active)
      {
        ///////////////// begin parra
        echo $this->Name . "_tableModel.ColumnNames=new Array(";
        $cnames = $ds->Fields;
        /*if (count($this->_columns))
        {
          $cnames=array();
          reset($this->_columns);
          while(list($key, $val) = each($this->_columns))
          {
            $cnames[$val['Fieldname']]='1';
          }
        } */

        if (is_array($cnames))
        {
          reset($cnames);
          $i = 0;
          while(list($fname, $value) = each($cnames))
          {
            if ($i>0) echo ",";
            echo '"' . $fname . '"';
            $i++;
          }
        }
        echo ");\n";

        /*$colvalues = array();
        if (count($this->_columns) >= 1)
        {
          reset($this->_columns);
          while(list($key, $val) = each($this->_columns))
          {
            $colvalues[$val['Fieldname']] = 1;
          }
        } */
        /////////////////////// END PARRA 1

        echo "var " . $this->Name . "_data = [];\n";
        echo $this->Name . "_orig_data = [];\n";
        $ds->First();
        while (!$ds->EOF)
        {
          /////////////// PARRA 2
          /*$rvalues = $ds->Fields;
          if (count($colvalues) >=1)
          {
            $avalues = array();
            reset($colvalues);
            while(list($key, $val) = each($colvalues))
            {
              $avalues[$key]=$rvalues[$key];
            }
            $rvalues=$avalues;
          }*/
          //////////////// END PARRA 2

          $all_values = '';
          foreach($ds->Fields as $fname => $fvalue)
          {
            $fvalue = str_replace($bad_chars, $ok_chars, $fvalue);
            if ($all_values == '') $all_values = '"' . $fvalue . '"';
            else $all_values .= ', "' . $fvalue . '"';
          }
          $ds->Next();
          echo $this->Name . "_data.push([" . $all_values . "]);\n";
          echo $this->Name . "_orig_data.push([" . $all_values . "]);\n";
        }
        echo $this->Name . "_tableModel.setData(" . $this->Name . "_data);\n";
        echo $this->Name . "_tableModel.originalData = " . $this->Name . "_orig_data;\n";
      }
    }
  }

  function dumpRPC()
  {
    echo "<script type=\"text/javascript\">\n";
    echo "function " . $this->Name . "_rpcdatachanged(event)\n";
    echo "{\n";
    if (($this->_jsondatachanged!="") && ($this->_jsondatachanged!=null))
    {
      echo $this->_jsondatachanged."(event);\n";
    }
    echo "  var obj;\n";
    echo "  obj=this;\n";
    echo "  data=event.getData();\n";
    echo "  modifiedRow=data.firstRow;\n";
    echo "\n";
    echo "  row=this.getRowData(modifiedRow);\n";
    echo "  orow=this.originalData[modifiedRow];\n";
    echo "\n";
    //echo "  qx.Settings.setCustomOfClass(\"qx.io.Json\", \"enableDebug\", true);\n";
    echo "\n";
    echo "  var rpc = new qx.io.remote.Rpc();\n";
    echo "  rpc.setTimeout(10000);\n";
    echo "  var mycall = null;\n";
    echo "  rpc.setUrl(\"" . $_SERVER['PHP_SELF'] . "\");\n";
    echo "  rpc.setServiceName(\"" . $this->owner->Name . "." . $this->Name . "\");\n";
    echo "  rpc.setCrossDomain(false);\n";
    echo "\n";
    echo "  mycall = rpc.callAsync\n";
    echo "  (\n";
    echo "    function(result, ex, id)\n";
    echo "    {\n";
    echo "      mycall = null;\n";
    echo "      event=new Object();\n";
    echo "      event.result=result;\n";
    echo "      event.ex=ex;\n";
    echo "      event.id=id;\n";
    echo "\n";
    echo "      if (result>=0)\n";
    echo "      {\n";
    echo "        if (obj)\n";
    echo "        {\n";
    echo "          row=obj.getRowData(result);\n";
    echo "          if (row)\n";
    echo "          {\n";
    echo "            obj.originalData[result]=row.slice();\n";
    echo "          }\n";
    echo "        }\n";
    echo "      }\n";

    if (($this->_jsonrowsaved!="") && ($this->_jsonrowsaved!=null))
    {
      echo $this->_jsonrowsaved."(event);";
    }

    echo "      send.setEnabled(true);\n";
    echo "      abort.setEnabled(false);\n";
    echo "    }\n";
    echo "    , \"updateRow\", this.ColumnNames, row, orow, modifiedRow\n";
    echo "  );\n";
    echo "}\n";
    echo "</script>\n";
}

/**
* To give permission to execute certain methods
*
* @param string $method Method for which we want to know the accessibility
* @param integer $defaccesibility If the method is not found, this will be returned
* @return integer
*/
function readAccessibility($method, $defaccessibility)
{
  switch($method)
  {
    case "updateRow": return Accessibility_Domain;
  }

  return(parent::readAccessibility($method, $defaccessibility));
}


/**
*  Updates a row of the attached datasource->dataset.
*
*  This method is called everytime the user changes a row on the dbgrid
*  to update the same row on the attached table.
*
*  @see getReadOnly()
*
*  @param array $params Array of parameters to this method
*  @param object $error RPC Error object to return if anything goes wrong
*  @return mixed
*/
function updateRow($params, $error)
{
  if (count($params) != 4)
  {
    $error->SetError(JsonRpcError_ParameterMismatch, "Expected 4 parameter; got " . count($params));
    return $error;
  }
  else
  {
    $fieldnames=$params[0];
    $fieldvalues=$params[1];
    $origvalues=$params[2];
    $dbgridrow=$params[3];

    reset($fieldnames);
    reset($fieldvalues);

    if ($this->_datasource!=null)
    {
      if ($this->_datasource->Dataset!=null)
      {
        if ($this->_datasource->Dataset->Database!=null)
        {
          try
          {
            //Get an array with the keys and fields to change
            $output=array();

            $keys=$this->_datasource->DataSet->_keyfields;
            while (list($k,$v)=each($fieldnames))
            {
              if ((in_array($v,$keys)) || ($fieldvalues[$k]!=$origvalues[$k]))
              {
                $output[$v]=$fieldvalues[$k];
              }
            }
            $this->_datasource->DataSet->edit();
            $this->_datasource->DataSet->fieldbuffer=$output;
            $this->_datasource->DataSet->Post();
          }
          catch (Exception $e)
          {
            $error->SetError(-104, 'Caught exception: '.$e->getMessage());
            return $error;
          }
          return $dbgridrow;
        }
        else
        {
          $error->SetError(-103, "Datasource->Dataset->Database not assigned");
          return $error;
        }
      }
      else
      {
        $error->SetError(-102, "Datasource->Dataset not assigned");
        return $error;
      }
    }
    else
    {
      $error->SetError(-101, "Datasource not assigned");
      return $error;
    }
  }
  return -1;
}


  function dumpContents()
  {
    if (($this->ControlState & csDesigning)!=csDesigning)
      $this->dumpRPC();
  }

  function dumpForAjax()
  {
    $this->dumpColumns();
    $this->dumpRows();
  }

  function dumpJsEvents()
  {
    parent::dumpJsEvents();

    $this->dumpJSEvent($this->_jsondatachanged);
    $this->dumpJSEvent($this->_jsonrowsaved);
    $this->dumpJSEvent($this->_jsonrowchanged);
  }

  function attachJSEvents()
  {
    $result=parent::attachJSEvents();
    //$result.=$this->mapJSEvent($this->_jsondatachanged, 'dataEdited');

    //To perform submits
    //$result.=$this->mapEventToJSHook($this->_ondatachanged,'dataEdited');

    echo $result;
  }

  function init()
  {
    parent::init();

    //Include the RPC to handle any request
    use_unit("rpc/rpc.inc.php");

    $serverevent = $this->input->serverevent;

    if (is_object($serverevent))
    {
      //$this->fireEvent('ondatachanged',$this->_ondatachanged, $serverevent->asString());
    }
  }

  function loaded()
  {
    parent::loaded();
    $this->setDataSource($this->_datasource);
  }

  /**
   * If true, each record will show a delete link to allow the user delete that record
   *
    @return boolean
  */
  function getDeleteLink()          { return $this->_deletelink; }
  function setDeleteLink($value)    { $this->_deletelink=$value; }
  function defaultDeleteLink()      { return ""; }

  function getDataSource()          { return $this->_datasource; }
  function setDataSource($value)    { $this->_datasource = $this->fixupProperty($value); }
  function defaultDataSource()      { return null; }

  function readShowStatusBar()      { return $this->_showstatusbar; }
  function writeShowStatusBar($value) { $this->_showstatusbar=$value; }
  function defaultShowStatusBar()   { return 1; }

  function readReadOnly()           { return $this->_readonly; }
  function writeReadOnly($value)    { $this->_readonly=$value; }
  function defaultReadOnly()        { return 0; }

  function readOnDataChanged()      { return $this->_ondatachanged; }
  function writeOnDataChanged($value) { $this->_ondatachanged=$value; }
  function defaultOnDataChanged()   { return null; }

  function readjsOnDataChanged()    { return $this->_jsondatachanged; }
  function writejsOnDataChanged($value) { $this->_jsondatachanged=$value; }
  function defaultjsOnDataChanged() { return null; }

  function readjsOnRowSaved()       { return $this->_jsonrowsaved; }
  function writejsOnRowSaved($value){ $this->_jsonrowsaved=$value; }
  function defaultjsOnRowSaved()    { return null; }

  function readjsOnRowChanged()     { return $this->_jsonrowchanged; }
  function writejsOnRowChanged($value) { $this->_jsonrowchanged=$value; }
  function defaultjsOnRowChanged()  { return null; }
}

class QDBGrid extends QCustomDBGrid
{
  function getColumns()             { return $this->readColumns(); }
  function setColumns($value)       { $this->writeColumns($value); }

  function getShowStatusBar()       { return $this->readShowStatusBar(); }
  function setShowStatusBar($value) { $this->writeShowStatusBar($value); }

  function getReadOnly()            { return $this->readReadOnly(); }
  function setReadOnly($value)      { $this->writeReadOnly($value); }

  function getOnDataChanged()       { return $this->readOnDataChanged(); }
  function setOnDataChanged($value) { $this->writeOnDataChanged($value); }

  function getjsOnDataChanged()     { return $this->readjsOnDataChanged(); }
  function setjsOnDataChanged($value) { $this->writejsOnDataChanged($value); }

  function getjsOnRowSaved()        { return $this->readjsOnRowSaved(); }
  function setjsOnRowSaved($value)  { $this->writejsOnRowSaved($value); }

  function getjsOnRowChanged()      { return $this->readjsOnRowChanged(); }
  function setjsOnRowChanged($value){ $this->writejsOnRowChanged($value); }
}
