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

setPackageTitle("RPCL components for Zend Framework (tm)");
setIconPath("./icons");

addSplashBitmap("RPCL components for Zend Framework (tm)", "zf.bmp");

registerComponents("Zend", array("ZACL"), "Zend/zacl.inc.php");
registerComponents("Zend", array("ZAuth"), "Zend/zauth.inc.php");
registerComponents("Zend", array("ZAuthDB"), "Zend/zauthdb.inc.php");
registerComponents("Zend", array("ZAuthDigest"), "Zend/zauthdigest.inc.php");
registerComponents("Zend", array("ZCache"), "Zend/zcache.inc.php");
registerComponents("Zend", array("ZMail", "ZMailTransportSMTP", "ZMailTransportSendmail"), "Zend/zmail.inc.php");

registerComponents("Zend", array("ZCaptcha"), "Zend/zcaptcha.inc.php");
registerComponents("Zend", array("ZBarcode"), "Zend/zbarcode.inc.php");
registerComponents("Zend", array("ZCurrency"), "Zend/zcurrency.inc.php");
registerComponents("Zend", array("ZDate"), "Zend/zdate.inc.php");
registerComponents("Zend", array("ZFile"), "Zend/zfile.inc.php");
registerComponents("Zend", array("ZFeedReader"), "Zend/zfeedreader.inc.php");
registerComponents("Zend", array("ZFeedWriter"), "Zend/zfeedwriter.inc.php");
registerComponents("Zend", array("ZPubSubHubBubPublisher"), "Zend/zpubsubhubbubpublisher.inc.php");
registerComponents("Zend", array("ZPubSubHubBubSubscriber"), "Zend/zpubsubhubbubsubscriber.inc.php");
registerComponents("Zend", array("ZGDataAuth"), "Zend/zgdataauth.inc.php");
registerComponents("Zend", array("ZGDataCalendar"), "Zend/zgdatacalendar.inc.php");
registerComponents("Zend", array("ZGDataDocs"), "Zend/zgdatadocs.inc.php");
registerComponents("Zend", array("ZGDataYoutube"), "Zend/zgdatayoutube.inc.php");
registerComponents("Zend", array("ZGDataHealth"), "Zend/zgdatahealth.inc.php");
registerComponents("Zend", array("ZGDataSpreadsheets"), "Zend/zgdataspreadsheets.inc.php");
registerComponents("Zend", array("ZGDataPhotos"), "Zend/zgdataphotos.inc.php");
registerComponents("Zend", array("ZGDataBooks"), "Zend/zgdatabooks.inc.php");
registerComponents("Zend", array("ZGDataApps"), "Zend/zgdataapps.inc.php");
registerComponents("Zend", array("ZOAuth"), "Zend/zoauth.inc.php");
registerComponents("Zend", array("ZRegistry"), "Zend/zregistry.inc.php");
registerComponents("Zend", array("ZJson"), "Zend/zjson.inc.php");
registerComponents("Zend", array("ZHttp"), "Zend/zhttp.inc.php");
registerComponents("Zend", array("ZJsonServer"), "Zend/zjsonserver.inc.php");
registerComponents("Zend", array("ZRestServer"), "Zend/zrestserver.inc.php");
registerComponents("Zend", array("ZRestClient"), "Zend/zrestclient.inc.php");
registerComponents("Zend", array("ZOpenIdConsumer"), "Zend/zopenidconsumer.inc.php");
registerComponents("Zend", array("ZOpenIdConsumerStorageDB"), "Zend/zopenidconsumerstoragedb.inc.php");
registerComponents("Zend", array("ZOpenIdConsumerStorageFile"), "Zend/zopenidconsumerstoragefile.inc.php");
registerComponents("Zend", array("ZOpenIdProvider"), "Zend/zopenidprovider.inc.php");
registerComponents("Zend", array("ZOpenIdProviderStorageDB"), "Zend/zopenidproviderstoragedb.inc.php");
registerComponents("Zend", array("ZOpenIdProviderStorageFile"), "Zend/zopenidproviderstoragefile.inc.php");
registerComponents("Zend", array("ZOpenIdProviderUserSession"), "Zend/zopenidproviderusersession.inc.php");
registerComponents("Zend", array("ZMarkup"), "Zend/zmarkup.inc.php");
registerComponents("Zend", array("ZLog"), "Zend/zlog.inc.php");
registerComponents("Zend", array("ZPdf"), "Zend/zpdf.inc.php");

registerAsset(array("ZACL", "ZAuth", "ZAuthDB", "ZAuthDigest", "ZCache", "ZMail",
                    "ZMailTransportSMTP", "ZMailTransportSendmail", "ZBarcode", "ZCaptcha", "ZCurrency",
                    "ZDate", "ZFile", "ZFeedReader", "ZFeedWriter", "ZPubSubHubBubPublisher", "ZPubSubHubBubSubscriber",
                    "ZGDataAuth", "ZGDataCalendar", "ZGDataDocs", "ZGDataSpreadsheets", "ZGDataPhotos", "ZGDataYoutube",
                    "ZGDataHealth", "ZGDataHealth", "ZOAuth", "ZRegistry", "ZJson", "ZHttp", "ZJsonServer", "ZRestServer", "ZRestClient", "ZOpenIdConsumer",
                    "ZOpenIdCustomerStorageDB", "ZOpenIdCustomerStorageFile", "ZOpenIdProvider", "ZOpenIdProviderStorageDB", "ZOpenIdProviderStorageFile",
                    "ZOpenIdProviderUserSession", "ZMarkup", "ZLog", "ZPdf"), array("Zend/framework", "Zend/fonts", "Zend/zcommon"));

registerPropertyValues("ZCache", "Frontend", array('cfCore', 'cfOutput', 'cfFunction', 'cfClass', 'cfFile', 'cfPage'));
registerPropertyValues("ZCache", "Backend", array('cbFile', 'cbSQLite', 'cbMemcached', 'cbAPC', 'cbPlatform'));
registerPropertyValues("ZCache", "ReadControlType", array('rctCRC32', 'rctMD5', 'rctADLER32', 'rctSTRLEN'));

registerPropertyValues("ZMailTransportSMTP", "Authentication", array('saNone', 'saPlain', 'saLogin', 'saCRAM_MD5'));
registerPropertyValues("ZMailTransportSMTP", "SecureProtocol", array('spNone', 'spTLS', 'spSSL'));

registerBooleanProperty("ZCache", "Enabled");
registerBooleanProperty("ZCache", "Logging");
registerBooleanProperty("ZCache", "CheckWrite");
registerBooleanProperty("ZCache", "Serialization");
registerBooleanProperty("ZCache", "IgnoreUserAbort");
registerBooleanProperty("ZCache", "FileLocking");
registerBooleanProperty("ZCache", "CheckRead");

registerBooleanProperty("ZCache", "FrontendFunctionOptions.CacheByDefault");
registerBooleanProperty("ZCache", "FrontendClassOptions.CacheByDefault");
registerBooleanProperty("ZCache", "FrontendPageOptions.HTTPConditional");
registerBooleanProperty("ZCache", "FrontendPageOptions.DebugHeader");
registerBooleanProperty("ZCache", "FrontendPageOptions.Enabled");

registerBooleanProperty("ZCache", "FrontendPageOptions.CacheWithGET");
registerBooleanProperty("ZCache", "FrontendPageOptions.CacheWithPOST");
registerBooleanProperty("ZCache", "FrontendPageOptions.CacheWithSESSION");
registerBooleanProperty("ZCache", "FrontendPageOptions.CacheWithCOOKIE");

registerBooleanProperty("ZCache", "FrontendPageOptions.IDWithGET");
registerBooleanProperty("ZCache", "FrontendPageOptions.IDWithPOST");
registerBooleanProperty("ZCache", "FrontendPageOptions.IDWithSESSION");
registerBooleanProperty("ZCache", "FrontendPageOptions.IDWithFILES");
registerBooleanProperty("ZCache", "FrontendPageOptions.IDWithCOOKIE");

registerPropertyEditor("ZMail", "BodyHTML", "THTMLPropertyEditor", "native");
registerPropertyEditor("ZCache", "FrontendClassOptions.CachedMethods", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZCache", "FrontendClassOptions.NonCachedMethods", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZCache", "FrontendFileOptions.MasterFile", "TFilenamePropertyEditor", "native");

registerPropertyEditor("ZCache", "FrontendFunctionOptions.CachedFunctions", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZCache", "FrontendFunctionOptions.NonCachedFunctions", "TStringListPropertyEditor", "native");

registerPropertyEditor("ZCache", "FrontendPageOptions.RegExps", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZMail", "Headers", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZMail", "To", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZMail", "Attachments", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZMail", "Cc", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZMail", "Bcc", "TValueListPropertyEditor", "native");

registerBooleanProperty("ZCache", "BackendMemcachedOptions.Compression");
registerPropertyEditor("ZCache", "BackendMemcachedOptions.Servers", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZCache", "BackendSQLiteOptions.DatabasePath", "TFilenamePropertyEditor", "native");

registerPropertyEditor("ZACL", "ZAuth", "ZAuth", "native");

registerPropertyEditor("ZAuthDigest", "FileName", "TFilenamePropertyEditor", "native");

registerPropertyValues("ZAuth", "AuthAdapter", array("ZAuthAdapter"));
registerPropertyValues("ZMail", "Transport", array("ZMailTransport"));
registerPropertyValues("ZAuthDB", "DriverName", array('mysql', 'sqlserver', 'postgre'));
registerPasswordProperty("ZAuth", "UserPassword");

registerPropertyValues("ZBarcode", "Type", array("btCode128", "btCode25", "btCode25i", "btEAN2", "btEAN5", "btEAN8", "btEAN13", "btCode39", "btIdentcode", "btITF14", "btLeitcode", "btPlanet", "btPostnet", "btRoyalmail", "btUPCA", "btUPCE"));
registerPropertyValues("ZBarcode", "HorizontalPosition", array("hpLeft", "hpCenter", "hpRight"));
registerPropertyValues("ZBarcode", "VerticalPosition", array("vpTop", "vpMiddle", "vpBottom"));
registerPropertyValues("ZBarcode", "ImageType", array("itPNG", "itJPG", "itJPEG", "itGIF"));
//registerPropertyValues("ZBarcode", "RenderType", array("rtImage","rtSVG"));
registerBooleanProperty("ZBarcode", "ReverseColor");
registerBooleanProperty("ZBarcode", "Border");
registerBooleanProperty("ZBarcode", "QuietZones");
registerBooleanProperty("ZBarcode", "DrawText");
registerBooleanProperty("ZBarcode", "StretchText");
registerBooleanProperty("ZBarcode", "Checksum");
registerBooleanProperty("ZBarcode", "ChecksumInText");
registerBooleanProperty("ZBarcode", "AutomaticRenderError");
registerPropertyEditor("ZBarcode", "FontPath", "TFilenamePropertyEditor", "native");

registerPropertyEditor("ZBarcode", "BackgroundColor", "TColorPropertyEditor", "native");
registerPropertyEditor("ZBarcode", "TextColor", "TColorPropertyEditor", "native");
registerPropertyValues("ZBarcode", "DataSource", array('Datasource'));

registerBooleanProperty("ZCaptcha", "HandleParagraphs");
registerBooleanProperty("ZCaptcha", "UseNumbers");

registerPropertyValues("ZCaptcha", "JustificationText", array('jtRight', 'jtCenter', 'jtLeft'));
registerPropertyValues("ZCaptcha", "DirectionText", array("dtRigthToLeft", "dtLeftToRight"));
registerPropertyValues("ZCaptcha", "CaptchaType", array("ctDumb", "ctFiglet", "ctImage", "ctRecaptcha"));
registerPropertyValues("ZCaptcha", "ThemeRecaptcha", array("trRed", "trWhite", "trBlackGlass", "trClean"));
registerPropertyValues("ZCaptcha", "LanguageRecaptcha", array("lrEN", "lrNL", "lrFR", "lrDE", "lrPT", "lrRU", "lrES", "lrTR"));
registerPropertyValues("ZCaptcha", "InputCaptcha", array('Edit'));
registerPropertyEditor("ZCaptcha", "FontCaptcha", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZCaptcha", "ImageDir", "TDirectoryPropertyEditor", "native");

registerBooleanProperty("ZCaptcha", "SmushMode.Smush");
registerBooleanProperty("ZCaptcha", "SmushMode.BigX");
registerBooleanProperty("ZCaptcha", "SmushMode.Equal");
registerBooleanProperty("ZCaptcha", "SmushMode.HardBlank");
registerBooleanProperty("ZCaptcha", "SmushMode.Hierarchy");
registerBooleanProperty("ZCaptcha", "SmushMode.Kern");
registerBooleanProperty("ZCaptcha", "SmushMode.LowLine");
registerBooleanProperty("ZCaptcha", "SmushMode.Pair");

registerPropertyValues("ZCurrency", "DisplayCurrency", array('dcNoSymbol', 'dcUseName'));
registerPropertyValues("ZCurrency", "PositionCurrency", array('pcStandard', 'pcLeft', 'pcRight'));
registerPropertyValues("ZCurrency", "FormatCurrency", array('fcAA', 'fcAF', 'fcAK', 'fcAM', 'fcAR', 'fcAZ', 'fcBE', 'fcBG', 'fcBN', 'fcBO'
                                                            , 'fcBS', 'fcBYN', 'fcCA', 'fcCCH', 'fcCOP', 'fcCS', 'fcCY', 'fcDA', 'fcDE', 'fcDV', 'fcDZ', 'fcEE', 'fcEL', 'fcEN', 'fcEO', 'fcES', 'fcET', 'fcEU'
                                                            , 'fcFA', 'fcFI', 'fcFIL', 'fcFO', 'fcFR', 'frFUR', 'fcGA', 'fcGAA', 'fcGEZ', 'fcGL', 'fcGSW', 'fcGU', 'fcGV', 'fcHA', 'fcHAW', 'fcHE', 'fcHI', 'fcHR'
                                                            , 'fcHU', 'fcHY', 'fcIA', 'fcID', 'fcIG', 'fcII', 'fcIN', 'fcIS', 'fcIT', 'fcIU', 'fcIW', 'fcJA', 'fcKA', 'fcKAJ', 'fcKAM', 'fcKCG', 'fcKFO', 'fcKK'
                                                            , 'fcKL', 'fcKM', 'fcKN', 'fcKO', 'fcKOK', 'fcKPE', 'fcKU', 'fcKW', 'fcKY', 'fcLN', 'fcLO', 'fcLT', 'fcLV', 'fcMK', 'fcML', 'fcMN', 'fcMO', 'fcMR', 'fcMS'
                                                            , 'fcMT', 'fcMY', 'fcNB', 'fcNDS', 'fcNE', 'fcNL', 'fcNN', 'fcNR', 'fcNSO', 'fcNY', 'fcOC', 'fcOM', 'fcOR', 'fcPA', 'fcPL', 'fcPS', 'fcPT', 'fcRO', 'fcRU'
                                                            , 'fcRW', 'fcSA', 'fcSE', 'fcSH', 'fcSI', 'fcSID', 'fcSK', 'fcSL', 'fcSO', 'fcSQ', 'fcSR', 'fcST', 'fcSV', 'fcSW', 'fcSYR', 'fcTA', 'fcTE', 'fcTG', 'fcTIG'
                                                            , 'fcTL', 'fcTN', 'fcTO', 'fcTR', 'fcTRV', 'fcTS', 'fcTT', 'fcUG', 'fcUK', 'fcUR', 'fcUZ', 'fcVE', 'fcVI', 'fcWAL', 'fcWO', 'fcXH', 'fcYO', 'fcZH', 'fcZU'));

registerPropertyValues("ZDate", "FormatType", array('ftPHP', 'ftISO'));
registerPropertyValues("ZDate", "DateDefaultTimezone", array('ddtAfrica_Abidjan', 'ddtAfrica_Accra', 'ddtAfrica_Addis_Ababa', 'ddtAfrica_Algiers'
                                                             , 'ddtAfrica_Asmara', 'ddtAfrica_Asmera', 'ddtAfrica_Bamako', 'ddtAfrica_Bangui', 'ddtAfrica_Banjul', 'ddtAfrica_Bissau', 'ddtAfrica_Blantyre', 'ddtAfrica_Brazzaville'
                                                             , 'ddtAfrica_Bujumbura', 'ddtAfrica_Cairo', 'ddtAfrica_Casablanca', 'ddtAfrica_Ceuta', 'ddtAfrica_Conakry', 'ddtAfrica_Dakar', 'ddtAfrica_Dar_es_Salaam', 'ddtAfrica_Djibouti'
                                                             , 'ddtAfrica_Douala', 'ddtAfrica_El_Aaiun', 'ddtAfrica_Freetown', 'ddtAfrica_Gaborone', 'ddtAfrica_Harare', 'ddtAfrica_Johannesburg', 'ddtAfrica_Kampala', 'ddtAfrica_Khartoum'
                                                             , 'ddtAfrica_Kigali', 'ddtAfrica_Kinshasa', 'ddtAfrica_Lagos', 'ddtAfrica_Libreville', 'ddtAfrica_Lome', 'ddtAfrica_Luanda', 'ddtAfrica_Lubumbashi', 'ddtAfrica_Lusaka', 'ddtAfrica_Malabo'
                                                             , 'ddtAfrica_Maputo', 'ddtAfrica_Maseru', 'ddtAfrica_Mbabane', 'ddtAfrica_Mogadishu', 'ddtAfrica_Monravia', 'ddtAfrica_Nairobi', 'ddtAfrica_Ndjamena', 'ddtAfrica_Niamey', 'ddtAfrica_Nouakchott'
                                                             , 'ddtAfrica_Ouagadougou', 'ddtAfrica_Porto-Novo', 'ddtAfrica_Sao_Tome', 'ddtAfrica_Timbuktu', 'ddtAfrica_Tripoli', 'ddtAfrica_Tunis', 'ddtAfrica_Windhoek', 'ddtAmerica_Adak', 'ddtAmerica_Anchorage'
                                                             , 'ddtAmerica_Anguilla', 'ddtAmerica_Antigua', 'ddtAmerica_Araguaina', 'ddtAmerica_Argentina_Buenos_Aires', 'ddtAmerica_Argentina_Catamarca', 'ddtAmerica_Argentina_ComodRivadavia', 'ddtAmerica_Argentina_Cordoba'
                                                             , 'ddtAmerica_Argentina_Jujuy', 'ddtAmerica_Argentina_La_Rioja', 'ddtAmerica_Argentina_Mendoza', 'ddtAmerica_Argentina_Rio_Gallegos', 'ddtAmerica_Argentina_Salta', 'ddtAmerica_Argentina_San_Juan'
                                                             , 'ddtAmerica_Argentina_San_Luis', 'ddtAmerica_Argentina_Tucuman', 'ddtAmerica_Argentina_Ushuaia', 'ddtAmerica_Aruba', 'ddtAmerica_Asuncion', 'ddtAmerica_Atikokan', 'ddtAmerica_Atka', 'ddtAmerica_Bahia'
                                                             , 'ddtAmerica_Bahia_Banderas', 'ddtAmerica_Barbados', 'ddtAmerica_Belem', 'ddtAmerica_Belize', 'ddtAmerica_Blanc-Sablon', 'ddtAmerica_Boa_Vista', 'ddtAmerica_Bogota', 'ddtAmerica_Boise', 'ddtAmerica_Buenos_Aires'
                                                             , 'ddtAmerica_Cambridge_Bay', 'ddtAmerica_Campo_Grande', 'ddtAmerica_Cancun', 'ddtAmerica_Caracas', 'ddtAmerica_Catamarca', 'ddtAmerica_Cayenne', 'ddtAmerica_Cayman', 'ddtAmerica_Chicago', 'ddtAmerica_Chihuahua'
                                                             , 'ddtAmerica_Coral_Harbour', 'ddtAmerica_Cordoba', 'ddtAmerica_Costa_Rica', 'ddtAmerica_Cuiaba', 'ddtAmerica_Curacao', 'ddtAmerica_Danmarkshavn', 'ddtAmerica_Dawson', 'ddtAmerica_Dawson_Creek', 'ddtAmerica_Denver'
                                                             , 'ddtAmerica_Detroit', 'ddtAmerica_Dominica', 'ddtAmerica_Edmonton', 'ddtAmerica_Eirunepe', 'ddtAmerica_El_Salvador', 'ddtAmerica_Ensenada', 'ddtAmerica_Fort_Wayne', 'ddtAmerica_Fortaleza', 'ddtAmerica_Glace_Bay'
                                                             , 'ddtAmerica_Godthab', 'ddtAmerica_Goose_Bay', 'ddtAmerica_Grand_Turk', 'ddtAmerica_Grenada', 'ddtAmerica_Guadeloupe', 'ddtAmerica_Guatemala', 'ddtAmerica_Guayaquil', 'ddtAmerica_Guyana', 'ddtAmerica_Halifax'
                                                             , 'ddtAmerica_Havana', 'ddtAmerica_Hermosillo', 'ddtAmerica_Indiana_Indianapolis', 'ddtAmerica_Indiana_Knox', 'ddtAmerica_Indiana_Marengo', 'ddtAmerica_Indiana_Petersburg', 'ddtAmerica_Indiana_Tell_City'
                                                             , 'ddtAmerica_Indiana_Vevay', 'ddtAmerica_Indiana_Vincennes', 'ddtAmerica_Indiana_Winamac', 'ddtAmerica_Indianapolis', 'ddtAmerica_Inuvik', 'ddtAmerica_Iqaluit', 'ddtAmerica_Jamaica', 'ddtAmerica_Jujuy'
                                                             , 'ddtAmerica_Juneau', 'ddtAmerica_Kentucky_Louisville', 'ddtAmerica_Kentucky_Monticello', 'ddtAmerica_Knox_IN', 'ddtAmerica_La_Paz', 'ddtAmerica_Lima', 'ddtAmerica_Los_Angeles', 'ddtAmerica_Louisville'
                                                             , 'ddtAmerica_Maceio', 'ddtAmerica_Managua', 'ddtAmerica_Manaus', 'ddtAmerica_Marigot', 'ddtAmerica_Martinique', 'ddtAmerica_Matamoros', 'ddtAmerica_Mazatlan', 'ddtAmerica_Mendoza', 'ddtAmerica_Menominee'
                                                             , 'ddtAmerica_Merida', 'ddtAmerica_Mexico_City', 'ddtAmerica_Miquelon', 'ddtAmerica_Moncton', 'ddtAmerica_Monterrey', 'ddtAmerica_Montevideo', 'ddtAmerica_Montreal', 'ddtAmerica_Montserrat', 'ddtAmerica_Nassau'
                                                             , 'ddtAmerica_New_York', 'ddtAmerica_Nipigon', 'ddtAmerica_Nome', 'ddtAmerica_Noronha', 'ddtAmerica_North_Dakota_Beulah', 'ddtAmerica_North_Dakota_Center', 'ddtAmerica_North_Dakota_New_Salem', 'ddtAmerica_Ojinaga'
                                                             , 'ddtAmerica_Panama', 'ddtAmerica_Pangnirtung', 'ddtAmerica_Paramaribo', 'ddtAmerica_Phoenix', 'ddtAmerica_Port-au-Prince', 'ddtAmerica_Port_of_spain', 'ddtAmerica_Porto_Acre', 'ddtAmerica_Porto_Velho'
                                                             , 'ddtAmerica_Puerto_Rico', 'ddtAmerica_Rainy_River', 'ddtAmerica_Rankin_Inlet', 'ddtAmerica_Recife', 'ddtAmerica_Regina', 'ddtAmerica_Resolute', 'ddtAmerica_Rio_Branco', 'ddtAmerica_Rosario'
                                                             , 'ddtAmerica_Santa_Isabel', 'ddtAmerica_Santarem', 'ddtAmerica_Santiago', 'ddtAmerica_Santo_Domingo', 'ddtAmerica_Sao_Paulo', 'ddtAmerica_Scoresbysund', 'ddtAmerica_Shiprock', 'ddtAmerica_St_Barthelemy'
                                                             , 'ddtAmerica_St_Johns', 'ddtAmerica_St_Kitts', 'ddtAmerica_St_Lucia', 'ddtAmerica_St_Thomas', 'ddtAmerica_St_Vicent', 'ddtAmerica_Swift_Current', 'ddtAmerica_Tegucigalpa', 'ddtAmerica_Thule', 'ddtAmerica_Thunder_Bay'
                                                             , 'ddtAmerica_Tijuana', 'ddtAmerica_Toronto', 'ddtAmerica_Tortola', 'ddtAmerica_Vancouver', 'ddtAmerica_Virgin', 'ddtAmerica_Whitehorse', 'ddtAmerica_Winnipeg', 'ddtAmerica_Yakutat', 'ddtAmerica_Yellowknife'
                                                             , 'ddtAntarctica_Casey', 'ddtAntarctica_Davis', 'ddtAntarctica_DumontDUrville', 'ddtAntarctica_Macquarie', 'ddtAntarctica_Mawson', 'ddtAntarctica_McMurdo', 'ddtAntarctica_Palmer', 'ddtAntarctica_Rothera'
                                                             , 'ddtAntarctica_South_Pole', 'ddtAntarctica_Syowa', 'ddtAntarctica_Vostok', 'ddtArctic_Longyearbyen', 'ddtAsia_Aden', 'ddtAsia_Almaty', 'ddtAsia_Amman', 'ddtAsia_Anadyr', 'ddtAsia_Aqtau', 'ddtAsia_Aqtobe'
                                                             , 'ddtAsia_Ashgabat', 'ddtAsia_AshKhabad', 'ddtAsia_Baghdad', 'ddtAsia_Bahrain', 'ddtAsia_Baku', 'ddtAsia_Bangkok', 'ddtAsia_Beirut', 'ddtAsia_Bishkek', 'ddtAsia_Brunei', 'ddtAsia_Calcutta', 'ddtAsia_Choibalsan'
                                                             , 'ddtAsia_Chongqing', 'ddtAsia_Chungking', 'ddtAsia_Colombo', 'ddtAsia_Dacca', 'ddtAsia_Damascus', 'ddtAsia_Dhaka', 'ddtAsia_Dili', 'ddtAsia_Dubai', 'ddtAsia_Dushanbe', 'ddtAsia_Gaza', 'ddtAsia_Harbin', 'ddtAsia_Ho_Chi_Minh'
                                                             , 'ddtAsia_Hong_Kong', 'ddtAsia_Hovd', 'ddtAsia_Irkutsk', 'ddtAsia_Istanbul', 'ddtAsia_Jakarta', 'ddtAsia_Jayapura', 'ddtAsia_Jerusalem', 'ddtAsia_Kabul', 'ddtAsia_Kamchatka', 'ddtAsia_Karachi', 'ddtAsia_Kashgar'
                                                             , 'ddtAsia_Kathmandu', 'ddtAsia_Katmandu', 'ddtAsia_Kolkata', 'ddtAsia_Krasnoyarsk', 'ddtAsia_Kuala_Lumpur', 'ddtAsia_Kuching', 'ddtAsia_Kuwait', 'ddtAsia_Macao', 'ddtAsia_Macau', 'ddtAsia_Magadan', 'ddtAsia_Makassar'
                                                             , 'ddtAsia_Manila', 'ddtAsia_Muscat', 'ddtAsia_Nicosia', 'ddtAsia_Novokuznetsk', 'ddtAsia_Novosibirsk', 'ddtAsia_Omsk', 'ddtAsia_Oral', 'ddtAsia_Phnom_Penh', 'ddtAsia_Pontianak', 'ddtAsia_Pyongyang', 'ddtAsia_Qatar'
                                                             , 'ddtAsia_Qyzylorda', 'ddtAsia_Rangoon', 'ddtAsia_Riyadh', 'ddtAsia_Saigon', 'ddtAsia_Sakhalin', 'ddtAsia_Samarkand', 'ddtAsia_Seoul', 'ddtAsia_Shanghai', 'ddtAsia_Singapore', 'ddtAsia_Taipei', 'ddtAsia_Tashkent'
                                                             , 'ddtAsia_Tbilisi', 'ddtAsia_Tehran', 'ddtAsia_Tel_Aviv', 'ddtAsia_Thimbu', 'ddtAsia_Thimphu', 'ddtAsia_Tokyo', 'ddtAsia_Ujung_Pandang', 'ddtAsia_Ulaanbaatar', 'ddtAsia_Ulan_Bator', 'ddtAsia_Urumqi', 'ddtAsia_Vientiane'
                                                             , 'ddtAsia_Vladivostok', 'ddtAsia_Yakutsk', 'ddtAsia_Yekaterinburg', 'ddtAsia_Yeveran', 'ddtAtlantic_Azores', 'ddtAtlantic_Bermuda', 'ddtAtlantic_Canary', 'ddtAtlantic_Cape_Verde', 'ddtAtlantic_Faeroe', 'ddtAtlantic_Faroe'
                                                             , 'ddtAtlantic_Jan_Mayen', 'ddtAtlantic_Madeira', 'ddtAtlantic_Reykjavik', 'ddtAtlantic_South_Georgia', 'ddtAtlantic_St_Helena', 'ddtAtlantic_Stanley', 'ddtAustralia_ACT', 'ddtAustralia_Adelaide', 'ddtAustralia_Brisbane'
                                                             , 'ddtAustralia_Broken_Hill', 'ddtAustralia_Canberra', 'ddtAustralia_Currie', 'ddtAustralia_Darwin', 'ddtAustralia_Eucla', 'ddtAustralia_Hobart', 'ddtAustralia_LHI', 'ddtAustralia_Lindeman', 'ddtAustralia_Lord_Howe'
                                                             , 'ddtAustralia_Melbourne', 'ddtAustralia_North', 'ddtAustralia_NSW', 'ddtAustralia_Perth', 'ddtAustralia_Queensland', 'ddtAustralia_South', 'ddtAustralia_Sydney', 'ddtAustralia_Tasmania', 'ddtAustralia_Victoria'
                                                             , 'ddtAustralia_West', 'ddtAustralia_Yancowinna', 'ddtEurope_Amsterdam', 'ddtEurope_Andorra', 'ddtEurope_Athens', 'ddtEurope_Belfast', 'ddtEurope_Belgrade', 'ddtEurope_Berlin', 'ddtEurope_Bratislava', 'ddtEurope_Brussels'
                                                             , 'ddtEurope_Bucharest', 'ddtEurope_Budapest', 'ddtEurope_Chisinau', 'ddtEurope_Copenhagen', 'ddtEurope_Dublin', 'ddtEurope_Gibraltar', 'ddtEurope_Guernsey', 'ddtEurope_Helsinki', 'ddtEurope_Isle_of_Man'
                                                             , 'ddtEurope_Istanbul', 'ddtEurope_Jersey', 'ddtEurope_Kaliningrad', 'ddtEurope_Kiev', 'ddtEurope_Lisbon', 'ddtEurope_Ljubljana', 'ddtEurope_London', 'ddtEurope_Luxembourg', 'ddtEurope_Madrid', 'ddtEurope_Malta'
                                                             , 'ddtEurope_Mariehamn', 'ddtEurope_Minsk', 'ddtEurope_Monaco', 'ddtEurope_Moscow', 'ddtEurope_Nicosia', 'ddtEurope_Oslo', 'ddtEurope_Paris', 'ddtEurope_Podgorica', 'ddtEurope_Prague', 'ddtEurope_Riga', 'ddtEurope_Rome'
                                                             , 'ddtEurope_Samara', 'ddtEurope_San_Marino', 'ddtEurope_Sarajevo', 'ddtEurope_Simferopol', 'ddtEurope_Skopje', 'ddtEurope_Sofia', 'ddtEurope_Stockholm', 'ddtEurope_Tallinn', 'ddtEurope_Tirane', 'ddtEurope_Tiraspol'
                                                             , 'ddtEurope_Uzhgorod', 'ddtEurope_Vaduz', 'ddtEurope_Vatican', 'ddtEurope_Vienna', 'ddtEurope_Vilnius', 'ddtEurope_Volgograd', 'ddtEurope_Warsaw', 'ddtEurope_Zagreb', 'ddtEurope_Zaporozhye', 'ddtEurope_Zurich', 'ddtIndian_Antananarivo'
                                                             , 'ddtIndian_Chagos', 'ddtIndian_Christmas', 'ddtIndian_Cocos', 'ddtIndian_Comoro', 'ddtIndian_Kerguelen', 'ddtIndian_Mahe', 'ddtIndian_Maldives', 'ddtIndian_Mauritius', 'ddtIndian_Mayotte', 'ddtIndian_Reunion', 'ddtPacific_Apia'
                                                             , 'ddtPacific_Auckland', 'ddtPacific_Chatham', 'ddtPacific_Chuuk', 'ddtPacific_Easter', 'ddtPacific_Efate', 'ddtPacific_Enderbury', 'ddtPacific_Fakaofo', 'ddtPacific_Fiji', 'ddtPacific_Funafuti', 'ddtPacific_Galapagos', 'ddtPacific_Gambier'
                                                             , 'ddtPacific_Guadalcanal', 'ddtPacific_Guam', 'ddtPacific_Honolulu', 'ddtPacific_Johnston', 'ddtPacific_Kiritimati', 'ddtPacific_Kosrae', 'ddtPacific_Kwajalein', 'ddtPacific_Majuro', 'ddtPacific_Marquesas', 'ddtPacific_Midway'
                                                             , 'ddtPacific_Nauru', 'ddtPacific_Niue', 'ddtPacific_Norfolk', 'ddtPacific_Noumea', 'ddtPacific_Pago_Pago', 'ddtPacific_Palau', 'ddtPacific_Pitcairn', 'ddtPacific_Pohnpei', 'ddtPacific_Ponape', 'ddtPacific_Port_Moresby'
                                                             , 'ddtPacific_Rarotonga', 'ddtPacific_Saipan', 'ddtPacific_Samoa', 'ddtPacific_Tahiti', 'ddtPacific_Tarawa', 'ddtPacific_Tongatapu', 'ddtPacific_Truk', 'ddtPacific_Wake', 'ddtPacific_Wallis', 'ddtPacific_Yap'));

registerPropertyValues("ZDate", "DateLocale", array('dlAA', 'dlAF', 'dlAK', 'dlAM', 'dlAR', 'dlAZ', 'dlBE', 'dlBG', 'dlBN', 'dlBO'
                                                    , 'dlBS', 'dlBYN', 'dlCA', 'dlCCH', 'dlCOP', 'dlCS', 'dlCY', 'dlDA', 'dlDE', 'dlDV', 'dlDZ', 'dlEE', 'dlEL', 'dlEN', 'dlEO', 'dlES', 'dlET', 'dlEU'
                                                    , 'dlFA', 'dlFI', 'dlFIL', 'dlFO', 'dlFR', 'frFUR', 'dlGA', 'dlGAA', 'dlGEZ', 'dlGL', 'dlGSW', 'dlGU', 'dlGV', 'dlHA', 'dlHAW', 'dlHE', 'dlHI', 'dlHR'
                                                    , 'dlHU', 'dlHY', 'dlIA', 'dlID', 'dlIG', 'dlII', 'dlIN', 'dlIS', 'dlIT', 'dlIU', 'dlIW', 'dlJA', 'dlKA', 'dlKAJ', 'dlKAM', 'dlKCG', 'dlKFO', 'dlKK'
                                                    , 'dlKL', 'dlKM', 'dlKN', 'dlKO', 'dlKOK', 'dlKPE', 'dlKU', 'dlKW', 'dlKY', 'dlLN', 'dlLO', 'dlLT', 'dlLV', 'dlMK', 'dlML', 'dlMN', 'dlMO', 'dlMR', 'dlMS'
                                                    , 'dlMT', 'dlMY', 'dlNB', 'dlNDS', 'dlNE', 'dlNL', 'dlNN', 'dlNR', 'dlNSO', 'dlNY', 'dlOC', 'dlOM', 'dlOR', 'dlPA', 'dlPL', 'dlPS', 'dlPT', 'dlRO', 'dlRU'
                                                    , 'dlRW', 'dlSA', 'dlSE', 'dlSH', 'dlSI', 'dlSID', 'dlSK', 'dlSL', 'dlSO', 'dlSQ', 'dlSR', 'dlST', 'dlSV', 'dlSW', 'dlSYR', 'dlTA', 'dlTE', 'dlTG', 'dlTIG'
                                                    , 'dlTL', 'dlTN', 'dlTO', 'dlTR', 'dlTRV', 'dlTS', 'dlTT', 'dlUG', 'dlUK', 'dlUR', 'dlUZ', 'dlVE', 'dlVI', 'dlWAL', 'dlWO', 'dlXH', 'dlYO', 'dlZH', 'dlZU'));

registerBooleanProperty("ZDate", "FixDST");
registerBooleanProperty("ZDate", "ExtendMonth");

registerPropertyEditor("ZFile", "Destination", "TDirectoryPropertyEditor", "native");
registerBooleanProperty("ZFile", "CountValidator.Enabled");
registerBooleanProperty("ZFile", "Crc32Validator.Enabled");
registerPropertyEditor("ZFile", "Crc32Validator.Hashes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "ExcludeExtensionValidator.Enabled");
registerBooleanProperty("ZFile", "ExcludeExtensionValidator.Case");
registerPropertyEditor("ZFile", "ExcludeExtensionValidator.Extensions", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "ExcludeMimeTypeValidator.Enabled");
registerBooleanProperty("ZFile", "ExcludeMimeTypeValidator.HeaderCheck");
registerPropertyEditor("ZFile", "ExcludeMimeTypeValidator.MimeTypes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "ExistsValidator.Enabled");
registerPropertyEditor("ZFile", "ExistsValidator.Directories", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "ExtensionValidator.Enabled");
registerBooleanProperty("ZFile", "ExtensionValidator.Case");
registerPropertyEditor("ZFile", "ExtensionValidator.Extensions", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "FilesSizeValidator.Enabled");
registerBooleanProperty("ZFile", "FilesSizeValidator.ByteString");
registerBooleanProperty("ZFile", "ImageSizeValidator.Enabled");
registerBooleanProperty("ZFile", "IsCompressedValidator.Enabled");
registerBooleanProperty("ZFile", "IsCompressedValidator.HeaderCheck");
registerPropertyEditor("ZFile", "IsCompressedValidator.CompressedTypes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "IsImageValidator.Enabled");
registerBooleanProperty("ZFile", "IsImageValidator.HeaderCheck");
registerPropertyEditor("ZFile", "IsImageValidator.ImageTypes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "HashValidator.Enabled");
registerPropertyEditor("ZFile", "HashValidator.Hashes", "TStringListPropertyEditor", "native");
registerPropertyValues("ZFile", "HashValidator.AlgorithmHash", array("ahMd2", "ahMd4", "ahMd5", "ahSha1", "ahSha224", "ahSha256", "ahSha384",
                                                                     "ahSha512", "ahRipemd128", "ahRipemd160", "ahRipemd256", "ahRipemd320", "ahSalsa10", "ahSalsa20", "ahWhirlpool", "ahTiger128_3", "ahTiger160_3",
                                                                     "ahTiger192_3", "ahTiger128_4", "ahTiger160_4", "ahTiger192_4", "ahSnefru", "ahSnefru256", "ahGost", "ahAdler32", "ahCrc32", "ahCrc32b", "ahHaval128_3",
                                                                     "ahHaval160_3", "ahHaval92_3", "ahHaval224_3", "ahHaval256_3", "ahHaval128_4", "ahHaval160_4", "ahHaval192_4", "ahHaval224_4", "ahHaval256_4",
                                                                     "ahHaval128_5", "ahHaval160_5", "ahHaval192_5", "ahHaval224_5", "ahHaval256_5"));
registerBooleanProperty("ZFile", "MD5Validator.Enabled");
registerPropertyEditor("ZFile", "MD5Validator.Hashes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "MimeTypeValidator.Enabled");
registerPropertyEditor("ZFile", "MimeTypeValidator.MimeTypes", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZFile", "MimeTypeValidator.MagicFile", "TFilenamePropertyEditor", "native");
registerBooleanProperty("ZFile", "MimeTypeValidator.HeaderCheck");
registerBooleanProperty("ZFile", "NotExistsValidator.Enabled");
registerPropertyEditor("ZFile", "NotExistsValidator.Directories", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "SHA1Validator.Enabled");
registerPropertyEditor("ZFile", "SHA1Validator.Hashes", "TStringListPropertyEditor", "native");
registerBooleanProperty("ZFile", "SizeValidator.Enabled");
registerBooleanProperty("ZFile", "SizeValidator.ByteString");
registerBooleanProperty("ZFile", "WordCountValidator.Enabled");

registerBooleanProperty("ZFile", "DecryptFilter.Enabled");
registerPropertyValues("ZFile", "DecryptFilter.DecryptAdapter", array('edaMcrypt', 'edaOpenssl'));
registerPropertyValues("ZFile", "DecryptFilter.McryptAlgorithm", array('ma3DES', 'maArcFour_IV', 'maArcFour', 'maBlowfish', 'maCast128', 'maCast256',
                                                                       'maCrypt', 'maDes', 'maDesCompat', 'maEnigma', 'maGost', 'maIdea', 'maLoki97', 'maMars', 'maPanama', 'maRijndael128', 'maRijndael192', 'maRijndael256',
                                                                       'maRC2', 'maRC4', 'maRC6', 'maRC6_128', 'maRC6_192', 'maRC6_256', 'maSafer64', 'maSafer128', 'maSaferPlus', 'maSerpent', 'maSerpent_128', 'maSerpent_192',
                                                                       'maSerpent_256', 'maSkipjack', 'maTean', 'maThreeway', 'maTripleDes', 'maTwoFish', 'maTwoFish128', 'maTwoFish192', 'maTwoFish256', 'maWake', 'maXtea'));
registerPropertyValues("ZFile", "DecryptFilter.McryptMode", array("mmECB", "mmCBC", "mmCFB", "mmOFB", "mmNOFB", "mmSTREAM"));
registerBooleanProperty("ZFile", "DecryptFilter.McryptSalt");
registerPropertyEditor("ZFile", "DecryptFilter.OpensslPublicKey", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZFile", "DecryptFilter.OpensslPrivateKey", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZFile", "DecryptFilter.OpensslEnvelope", "TFilenamePropertyEditor", "native");
registerBooleanProperty("ZFile", "EncryptFilter.Enabled");
registerPropertyValues("ZFile", "EncryptFilter.EncryptAdapter", array('edaMcrypt', 'edaOpenssl'));
registerPropertyValues("ZFile", "EncryptFilter.McryptAlgorithm", array('ma3DES', 'maArcFour_IV', 'maArcFour', 'maBlowfish', 'maCast128', 'maCast256',
                                                                       'maCrypt', 'maDes', 'maDesCompat', 'maEnigma', 'maGost', 'maIdea', 'maLoki97', 'maMars', 'maPanama', 'maRijndael128', 'maRijndael192', 'maRijndael256',
                                                                       'maRC2', 'maRC4', 'maRC6', 'maRC6_128', 'maRC6_192', 'maRC6_256', 'maSafer64', 'maSafer128', 'maSaferPlus', 'maSerpent', 'maSerpent_128', 'maSerpent_192',
                                                                       'maSerpent_256', 'maSkipjack', 'maTean', 'maThreeway', 'maTripleDes', 'maTwoFish', 'maTwoFish128', 'maTwoFish192', 'maTwoFish256', 'maWake', 'maXtea'));
registerPropertyValues("ZFile", "EncryptFilter.McryptMode", array("mmECB", "mmCBC", "mmCFB", "mmOFB", "mmNOFB", "mmSTREAM"));
registerBooleanProperty("ZFile", "EncryptFilter.McryptSalt");
registerPropertyEditor("ZFile", "EncryptFilter.OpensslPublicKey", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZFile", "EncryptFilter.OpensslPrivateKey", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZFile", "EncryptFilter.OpensslEnvelope", "TFilenamePropertyEditor", "native");
registerBooleanProperty("ZFile", "LowerCaseFilter.Enabled");
registerBooleanProperty("ZFile", "UpperCaseFilter.Enabled");
registerBooleanProperty("ZFile", "RenameFilter.Enabled");
registerBooleanProperty("ZFile", "RenameFilter.Overwrite");
registerPropertyEditor("ZFile", "RenameFilter.Source", "TDirectoryPropertyEditor", "native");
registerPropertyEditor("ZFile", "RenameFilter.Target", "TDirectoryPropertyEditor", "native");
registerBooleanProperty("ZFile", "IgnoreNoFile");

registerPropertyValues("ZFeedReader", "SourceType", array("stFile", "stString", "stURL"));
registerPropertyValues("ZFeedWriter", "TypeFeed", array("tfRSS", "tfAtom"));
registerPropertyEditor("ZFeedWriter", "HubsFeed", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZFeedWriter", "CategoriesFeed", "TZFeedCategoriesPropertyEditor", "native");
registerPropertyEditor("ZFeedWriter", "ImagesFeed", "TZFeedImagePropertyEditor", "native");
registerPropertyEditor("ZFeedWriter", "AuthorsFeed", "TZFeedAuthorsPropertyEditor", "native");
//registerPropertyEditor("ZFeedWriter","FeedLinksFeed","TZFeed
registerPropertyEditor("ZPubSubHubBubPublisher", "HubsUrls", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZPubSubHubBubPublisher", "UpdateTopicUrls", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZPubSubHubBubPublisher", "Parameters", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZPubSubHubBubSubscriber", "HubsUrls", "TStringListPropertyEditor", "native");
registerPropertyEditor("ZPubSubHubBubSubscriber", "Parameters", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZPubSubHubBubSubscriber", "Authentications", "TStringListPropertyEditor", "native");
registerPropertyValues("ZPubSubHubBubSubscriber", "VerificationMethod", array("vmAsync", "vmSync"));
registerBooleanProperty("ZPubSubHubBubSubscriber", "UsedPathParameter");
registerPropertyValues("ZPubSubHubBubSubscriber", "Storage.DBAdapter", array('dbaPdoMysql', 'dbaPdoMssql', 'dbaPdoOci', 'dbaPdoPgsql', 'dbaPdoSqlite'
                                                                             , 'dbaMysqli', 'dbaOci8'));

registerBooleanProperty("ZGDataAuth", "UseClientLogin");
registerPasswordProperty("ZGDataAuth", "GooglePassword");

registerPropertyValues("ZGDataCalendar", "ProjectionCalendar", array('pcFull', 'pcBasic', 'pcComposite'));
registerPropertyValues("ZGDataDocs", "ProjectionDocuments", array('pdFull', 'pdBasic', 'pdComposite'));

registerBooleanProperty("ZGDataHealth", "Sandbox");
registerPropertyEditor("ZGDataHealth", "PrivateKeyFile", "TFilenamePropertyEditor", "native");

registerPropertyValues("ZOAuth", "SignatureMethod", array('smHMAC_SHA1', 'smHMAC_SHA256', 'smRSA_SHA1', 'smPLAINTEXT'));
registerPropertyValues("ZOAuth", "RequestMethod", array('rmGET', 'rmPOST'));
registerPropertyValues("ZOAuth", "RequestScheme", array("rsSchemeHeader", "rsSchemePostBody", "rsSchemeQueryString"));
registerPropertyEditor("ZOAuth", "OtherParameters", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZOAuth", "RSAPrivateKey", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZOAuth", "RSAPublicKey", "TFilenamePropertyEditor", "native");

registerPropertyValues("ZRegistry", "TypeRegistry", array("trObject", "trArray"));

registerPropertyValues("ZJson", "EncoderDecoder", array("edPHP", "edZend"));

registerBooleanProperty("ZHttp", "AdapterSocketOptions.Persistent");
registerBooleanProperty("ZHttp", "AdapterSocketOptions.SSLUseContext");
registerBooleanProperty("ZHttp", "Strict");
registerBooleanProperty("ZHttp", "StrictRedirects");
registerBooleanProperty("ZHttp", "KeepAlive");
registerBooleanProperty("ZHttp", "StoreResponse");
registerBooleanProperty("ZHttp", "EncodeCookies");
registerBooleanProperty("ZHttp", "CookiesStickiness");
registerPropertyValues("ZHttp", "AdapterSocketOptions.SSLTransport", array("stSSL", "stSSLv2", "stSSLv3", "stTLS"));
registerPropertyValues("ZHttp", "ClientAdapter", array("caSocket", "caProxy", "caCurl"));
registerPropertyEditor("ZHttp", "AdapterSocketOptions.SSLCert", "TFilenamePropertyEditor", "native");
registerPropertyEditor("ZHttp", "AdapterCurlOptions.Options", "TValueListPropertyEditor", "native");

registerBooleanProperty("ZJsonServer", "DojoCompatible");
registerBooleanProperty("ZJsonServer", "AutoEmitResponse");
registerPropertyValues("ZJsonServer", "EnvelopeType", array("etJSONRPCv1", "etJSONRPCv2"));

registerPropertyValues("ZOpenIdConsumer", "OpenIdConsumerStorage", array("ZOpenIdConsumerStorage"));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Country", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.DateOfBirth", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Email", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.FullName", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Gender", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Language", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Nickname", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Postcode", array('srcDisable', 'srcRequired', 'srcOptional'));
registerPropertyValues("ZOpenIdConsumer", "SimpleRegistrationOptions.Timezone", array('srcDisable', 'srcRequired', 'srcOptional'));
registerBooleanProperty("ZOpenIdConsumer", "InmediateLogin");

registerPasswordProperty("ZOpenIdConsumerStorageDB", "UserPassword");
registerPropertyValues("ZOpenIdConsumerStorageDB", "DriverName", array('mysql', 'sqlserver', 'postgre'));

registerPropertyValues("ZOpenIdProvider", "Storage", array("ZOpenIdProviderStorage"));
registerPropertyValues("ZOpenIdProvider", "User", array("ZOpenIdProviderUser"));

registerPasswordProperty("ZOpenIdProviderStorageDB", "UserPassword");
registerPropertyValues("ZOpenIdProviderStorageDB", "DriverName", array('mysql', 'sqlserver', 'postgre'));

registerPropertyValues("ZMarkup", "MarkupParser", array("mpBBCode", "mpTextile"));
registerPropertyValues("ZMarkup", "DataSource", array('Datasource'));

registerBooleanProperty("ZLog", "WriterStream.Active");
registerBooleanProperty("ZLog", "WriterFirebug.Active");
registerBooleanProperty("ZLog", "WriterDatabase.Active");
registerPropertyValues("ZLog", "WriterDatabase.Drivername", array('mysql', 'sqlserver', 'postgre'));

registerBooleanProperty("ZLog", "WriterEmail.Active");
registerBooleanProperty("ZLog", "WriterSyslog.Active");
registerBooleanProperty("ZLog", "WriterZendMonitor.Active");
registerBooleanProperty("ZLog", "WriterNull.Active");
registerPropertyEditor("ZLog", "AddPriority", "TValueListPropertyEditor", "native");

registerPropertyEditor("ZLog", "WriterStream.FormatterXmlElements", "TValueListPropertyEditor", "native");
registerPropertyEditor("ZLog", "WriterFirebug.AddPriorityStyle", "TValueListPropertyEditor", "native");
registerBooleanProperty("ZLog", "WriterStream.FormatterXmlActive");
registerBooleanProperty("ZLog", "WriterStream.FormatterSimpleActive");
registerPropertyValues("ZLog", "WriterEmail.ZMail", array('ZMail'));

registerBooleanProperty("ZLog", "WriterStream.PriorityAlert");
registerBooleanProperty("ZLog", "WriterStream.PriorityCrit");
registerBooleanProperty("ZLog", "WriterStream.PriorityDebug");
registerBooleanProperty("ZLog", "WriterStream.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterStream.PriorityErr");
registerBooleanProperty("ZLog", "WriterStream.PriorityInfo");
registerBooleanProperty("ZLog", "WriterStream.PriorityNotice");
registerBooleanProperty("ZLog", "WriterStream.PriorityWarn");

registerBooleanProperty("ZLog", "WriterFirebug.PriorityAlert");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityCrit");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityDebug");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityErr");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityInfo");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityNotice");
registerBooleanProperty("ZLog", "WriterFirebug.PriorityWarn");

registerBooleanProperty("ZLog", "WriterEmail.PriorityAlert");
registerBooleanProperty("ZLog", "WriterEmail.PriorityCrit");
registerBooleanProperty("ZLog", "WriterEmail.PriorityDebug");
registerBooleanProperty("ZLog", "WriterEmail.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterEmail.PriorityErr");
registerBooleanProperty("ZLog", "WriterEmail.PriorityInfo");
registerBooleanProperty("ZLog", "WriterEmail.PriorityNotice");
registerBooleanProperty("ZLog", "WriterEmail.PriorityWarn");

registerBooleanProperty("ZLog", "WriterDatabase.PriorityAlert");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityCrit");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityDebug");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityErr");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityInfo");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityNotice");
registerBooleanProperty("ZLog", "WriterDatabase.PriorityWarn");

registerBooleanProperty("ZLog", "WriterSyslog.PriorityAlert");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityCrit");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityDebug");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityErr");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityInfo");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityNotice");
registerBooleanProperty("ZLog", "WriterSyslog.PriorityWarn");

registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityAlert");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityCrit");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityDebug");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityErr");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityInfo");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityNotice");
registerBooleanProperty("ZLog", "WriterZendMonitor.PriorityWarn");

registerBooleanProperty("ZLog", "WriterNull.PriorityAlert");
registerBooleanProperty("ZLog", "WriterNull.PriorityCrit");
registerBooleanProperty("ZLog", "WriterNull.PriorityDebug");
registerBooleanProperty("ZLog", "WriterNull.PriorityEmerg");
registerBooleanProperty("ZLog", "WriterNull.PriorityErr");
registerBooleanProperty("ZLog", "WriterNull.PriorityInfo");
registerBooleanProperty("ZLog", "WriterNull.PriorityNotice");
registerBooleanProperty("ZLog", "WriterNull.PriorityWarn");

registerPropertyValues("ZPdf", "StyleFontName", array('fnCourier', 'fnCourierBold', 'fnCourierItalic', 'fnCourierBoldItalic', 'fnTimes', 'fnTimesBold', 'fnTimeItalic', 'fnTimesBoldItalic', 'fnHelvetica', 'fnHelveticaBold', 'fnHelveticaItalic', 'fnHelveticaBoldItalic', 'fnSymbol', 'fnZapfdingbats'));
registerPropertyEditor("ZPdf", "StyleFillColor", "TSamplePropertyEditor", "native");
registerPropertyEditor("ZPdf", "StyleLineColor", "TSamplePropertyEditor", "native");
registerPropertyEditor("ZPdf", "StyleLineDhasing", "TValueListPropertyEditor", "native");


registerBooleanProperty("ZHttp", "AdapterSocketOptions.Persistent");
registerBooleanProperty("ZHttp", "AdapterSocketOptions.SSLUseContext");
registerBooleanProperty("ZHttp", "Strict");
registerBooleanProperty("ZHttp", "StrictRedirects");
registerBooleanProperty("ZHttp", "KeepAlive");
registerBooleanProperty("ZHttp", "StoreResponse");
registerBooleanProperty("ZHttp", "EncodeCookies");
registerBooleanProperty("ZHttp", "CookiesStickiness");
registerPropertyValues("ZHttp", "AdapterSocketOptions.SSLTransport",array("stSSL","stSSLv2","stSSLv3","stTLS"));
registerPropertyValues("ZHttp", "ClientAdapter", array("caSocket","caProxy","caCurl"));
registerPropertyEditor("ZHttp", "AdapterSocketOptions.SSLCert","TFilenamePropertyEditor","native");
registerPropertyEditor("ZHttp", "AdapterCurlOptions.Options","TValueListPropertyEditor","native");



?>