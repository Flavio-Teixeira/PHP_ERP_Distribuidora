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
   use_unit("designide.inc.php");

   setPackageTitle("Database RPCL Components");
   setIconPath("./icons");

   registerComponents("Data Access",array("Database"),"dbtables.inc.php");
   registerComponents("Data Access",array("Datasource"),"db.inc.php");
   registerComponents("Data Access",array("Table","Query","StoredProc"),"dbtables.inc.php");

   registerComponents("Data Controls",array("DBGrid"),"dbgrids.inc.php");
   registerComponents("Data Controls",array("DBPaginator", "DBRepeater","DBIteratorBegin","DBIteratorEnd"),"dbctrls.inc.php");

   registerPropertyValues("DBIteratorEnd","IteratorBegin",array('DBIteratorBegin'));
   registerPropertyValues("Datasource","DataSet",array('DataSet'));
   registerPropertyValues("DBDataSet","Database",array('Database'));
   registerPropertyValues("DBDataSet","MasterSource",array('Datasource'));

   registerAsset(array("Database","Table","Query","StoredProc"),array("adodb"));
   registerAsset(array("DBGrid"),array("qooxdoo", "rpc"));

    registerComponentEditor("Database","DatabaseEditor","designide.inc.php");

   registerPropertyValues("DBRepeater","Kind",array('rkHorizontal','rkVertical'));
   registerPropertyValues("DBDataSet","Order",array('asc','desc'));
   registerBooleanProperty("DBRepeater","RestartDataset");
   registerBooleanProperty("CustomTable","HasAutoInc");
   registerBooleanProperty("DataSet","Active");
   registerPropertyEditor("DataSet","MasterFields","TValueListPropertyEditor","native");

   registerPropertyValues("DBPaginator","Orientation",array('noHorizontal','noVertical'));
   registerBooleanProperty("DBGrid","ReadOnly");
   registerBooleanProperty("DBPaginator","ShowFirst");
   registerBooleanProperty("DBPaginator","ShowLast");
   registerBooleanProperty("DBPaginator","ShowNext");
   registerBooleanProperty("DBPaginator","ShowPrevious");

   registerDropDatasource(array("DBGrid","DBRepeater","DBPaginator"));

   registerPropertyEditor("Query","SQL","TStringListPropertyEditor","native");
   registerPropertyEditor("DBDataSet","Params","TStringListPropertyEditor","native");

   registerBooleanProperty("CustomConnection","Connected");
   registerBooleanProperty("Database","Debug");
   registerBooleanProperty("Database","HostTranslation");
   registerPasswordProperty("CustomConnection","UserPassword");
   registerPropertyValues("Database","DriverName",array(
                                                        'access',
                                                        'ado5',
                                                        'ado',
                                                        'ado_access',
                                                        'ado_mssql',
                                                        'ads',
                                                        'borland_ibase',
                                                        'csv',
                                                        'db2',
                                                        'db2oci',
                                                        'db2ora',
                                                        'fbsql',
                                                        'firebird',
                                                        'ibase',
                                                        'informix72',
                                                        'informix',
                                                        'ldap',
                                                        'mssql',
                                                        'mssql_n',
                                                        'mssql_native',
                                                        'mssqlpo',
                                                        'mysql',
                                                        'mysqli',
                                                        'mysqlipo',
                                                        'mysqlt',
                                                        'netezza',
                                                        'oci8',
                                                        'oci8po',
                                                        'oci805',
                                                        'odbc',
                                                        'odbc_db2',
                                                        'odbc_mssql',
                                                        'odbc_oracle',
                                                        'odbtp',
                                                        'odbtp_unicode',
                                                        'oracle',
                                                        'pdo',
                                                        'pdo_mssql',
                                                        'pdo_mysql',
                                                        'pdo_oci',
                                                        'pdo_pgsql',
                                                        'pdo_sqlite',
                                                        'postgres7',
                                                        'postgres8',
                                                        'postgres64',
                                                        'postgres',
                                                        'proxy',
                                                        'sapdb',
                                                        'sqlanywhere',
                                                        'sqlite',
                                                        'sqlitepo',
                                                        'sybase',
                                                        'sybase_ase',
                                                        'vfp',
                                                        ));
?>