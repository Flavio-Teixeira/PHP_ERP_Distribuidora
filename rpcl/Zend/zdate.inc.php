<?php

/**
 * Zend/zdate.inc.php
 * 
 * Defines Zend Framework Date component.
 *
 * This file is part of the RPCL project.
 *
 * Copyright (c) 2004-2011 Embarcadero Technologies, Inc.
 *
 * Check out AUTHORS file for a complete list of project contributors.
 *
 * LICENSE:
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 2.1 of the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307
 * USA
 * 
 * @package     ZendFramework
 * @copyright   2004-2011 Embarcadero Technologies, Inc.
 * @license     http://www.gnu.org/licenses/lgpl-2.1.txt LGPL
 * 
 */

/**
 * Include RPCL common file and necessary units.
 */
require_once("rpcl/rpcl.inc.php");
use_unit("controls.inc.php");
use_unit("Zend/framework/library/Zend/Date.php");

// Format Type

/**
 * PHP format.
 * 
 * @const       ftPHP
 */
define('ftPHP', 'ftPHP');

/**
 * ISO format.
 * 
 * @const       ftISO
 */
define('ftISO', 'ftISO');

// Locales

define('dlAA', 'dlAA');
define('dlAF', 'dlAF');
define('dlAK', 'dlAK');
define('dlAM', 'dlAM');
define('dlAR', 'dlAR');
define('dlAZ', 'dlAZ');
define('dlBE', 'dlBE');
define('dlBG', 'dlBG');
define('dlBN', 'dlBN');
define('dlBO', 'dlBO');
define('dlBS', 'dlBS');
define('dlBYN', 'dlBYN');
define('dlCA', 'dlCA');
define('dlCCH', 'dlCCH');
define('dlCOP', 'dlCOP');
define('dlCS', 'dlCS');
define('dlCY', 'dlCY');
define('dlDA', 'dlDA');
define('dlDE', 'dlDE');
define('dlDV', 'dlDV');
define('dlDZ', 'dlDZ');
define('dlEE', 'dlEE');
define('dlEL', 'dlEL');
define('dlEN', 'dlEN');
define('dlEO', 'dlEO');
define('dlES', 'dlES');
define('dlET', 'dlET');
define('dlEU', 'dlEU');
define('dlFA', 'dlFA');
define('dlFI', 'dlFI');
define('dlFIL', 'dlFIL');
define('dlFO', 'dlFO');
define('dlFR', 'dlFR');
define('dlFUR', 'frFUR');
define('dlGA', 'dlGA');
define('dlGAA', 'dlGAA');
define('dlGEZ', 'dlGEZ');
define('dlGL', 'dlGL');
define('dlGSW', 'dlGSW');
define('dlGU', 'dlGU');
define('dlGV', 'dlGV');
define('dlHA', 'dlHA');
define('dlHAW', 'dlHAW');
define('dlHE', 'dlHE');
define('dlHI', 'dlHI');
define('dlHR', 'dlHR');
define('dlHU', 'dlHU');
define('dlHY', 'dlHY');
define('dlIA', 'dlIA');
define('dlID', 'dlID');
define('dlIG', 'dlIG');
define('dlII', 'dlII');
define('dlIN', 'dlIN');
define('dlIS', 'dlIS');
define('dlIT', 'dlIT');
define('dlIU', 'dlIU');
define('dlIW', 'dlIW');
define('dlJA', 'dlJA');
define('dlKA', 'dlKA');
define('dlKAJ', 'dlKAJ');
define('dlKAM', 'dlKAM');
define('dlKCG', 'dlKCG');
define('dlKFO', 'dlKFO');
define('dlKK', 'dlKK');
define('dlKL', 'dlKL');
define('dlKM', 'dlKM');
define('dlKN', 'dlKN');
define('dlKO', 'dlKO');
define('dlKOK', 'dlKOK');
define('dlKPE', 'dlKPE');
define('dlKU', 'dlKU');
define('dlKW', 'dlKW');
define('dlKY', 'dlKY');
define('dlLN', 'dlLN');
define('dlLO', 'dlLO');
define('dlLT', 'dlLT');
define('dlLV', 'dlLV');
define('dlMK', 'dlMK');
define('dlML', 'dlML');
define('dlMN', 'dlMN');
define('dlMO', 'dlMO');
define('dlMR', 'dlMR');
define('dlMS', 'dlMS');
define('dlMT', 'dlMT');
define('dlMY', 'dlMY');
define('dlNB', 'dlNB');
define('dlNDS', 'dlNDS');
define('dlNE', 'dlNE');
define('dlNL', 'dlNL');
define('dlNN', 'dlNN');
define('dlNR', 'dlNR');
define('dlNSO', 'dlNSO');
define('dlNY', 'dlNY');
define('dlOC', 'dlOC');
define('dlOM', 'dlOM');
define('dlOR', 'dlOR');
define('dlPA', 'dlPA');
define('dlPL', 'dlPL');
define('dlPS', 'dlPS');
define('dlPT', 'dlPT');
define('dlRO', 'dlRO');
define('dlRU', 'dlRU');
define('dlRW', 'dlRW');
define('dlSA', 'dlSA');
define('dlSE', 'dlSE');
define('dlSH', 'dlSH');
define('dlSI', 'dlSI');
define('dlSID', 'dlSID');
define('dlSK', 'dlSK');
define('dlSL', 'dlSL');
define('dlSO', 'dlSO');
define('dlSQ', 'dlSQ');
define('dlSR', 'dlSR');
define('dlST', 'dlST');
define('dlSV', 'dlSV');
define('dlSW', 'dlSW');
define('dlSYR', 'dlSYR');
define('dlTA', 'dlTA');
define('dlTE', 'dlTE');
define('dlTG', 'dlTG');
define('dlTIG', 'dlTIG');
define('dlTL', 'dlTL');
define('dlTN', 'dlTN');
define('dlTO', 'dlTO');
define('dlTR', 'dlTR');
define('dlTRV', 'dlTRV');
define('dlTS', 'dlTS');
define('dlTT', 'dlTT');
define('dlUG', 'dlUG');
define('dlUK', 'dlUK');
define('dlUR', 'dlUR');
define('dlUZ', 'dlUZ');
define('dlVE', 'dlVE');
define('dlVI', 'dlVI');
define('dlWAL', 'dlWAL');
define('dlWO', 'dlWO');
define('dlXH', 'dlXH');
define('dlYO', 'dlYO');
define('dlZH', 'dlZH');
define('dlZU', 'dlZU');

// Timezones

define('ddtAfrica_Abidjan', 'ddtAfrica_Abidjan');
define('ddtAfrica_Accra', 'ddtAfrica_Accra');
define('ddtAfrica_Addis_Ababa', 'ddtAfrica_Addis_Ababa');
define('ddtAfrica_Algiers', 'ddtAfrica_Algiers');
define('ddtAfrica_Asmara', 'ddtAfrica_Asmara');
define('ddtAfrica_Asmera', 'ddtAfrica_Asmera');
define('ddtAfrica_Bamako', 'ddtAfrica_Bamako');
define('ddtAfrica_Bangui', 'ddtAfrica_Bangui');
define('ddtAfrica_Banjul', 'ddtAfrica_Banjul');
define('ddtAfrica_Bissau', 'ddtAfrica_Bissau');
define('ddtAfrica_Blantyre', 'ddtAfrica_Blantyre');
define('ddtAfrica_Brazzaville', 'ddtAfrica_Brazzaville');
define('ddtAfrica_Bujumbura', 'ddtAfrica_Bujumbura');
define('ddtAfrica_Cairo', 'ddtAfrica_Cairo');
define('ddtAfrica_Casablanca', 'ddtAfrica_Casablanca');
define('ddtAfrica_Ceuta', 'ddtAfrica_Ceuta');
define('ddtAfrica_Conakry', 'ddtAfrica_Conakry');
define('ddtAfrica_Dakar', 'ddtAfrica_Dakar');
define('ddtAfrica_Dar_es_Salaam', 'ddtAfrica_Dar_es_Salaam');
define('ddtAfrica_Djibouti', 'ddtAfrica_Djibouti');
define('ddtAfrica_Douala', 'ddtAfrica_Douala');
define('ddtAfrica_El_Aaiun', 'ddtAfrica_El_Aaiun');
define('ddtAfrica_Freetown', 'ddtAfrica_Freetown');
define('ddtAfrica_Gaborone', 'ddtAfrica_Gaborone');
define('ddtAfrica_Harare', 'ddtAfrica_Harare');
define('ddtAfrica_Johannesburg', 'ddtAfrica_Johannesburg');
define('ddtAfrica_Kampala', 'ddtAfrica_Kampala');
define('ddtAfrica_Khartoum', 'ddtAfrica_Khartoum');
define('ddtAfrica_Kigali', 'ddtAfrica_Kigali');
define('ddtAfrica_Kinshasa', 'ddtAfrica_Kinshasa');
define('ddtAfrica_Lagos', 'ddtAfrica_Lagos');
define('ddtAfrica_Libreville', 'ddtAfrica_Libreville');
define('ddtAfrica_Lome', 'ddtAfrica_Lome');
define('ddtAfrica_Luanda', 'ddtAfrica_Luanda');
define('ddtAfrica_Lubumbashi', 'ddtAfrica_Lubumbashi');
define('ddtAfrica_Lusaka', 'ddtAfrica_Lusaka');
define('ddtAfrica_Malabo', 'ddtAfrica_Malabo');
define('ddtAfrica_Maputo', 'ddtAfrica_Maputo');
define('ddtAfrica_Maseru', 'ddtAfrica_Maseru');
define('ddtAfrica_Mbabane', 'ddtAfrica_Mbabane');
define('ddtAfrica_Mogadishu', 'ddtAfrica_Mogadishu');
define('ddtAfrica_Monravia', 'ddtAfrica_Monravia');
define('ddtAfrica_Nairobi', 'ddtAfrica_Nairobi');
define('ddtAfrica_Ndjamena', 'ddtAfrica_Ndjamena');
define('ddtAfrica_Niamey', 'ddtAfrica_Niamey');
define('ddtAfrica_Nouakchott', 'ddtAfrica_Nouakchott');
define('ddtAfrica_Ouagadougou', 'ddtAfrica_Ouagadougou');
define('ddtAfrica_Porto_Novo', 'ddtAfrica_Porto_Novo');
define('ddtAfrica_Sao_Tome', 'ddtAfrica_Sao_Tome');
define('ddtAfrica_Timbuktu', 'ddtAfrica_Timbuktu');
define('ddtAfrica_Tripoli', 'ddtAfrica_Tripoli');
define('ddtAfrica_Tunis', 'ddtAfrica_Tunis');
define('ddtAfrica_Windhoek', 'ddtAfrica_Windhoek');
define('ddtAmerica_Adak', 'ddtAmerica_Adak');
define('ddtAmerica_Anchorage', 'ddtAmerica_Anchorage');
define('ddtAmerica_Anguilla', 'ddtAmerica_Anguilla');
define('ddtAmerica_Antigua', 'ddtAmerica_Antigua');
define('ddtAmerica_Araguaina', 'ddtAmerica_Araguaina');
define('ddtAmerica_Argentina_Buenos_Aires', 'ddtAmerica_Argentina_Buenos_Aires');
define('ddtAmerica_Argentina_Catamarca', 'ddtAmerica_Argentina_Catamarca');
define('ddtAmerica_Argentina_ComodRivadavia', 'ddtAmerica_Argentina_ComodRivadavia');
define('ddtAmerica_Argentina_Cordoba', 'ddtAmerica_Argentina_Cordoba');
define('ddtAmerica_Argentina_Jujuy', 'ddtAmerica_Argentina_Jujuy');
define('ddtAmerica_Argentina_La_Rioja', 'ddtAmerica_Argentina_La_Rioja');
define('ddtAmerica_Argentina_Mendoza', 'ddtAmerica_Argentina_Mendoza');
define('ddtAmerica_Argentina_Rio_Gallegos', 'ddtAmerica_Argentina_Rio_Gallegos');
define('ddtAmerica_Argentina_Salta', 'ddtAmerica_Argentina_Salta');
define('ddtAmerica_Argentina_San_Juan', 'ddtAmerica_Argentina_San_Juan');
define('ddtAmerica_Argentina_San_Luis', 'ddtAmerica_Argentina_San_Luis');
define('ddtAmerica_Argentina_Tucuman', 'ddtAmerica_Argentina_Tucuman');
define('ddtAmerica_Argentina_Ushuaia', 'ddtAmerica_Argentina_Ushuaia');
define('ddtAmerica_Aruba', 'ddtAmerica_Aruba');
define('ddtAmerica_Asuncion', 'ddtAmerica_Asuncion');
define('ddtAmerica_Atikokan', 'ddtAmerica_Atikokan');
define('ddtAmerica_Atka', 'ddtAmerica_Atka');
define('ddtAmerica_Bahia', 'ddtAmerica_Bahia');
define('ddtAmerica_Bahia_Banderas', 'ddtAmerica_Bahia_Banderas');
define('ddtAmerica_Barbados', 'ddtAmerica_Barbados');
define('ddtAmerica_Belem', 'ddtAmerica_Belem');
define('ddtAmerica_Belize', 'ddtAmerica_Belize');
define('ddtAmerica_Blanc_Sablon', 'ddtAmerica_Blanc_Sablon');
define('ddtAmerica_Boa_Vista', 'ddtAmerica_Boa_Vista');
define('ddtAmerica_Bogota', 'ddtAmerica_Bogota');
define('ddtAmerica_Boise', 'ddtAmerica_Boise');
define('ddtAmerica_Buenos_Aires', 'ddtAmerica_Buenos_Aires');
define('ddtAmerica_Cambridge_Bay', 'ddtAmerica_Cambridge_Bay');
define('ddtAmerica_Campo_Grande', 'ddtAmerica_Campo_Grande');
define('ddtAmerica_Cancun', 'ddtAmerica_Cancun');
define('ddtAmerica_Caracas', 'ddtAmerica_Caracas');
define('ddtAmerica_Catamarca', 'ddtAmerica_Catamarca');
define('ddtAmerica_Cayenne', 'ddtAmerica_Cayenne');
define('ddtAmerica_Cayman', 'ddtAmerica_Cayman');
define('ddtAmerica_Chicago', 'ddtAmerica_Chicago');
define('ddtAmerica_Chihuahua', 'ddtAmerica_Chihuahua');
define('ddtAmerica_Coral_Harbour', 'ddtAmerica_Coral_Harbour');
define('ddtAmerica_Cordoba', 'ddtAmerica_Cordoba');
define('ddtAmerica_Costa_Rica', 'ddtAmerica_Costa_Rica');
define('ddtAmerica_Cuiaba', 'ddtAmerica_Cuiaba');
define('ddtAmerica_Curacao', 'ddtAmerica_Curacao');
define('ddtAmerica_Danmarkshavn', 'ddtAmerica_Danmarkshavn');
define('ddtAmerica_Dawson', 'ddtAmerica_Dawson');
define('ddtAmerica_Dawson_Creek', 'ddtAmerica_Dawson_Creek');
define('ddtAmerica_Denver', 'ddtAmerica_Denver');
define('ddtAmerica_Detroit', 'ddtAmerica_Detroit');
define('ddtAmerica_Dominica', 'ddtAmerica_Dominica');
define('ddtAmerica_Edmonton', 'ddtAmerica_Edmonton');
define('ddtAmerica_Eirunepe', 'ddtAmerica_Eirunepe');
define('ddtAmerica_El_Salvador', 'ddtAmerica_El_Salvador');
define('ddtAmerica_Ensenada', 'ddtAmerica_Ensenada');
define('ddtAmerica_Fort_Wayne', 'ddtAmerica_Fort_Wayne');
define('ddtAmerica_Fortaleza', 'ddtAmerica_Fortaleza');
define('ddtAmerica_Glace_Bay', 'ddtAmerica_Glace_Bay');
define('ddtAmerica_Godthab', 'ddtAmerica_Godthab');
define('ddtAmerica_Goose_Bay', 'ddtAmerica_Goose_Bay');
define('ddtAmerica_Grand_Turk', 'ddtAmerica_Grand_Turk');
define('ddtAmerica_Grenada', 'ddtAmerica_Grenada');
define('ddtAmerica_Guadeloupe', 'ddtAmerica_Guadeloupe');
define('ddtAmerica_Guatemala', 'ddtAmerica_Guatemala');
define('ddtAmerica_Guayaquil', 'ddtAmerica_Guayaquil');
define('ddtAmerica_Guyana', 'ddtAmerica_Guyana');
define('ddtAmerica_Halifax', 'ddtAmerica_Halifax');
define('ddtAmerica_Havana', 'ddtAmerica_Havana');
define('ddtAmerica_Hermosillo', 'ddtAmerica_Hermosillo');
define('ddtAmerica_Indiana_Indianapolis', 'ddtAmerica_Indiana_Indianapolis');
define('ddtAmerica_Indiana_Knox', 'ddtAmerica_Indiana_Knox');
define('ddtAmerica_Indiana_Marengo', 'ddtAmerica_Indiana_Marengo');
define('ddtAmerica_Indiana_Petersburg', 'ddtAmerica_Indiana_Petersburg');
define('ddtAmerica_Indiana_Tell_City', 'ddtAmerica_Indiana_Tell_City');
define('ddtAmerica_Indiana_Vevay', 'ddtAmerica_Indiana_Vevay');
define('ddtAmerica_Indiana_Vincennes', 'ddtAmerica_Indiana_Vincennes');
define('ddtAmerica_Indiana_Winamac', 'ddtAmerica_Indiana_Winamac');
define('ddtAmerica_Indianapolis', 'ddtAmerica_Indianapolis');
define('ddtAmerica_Inuvik', 'ddtAmerica_Inuvik');
define('ddtAmerica_Iqaluit', 'ddtAmerica_Iqaluit');
define('ddtAmerica_Jamaica', 'ddtAmerica_Jaimaca');
define('ddtAmerica_Jujuy', 'ddtAmerica_Jujuy');
define('ddtAmerica_Juneau', 'ddtAmerica_Juneau');
define('ddtAmerica_Kentucky_Louisville', 'ddtAmerica_Kentucky_Louisville');
define('ddtAmerica_Kentucky_Monticello', 'ddtAmerica_Kentucky_Monticello');
define('ddtAmerica_Knox_IN', 'ddtAmerica_Knox_IN');
define('ddtAmerica_La_Paz', 'ddtAmerica_La_Paz');
define('ddtAmerica_Lima', 'ddtAmerica_Lima');
define('ddtAmerica_Los_Angeles', 'ddtAmerica_Los_Angeles');
define('ddtAmerica_Louisville', 'ddtAmerica_Louisville');
define('ddtAmerica_Maceio', 'ddtAmerica_Maceio');
define('ddtAmerica_Managua', 'ddtAmerica_Managua');
define('ddtAmerica_Manaus', 'ddtAmerica_Manaus');
define('ddtAmerica_Marigot', 'ddtAmerica_Marigot');
define('ddtAmerica_Martinique', 'ddtAmerica_Martinique');
define('ddtAmerica_Matamoros', 'ddtAmerica_Matamoros');
define('ddtAmerica_Mazatlan', 'ddtAmerica_Mazatlan');
define('ddtAmerica_Mendoza', 'ddtAmerica_Mendoza');
define('ddtAmerica_Menominee', 'ddtAmerica_Menominee');
define('ddtAmerica_Merida', 'ddtAmerica_Merida');
define('ddtAmerica_Mexico_City', 'ddtAmerica_Mexico_City');
define('ddtAmerica_Miquelon', 'ddtAmerica_Miquelon');
define('ddtAmerica_Moncton', 'ddtAmerica_Moncton');
define('ddtAmerica_Monterrey', 'ddtAmerica_Monterrey');
define('ddtAmerica_Montevideo', 'ddtAmerica_Montevideo');
define('ddtAmerica_Montreal', 'ddtAmerica_Montreal');
define('ddtAmerica_Montserrat', 'ddtAmerica_Montserrat');
define('ddtAmerica_Nassau', 'ddtAmerica_Nassau');
define('ddtAmerica_New_York', 'ddtAmerica_New_York');
define('ddtAmerica_Nipigon', 'ddtAmerica_Nipigon');
define('ddtAmerica_Nome', 'ddtAmerica_Nome');
define('ddtAmerica_Noronha', 'ddtAmerica_Noronha');
define('ddtAmerica_North_Dakota_Beulah', 'ddtAmerica_North_Dakota_Beulah');
define('ddtAmerica_North_Dakota_Center', 'ddtAmerica_North_Dakota_Center');
define('ddtAmerica_North_Dakota_New_Salem', 'ddtAmerica_North_Dakota_New_Salem');
define('ddtAmerica_Ojinaga', 'ddtAmerica_Ojinaga');
define('ddtAmerica_Panama', 'ddtAmerica_Panama');
define('ddtAmerica_Pangnirtung', 'ddtAmerica_Pangnirtung');
define('ddtAmerica_Paramaribo', 'ddtAmerica_Paramaribo');
define('ddtAmerica_Phoenix', 'ddtAmerica_Phoenix');
define('ddtAmerica_Port_au_Prince', 'ddtAmerica_Port_au_Prince');
define('ddtAmerica_Port_of_Spain', 'ddtAmerica_Port_of_Spain');
define('ddtAmerica_Porto_Acre', 'ddtAmerica_Porto_Acre');
define('ddtAmerica_Porto_Velho', 'ddtAmerica_Porto_Velho');
define('ddtAmerica_Puerto_Rico', 'ddtAmerica_Puerto_Rico');
define('ddtAmerica_Rainy_River', 'ddtAmerica_Rainy_River');
define('ddtAmerica_Rankin_Inlet', 'ddtAmerica_Rankin_Inlet');
define('ddtAmerica_Recife', 'ddtAmerica_Recife');
define('ddtAmerica_Regina', 'ddtAmerica_Regina');
define('ddtAmerica_Resolute', 'ddtAmerica_Resolute');
define('ddtAmerica_Rio_Branco', 'ddtAmerica_Rio_Branco');
define('ddtAmerica_Rosario', 'ddtAmerica_Rosario');
define('ddtAmerica_Santa_Isabel', 'ddtAmerica_Santa_Isabel');
define('ddtAmerica_Santarem', 'ddtAmerica_Santarem');
define('ddtAmerica_Santiago', 'ddtAmerica_Santiago');
define('ddtAmerica_Santo_Domingo', 'ddtAmerica_Santo_Domingo');
define('ddtAmerica_Sao_Paulo', 'ddtAmerica_Sao_Paulo');
define('ddtAmerica_Scoresbysund', 'ddtAmerica_Scoresbysund');
define('ddtAmerica_Shiprock', 'ddtAmerica_Shiprock');
define('ddtAmerica_St_Barthelemy', 'ddtAmerica_St_Barthelemy');
define('ddtAmerica_St_Johns', 'ddtAmerica_St_Johns');
define('ddtAmerica_St_Kitts', 'ddtAmerica_St_Kitts');
define('ddtAmerica_St_Lucia', 'ddtAmerica_St_Lucia');
define('ddtAmerica_St_Thomas', 'ddtAmerica_St_Thomas');
define('ddtAmerica_St_Vicent', 'ddtAmerica_St_Vicent');
define('ddtAmerica_Swift_Current', 'ddtAmerica_Swift_Current');
define('ddtAmerica_Tegucigalpa', 'ddtAmerica_Tegucigalpa');
define('ddtAmerica_Thule', 'ddtAmerica_Thule');
define('ddtAmerica_Thunder_Bay', 'ddtAmerica_Thunder_Bay');
define('ddtAmerica_Tijuana', 'ddtAmerica_Tijuana');
define('ddtAmerica_Toronto', 'ddtAmerica_Toronto');
define('ddtAmerica_Tortola', 'ddtAmerica_Tortola');
define('ddtAmerica_Vancouver', 'ddtAmerica_Vancouver');
define('ddtAmerica_Virgin', 'ddtAmerica_Virgin');
define('ddtAmerica_Whitehorse', 'ddtAmerica_Whitehorse');
define('ddtAmerica_Winnipeg', 'ddtAmerica_Winnipeg');
define('ddtAmerica_Yakutat', 'ddtAmerica_Yakutat');
define('ddtAmerica_Yellowknife', 'ddtAmerica_Yellowknife');
define('ddtAntarctica_Casey', 'ddtAntarctica_Casey');
define('ddtAntarctica_Davis', 'ddtAntarctica_Davis');
define('ddtAntarctica_DumontDUrville', 'ddtAntarctica_DumontDUrville');
define('ddtAntarctica_Macquarie', 'ddtAntarctica_Macquarie');
define('ddtAntarctica_Mawson', 'ddtAntarctica_Mawson');
define('ddtAntarctica_McMurdo', 'ddtAntarctica_McMurdo');
define('ddtAntarctica_Palmer', 'ddtAntarctica_Palmer');
define('ddtAntarctica_Rothera', 'ddtAntarctica_Rothera');
define('ddtAntarctica_South_Pole', 'ddtAntarctica_South_Pole');
define('ddtAntarctica_Syowa', 'ddtAntarctica_Syowa');
define('ddtAntarctica_Vostok', 'ddtAntarctica_Vostok');
define('ddtArctic_Longyearbyen', 'ddtArctic_Longyearbyen');
define('ddtAsia_Aden', 'ddtAsia_Aden');
define('ddtAsia_Almaty', 'ddtAsia_Almaty');
define('ddtAsia_Amman', 'ddtAsia_Amman');
define('ddtAsia_Anadyr', 'ddtAsia_Anadyr');
define('ddtAsia_Aqtau', 'ddtAsia_Aqtau');
define('ddtAsia_Aqtobe', 'ddtAsia_Aqtobe');
define('ddtAsia_Ashgabat', 'ddtAsia_Ashgabat');
define('ddtAsia_Ashkhabad', 'ddtAsia_Ashkhabad');
define('ddtAsia_Baghdad', 'ddtAsia_Baghdad');
define('ddtAsia_Bahrain', 'ddtAsia_Bahrain');
define('ddtAsia_Baku', 'ddtAsia_Baku');
define('ddtAsia_Bangkok', 'ddtAsia_Bangkok');
define('ddtAsia_Beirut', 'ddtAsia_Beirut');
define('ddtAsia_Bishkek', 'ddtAsia_Bishkek');
define('ddtAsia_Brunei', 'ddtAsia_Brunei');
define('ddtAsia_Calcutta', 'ddtAsia_Calcutta');
define('ddtAsia_Choibalsan', 'ddtAsia_Choibalsan');
define('ddtAsia_Chongqing', 'ddtAsia_Chongqing');
define('ddtAsia_Chungking', 'ddtAsia_Chungking');
define('ddtAsia_Colombo', 'ddtAsia_Colombo');
define('ddtAsia_Dacca', 'ddtAsia_Dacca');
define('ddtAsia_Damascus', 'ddtAsia_Damascus');
define('ddtAsia_Dhaka', 'ddtAsia_Dhaka');
define('ddtAsia_Dili', 'ddtAsia_Dili');
define('ddtAsia_Dubai', 'ddtAsia_Dubai');
define('ddtAsia_Dushanbe', 'ddtAsia_Dushanbe');
define('ddtAsia_Gaza', 'ddtAsia_Gaza');
define('ddtAsia_Harbin', 'ddtAsia_Harbin');
define('ddtAsia_Ho_Chi_Minh', 'ddtAsia_Ho_Chi_Minh');
define('ddtAsia_Hong_Kong', 'ddtAsia_Hong_Kong');
define('ddtAsia_Hovd', 'ddtAsia_Hovd');
define('ddtAsia_Irkutsk', 'ddtAsia_Irkutsk');
define('ddtAsia_Istanbul', 'ddtAsia_Istanbul');
define('ddtAsia_Jakarta', 'ddtAsia_Jakarta');
define('ddtAsia_Jayapura', 'ddtAsia_Jayapura');
define('ddtAsia_Jerusalem', 'ddtAsia_Jerusalem');
define('ddtAsia_Kabul', 'ddtAsia_Kabul');
define('ddtAsia_Kamchatka', 'ddtAsia_Kamchatka');
define('ddtAsia_Karachi', 'ddtAsia_Karachi');
define('ddtAsia_Kashgar', 'ddtAsia_Kashgar');
define('ddtAsia_Kathmandu', 'ddtAsia_Kathmandu');
define('ddtAsia_Katmandu', 'ddtAsia_Katmandu');
define('ddtAsia_Kolkata', 'ddtAsia_Kolkata');
define('ddtAsia_Krasnoyarsk', 'ddtAsia_Krasnoyarsk');
define('ddtAsia_Kuala_Lumpur', 'ddtAsia_Kuala_Lumpur');
define('ddtAsia_Kuching', 'ddtAsia_Kuching');
define('ddtAsia_Kuwait', 'ddtAsia_Kuwait');
define('ddtAsia_Macao', 'ddtAsia_Macao');
define('ddtAsia_Macau', 'ddtAsia_Macau');
define('ddtAsia_Magadan', 'ddtAsia_Magadan');
define('ddtAsia_Makassar', 'ddtAsia_Makassar');
define('ddtAsia_Manila', 'ddtAsia_Manila');
define('ddtAsia_Muscat', 'ddtAsia_Muscat');
define('ddtAsia_Nicosia', 'ddtAsia_Nicosia');
define('ddtAsia_Novokuznetsk', 'ddtAsia_Novokuznetsk');
define('ddtAsia_Novosibirsk', 'ddtAsia_Novosibirsk');
define('ddtAsia_Omsk', 'ddtAsia_Omsk');
define('ddtAsia_Oral', 'ddtAsia_Oral');
define('ddtAsia_Phnom_Penh', 'ddtAsia_Phnom_Penh');
define('ddtAsia_Pontianak', 'ddtAsia_Pontianak');
define('ddtAsia_Pyongyang', 'ddtAsia_Pyongyang');
define('ddtAsia_Qatar', 'ddtAsia_Qatar');
define('ddtAsia_Qyzylorda', 'ddtAsia_Qyzylorda');
define('ddtAsia_Rangoon', 'ddtAsia_Rangoon');
define('ddtAsia_Riyadh', 'ddtAsia_Riyadh');
define('ddtAsia_Saigon', 'ddtAsia_Saigon');
define('ddtAsia_Sakhalin', 'ddtAsia_Sakhalin');
define('ddtAsia_Samarkand', 'ddtAsia_Samarkand');
define('ddtAsia_Seoul', 'ddtAsia_Seoul');
define('ddtAsia_Shanghai', 'ddtAsia_Shanghai');
define('ddtAsia_Singapore', 'ddtAsia_Singapore');
define('ddtAsia_Taipei', 'ddtAsia_Taipei');
define('ddtAsia_Tashkent', 'ddtAsia_Tashkent');
define('ddtAsia_Tbilisi', 'ddtAsia_Tbilisi');
define('ddtAsia_Tehran', 'ddtAsia_Tehran');
define('ddtAsia_Tel_Aviv', 'ddtAsia_Tel_Aviv');
define('ddtAsia_Thimbu', 'ddtAsia_Thimbu');
define('ddtAsia_Thimphu', 'ddtAsia_Thimphu');
define('ddtAsia_Tokyo', 'ddtAsia_Tokyo');
define('ddtAsia_Ujung_Pandang', 'ddtAsia_Ujung_Pandang');
define('ddtAsia_Ulaanbaatar', 'ddtAsia_Ulaanbaatar');
define('ddtAsia_Ulan_Bator', 'ddtAsia_Ulan_Bator');
define('ddtAsia_Urumqi', 'ddtAsia_Urumqi');
define('ddtAsia_Vientiane', 'ddtAsia_Vientiane');
define('ddtAsia_Vladivostok', 'ddtAsia_Vladivostok');
define('ddtAsia_Yakutsk', 'ddtAsia_Yakutsk');
define('ddtAsia_Yekaterinburg', 'ddtAsia_Yekaterinburg');
define('ddtAsia_Yeveran', 'ddtAsia_Yeveran');
define('ddtAtlantic_Azores', 'ddtAtlantic_Azores');
define('ddtAtlantic_Bermuda', 'ddtAtlantic_Bermuda');
define('ddtAtlantic_Canary', 'ddtAtlantic_Canary');
define('ddtAtlantic_Cape_Verde', 'ddtAtlantic_Cape_Verde');
define('ddtAtlantic_Faeroe', 'ddtAtlantic_Faeroe');
define('ddtAtlantic_Faroe', 'ddtAtlantic_Faroe');
define('ddtAtlantic_Jan_Mayen', 'ddtAtlantic_Jan_Mayen');
define('ddtAtlantic_Madeira', 'ddtAtlantic_Madeira');
define('ddtAtlantic_Reykjavik', 'ddtAtlantic_Reykjavik');
define('ddtAtlantic_South_Georgia', 'ddtAtlantic_South_Georgia');
define('ddtAtlantic_St_Helena', 'ddtAtlantic_St_Helena');
define('ddtAtlantic_Stanley', 'ddtAtlantic_Stanley');
define('ddtAustralia_ACT', 'ddtAustralia_ACT');
define('ddtAustralia_Adelaide', 'ddtAustralia_Adelaide');
define('ddtAustralia_Brisbane', 'ddtAustralia_Brisbane');
define('ddtAustralia_Broken_Hill', 'ddtAustralia_Broken_Hill');
define('ddtAustralia_Canberra', 'ddtAustralia_Camberra');
define('ddtAustralia_Currie', 'ddtAustralia_Currie');
define('ddtAustralia_Darwin', 'ddtAustralia_Darwin');
define('ddtAustralia_Eucla', 'ddtAustralia_Eucla');
define('ddtAustralia_Hobart', 'ddtAustralia_Hobart');
define('ddtAustralia_LHI', 'ddtAustralia_LHI');
define('ddtAustralia_Lindeman', 'ddtAustralia_Lindeman');
define('ddtAustralia_Lord_Howe', 'ddtAustralia_Lord_Howe');
define('ddtAustralia_Melbourne', 'ddtAustralia_Melbourne');
define('ddtAustralia_North', 'ddtAustralia_North');
define('ddtAustralia_NSW', 'ddtAustralia_NSW');
define('ddtAustralia_Perth', 'ddtAustralia_Perth');
define('ddtAustralia_Queensland', 'ddtAustralia_Queensland');
define('ddtAustralia_South', 'ddtAustralia_South');
define('ddtAustralia_Sydney', 'ddtAustralia_Sydney');
define('ddtAustralia_Tasmania', 'ddtAustralia_Tasmania');
define('ddtAustralia_Victoria', 'ddtAustralia_Victoria');
define('ddtAustralia_West', 'ddtAustralia_West');
define('ddtAustralia_Yancowinna', 'ddtAustralia_Yancowinna');
define('ddtEurope_Amsterdam', 'ddtEurope_Amsterdam');
define('ddtEurope_Andorra', 'ddtEurope_Andorra');
define('ddtEurope_Athens', 'ddtEurope_Athens');
define('ddtEurope_Belfast', 'ddtEurope_Belfast');
define('ddtEurope_Belgrade', 'ddtEurope_Belgrade');
define('ddtEurope_Berlin', 'ddtEurope_Berlin');
define('ddtEurope_Bratislava', 'ddtEurope_Bratislava');
define('ddtEurope_Brussels', 'ddtEurope_Brussels');
define('ddtEurope_Bucharest', 'ddtEurope_Bucharest');
define('ddtEurope_Budapest', 'ddtEurope_Budapest');
define('ddtEurope_Chisinau', 'ddtEurope_Chisinau');
define('ddtEurope_Copenhagen', 'ddtEurope_Copenhagen');
define('ddtEurope_Dublin', 'ddtEurope_Dublin');
define('ddtEurope_Gibraltar', 'ddtEurope_Gibraltar');
define('ddtEurope_Guernsey', 'ddtEurope_Guernsey');
define('ddtEurope_Helsinki', 'ddtEurope_Helsinki');
define('ddtEurope_Isle_of_Man', 'ddtEurope_Isle_of_Man');
define('ddtEurope_Istanbul', 'ddtEurope_Istanbul');
define('ddtEurope_Jersey', 'ddtEurope_Jersey');
define('ddtEurope_Kaliningrad', 'ddtEurope_Kaliningrad');
define('ddtEurope_Kiev', 'ddtEurope_Kiev');
define('ddtEurope_Lisbon', 'ddtEurope_Lisbon');
define('ddtEurope_Ljubljana', 'ddtEurope_Ljubljana');
define('ddtEurope_London', 'ddtEurope_London');
define('ddtEurope_Luxembourg', 'ddtEurope_Luxembourg');
define('ddtEurope_Madrid', 'ddtEurope_Madrid');
define('ddtEurope_Malta', 'ddtEurope_Malta');
define('ddtEurope_Mariehamn', 'ddtEurope_Mariehamn');
define('ddtEurope_Minsk', 'ddtEurope_Minsk');
define('ddtEurope_Monaco', 'ddtEurope_Monaco');
define('ddtEurope_Moscow', 'ddtEurope_Moscow');
define('ddtEurope_Nicosia', 'ddtEurope_Nicosia');
define('ddtEurope_Oslo', 'ddtEurope_Oslo');
define('ddtEurope_Paris', 'ddtEurope_Paris');
define('ddtEurope_Podgorica', 'ddtEurope_Podgorica');
define('ddtEurope_Prague', 'ddtEurope_Prague');
define('ddtEurope_Riga', 'ddtEurope_Riga');
define('ddtEurope_Rome', 'ddtEurope_Rome');
define('ddtEurope_Samara', 'ddtEurope_Samara');
define('ddtEurope_San_Marino', 'ddtEurope_San_Marino');
define('ddtEurope_Sarajevo', 'ddtEurope_Sarajevo');
define('ddtEurope_Simferopol', 'ddtEurope_Simferopol');
define('ddtEurope_Skopje', 'ddtEurope_Skopje');
define('ddtEurope_Sofia', 'ddtEurope_Sofia');
define('ddtEurope_Stockholm', 'ddtEurope_Stockholm');
define('ddtEurope_Tallinn', 'ddtEurope_Tallinn');
define('ddtEurope_Tirane', 'ddtEurope_Tirane');
define('ddtEurope_Tiraspol', 'ddtEurope_Tiraspol');
define('ddtEurope_Uzhgorod', 'ddtEurope_Uzhgorod');
define('ddtEurope_Vaduz', 'ddtEurope_Vaduz');
define('ddtEurope_Vatican', 'ddtEurope_Vatican');
define('ddtEurope_Vienna', 'ddtEurope_Vienna');
define('ddtEurope_Vilnius', 'ddtEurope_Vilnius');
define('ddtEurope_Volgograd', 'ddtEurope_Volgograd');
define('ddtEurope_Warsaw', 'ddtEurope_Warsaw');
define('ddtEurope_Zagreb', 'ddtEurope_Zagreb');
define('ddtEurope_Zaporozhye', 'ddtEurope_Zaporozhye');
define('ddtEurope_Zurich', 'ddtEurope_Zurich');
define('ddtIndian_Antananarivo', 'ddtIndian_');
define('ddtIndian_Chagos', 'ddtIndian_Chagos');
define('ddtIndian_Christmas', 'ddtIndian_Christmas');
define('ddtIndian_Cocos', 'ddtIndian_Cocos');
define('ddtIndian_Comoro', 'ddtIndian_Comoro');
define('ddtIndian_Kerguelen', 'ddtIndian_Kerguelen');
define('ddtIndian_Mahe', 'ddtIndian_Mahe');
define('ddtIndian_Maldives', 'ddtIndian_Maldives');
define('ddtIndian_Mauritius', 'ddtIndian_Mauritius');
define('ddtIndian_Mayotte', 'ddtIndian_Mayotte');
define('ddtIndian_Reunion', 'ddtIndian_Reunion');
define('ddtPacific_Apia', 'ddtPacific_Apia');
define('ddtPacific_Auckland', 'ddtPacific_Auckland');
define('ddtPacific_Chatham', 'ddtPacific_Chatham');
define('ddtPacific_Chuuk', 'ddtPacific_Chuuk');
define('ddtPacific_Easter', 'ddtPacific_Easter');
define('ddtPacific_Efate', 'ddtPacific_Efate');
define('ddtPacific_Enderbury', 'ddtPacific_Enderbury');
define('ddtPacific_Fakaofo', 'ddtPacific_Fakaofo');
define('ddtPacific_Fiji', 'ddtPacific_Fiji');
define('ddtPacific_Funafuti', 'ddtPacific_Funafuti');
define('ddtPacific_Galapagos', 'ddtPacific_Galapagos');
define('ddtPacific_Gambier', 'ddtPacific_Gambier');
define('ddtPacific_Guadalcanal', 'ddtPacific_Guadalcanal');
define('ddtPacific_Guam', 'ddtPacific_Guam');
define('ddtPacific_Honolulu', 'ddtPacific_Honolulu');
define('ddtPacific_Johnston', 'ddtPacific_Johnston');
define('ddtPacific_Kiritimati', 'ddtPacific_Kiritimati');
define('ddtPacific_Kosrae', 'ddtPacific_Kosrae');
define('ddtPacific_Kwajalein', 'ddtPacific_Kwajalein');
define('ddtPacific_Majuro', 'ddtPacific_Majuro');
define('ddtPacific_Marquesas', 'ddtPacific_Marquesas');
define('ddtPacific_Midway', 'ddtPacific_Midway');
define('ddtPacific_Nauru', 'ddtPacific_Nauru');
define('ddtPacific_Niue', 'ddtPacific_Niue');
define('ddtPacific_Norfolk', 'ddtPacific_Norfolk');
define('ddtPacific_Noumea', 'ddtPacific_Noumea');
define('ddtPacific_Pago_Pago', 'ddtPacific_Pago_Pago');
define('ddtPacific_Palau', 'ddtPacific_Palau');
define('ddtPacific_Pitcairn', 'ddtPacific_Pitcairn');
define('ddtPacific_Pohnpei', 'ddtPacific_Pohnpei');
define('ddtPacific_Ponape', 'ddtPacific_Ponape');
define('ddtPacific_Port_Moresby', 'ddtPacific_Port_Moresby');
define('ddtPacific_Rarotonga', 'ddtPacific_Rarotonga');
define('ddtPacific_Saipan', 'ddtPacific_Saipan');
define('ddtPacific_Samoa', 'ddtPacific_Samoa');
define('ddtPacific_Tahiti', 'ddtPacific_Tahiti');
define('ddtPacific_Tarawa', 'ddtPacific_Tarawa');
define('ddtPacific_Tongatapu', 'ddtPacific_Tongatapu');
define('ddtPacific_Truk', 'ddtPacific_Truk');
define('ddtPacific_Wake', 'ddtPacific_Wake');
define('ddtPacific_Wallis', 'ddtPacific_Wallis');
define('ddtPacific_Yap', 'ddtPacific_Yap');

/**
 * Component to work with dates and times.
 * 
 * @package     ZendFramework
 * @link        http://framework.zend.com/manual/en/zend.date.html Zend Framework Documentation
 */
class ZDate extends Component
{
   /**
    * Zend Framework Date instance.
    *
    * @var      Zend_Date
    */
   private $_date=null;

   /**
    * String representation of a date.
    *
    * This property is used during unserialization.
    * 
    * Expected date format is the one corresponding to the {@link $_datelocale locale} of the
    * object.
    *
    * @var      string
    */
   private $_time=null;

   /**
    * {@inheritdoc}
    */
   function __construct($aowner = null)
   {
      parent::__construct($aowner);
   }

   /**
    * {@inheritdoc}
    */
   function loaded()
   {
       $this->CreateDate();
   }

   /**
    * {@inheritdoc}
    */
   function serialize()
   {
      parent::serialize();

      $owner = $this->readOwner();

      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".Date.";
         $_SESSION[$prefix . "Time"] = $this->_date->get();

      }
   }

   /**
    * {@inheritdoc}
    */
   function unserialize()
   {
      parent::unserialize();

      $owner = $this->readOwner();

      if($owner != null)
      {
         $prefix = $owner->readNamePath() . "." . $this->_name . ".Date.";

         if(isset($_SESSION[$prefix . "Time"]))
            $this->_time = $_SESSION[$prefix . "Time"];
      }
   }

   /**
    * Generator for {@link $_date}.
    *
    * Generates a {@link Zend_Date Zend Framework Date} object from those properties set for this
    * {@link ZDate} instance (or defaults), and saves it to {@link $_date}.
    */
   function CreateDate()
   {

      $data = array();

      switch($this->_datedefaulttimezone)
      {
         case ddtAfrica_Abidjan:
            $timezone = 'Africa/Abidjan';
            break;
         case ddtAfrica_Accra:
            $timezone = 'Africa/Accra';
            break;
         case ddtAfrica_Addis_Ababa:
            $timezone = 'Africa/Addis_Ababa';
            break;
         case ddtAfrica_Algiers:
            $timezone = 'Africa/Algiers';
            break;
         case ddtAfrica_Asmara:
            $timezone = 'Africa/Asmara';
            break;
         case ddtAfrica_Asmera:
            $timezone = 'Africa/Asmera';
            break;
         case ddtAfrica_Bamako:
            $timezone = 'Africa/Bamako';
            break;
         case ddtAfrica_Bangui:
            $timezone = 'Africa/Bangui';
            break;
         case ddtAfrica_Banjul:
            $timezone = 'Africa/Banjul';
            break;
         case ddtAfrica_Bissau:
            $timezone = 'Africa/Bissau';
            break;
         case ddtAfrica_Blantyre:
            $timezone = 'Africa/Blantyre';
            break;
         case ddtAfrica_Brazzaville:
            $timezone = 'Africa/Brazzaville';
            break;
         case ddtAfrica_Bujumbura:
            $timezone = 'Africa/Bujumbura';
            break;
         case ddtAfrica_Cairo:
            $timezone = 'Africa/Cairo';
            break;
         case ddtAfrica_Casablanca:
            $timezone = 'Africa/Casablanca';
            break;
         case ddtAfrica_Ceuta:
            $timezone = 'Africa/Ceuta';
            break;
         case ddtAfrica_Conakry:
            $timezone = 'Africa/Conakry';
            break;
         case ddtAfrica_Dakar:
            $timezone = 'Africa/Dakar';
            break;
         case ddtAfrica_Dar_es_Salaam:
            $timezone = 'Africa/Dar_es_Salaam';
            break;
         case ddtAfrica_Djibouti:
            $timezone = 'Africa/Djibouti';
            break;
         case ddtAfrica_Douala:
            $timezone = 'Africa/Douala';
            break;
         case ddtAfrica_El_Aaiun:
            $timezone = 'Africa/El_Aaiun';
            break;
         case ddtAfrica_Freetown:
            $timezone = 'Africa/Freetown';
            break;
         case ddtAfrica_Gaborone:
            $timezone = 'Africa/Gaborone';
            break;
         case ddtAfrica_Harare:
            $timezone = 'Africa/Harare';
            break;
         case ddtAfrica_Johannesburg:
            $timezone = 'Africa/Johannesburg';
            break;
         case ddtAfrica_Kampala:
            $timezone = 'Africa/Kampala';
            break;
         case ddtAfrica_Khartoum:
            $timezone = 'Africa/Khartoum';
            break;
         case ddtAfrica_Kigali:
            $timezone = 'Africa/Kigali';
            break;
         case ddtAfrica_Kinshasa:
            $timezone = 'Africa/Kinshasa';
            break;
         case ddtAfrica_Lagos:
            $timezone = 'Africa/Lagos';
            break;
         case ddtAfrica_Libreville:
            $timezone = 'Africa/Libreville';
            break;
         case ddtAfrica_Lome:
            $timezone = 'Africa/Lome';
            break;
         case ddtAfrica_Luanda:
            $timezone = 'Africa/Luanda';
            break;
         case ddtAfrica_Lubumbashi:
            $timezone = 'Africa/Lubumbashi';
            break;
         case ddtAfrica_Lusaka:
            $timezone = 'Africa/Lusaka';
            break;
         case ddtAfrica_Malabo:
            $timezone = 'Africa/Malabo';
            break;
         case ddtAfrica_Maputo:
            $timezone = 'Africa/Maputo';
            break;
         case ddtAfrica_Maseru:
            $timezone = 'Africa/Maseru';
            break;
         case ddtAfrica_Mbabane:
            $timezone = 'Africa/Mbabane';
            break;
         case ddtAfrica_Mogadishu:
            $timezone = 'Africa/Mogadishu';
            break;
         case ddtAfrica_Monravia:
            $timezone = 'Africa/Monravia';
            break;
         case ddtAfrica_Nairobi:
            $timezone = 'Africa/Nairobi';
            break;
         case ddtAfrica_Ndjamena:
            $timezone = 'Africa/Ndjamena';
            break;
         case ddtAfrica_Niamey:
            $timezone = 'Africa/Niamey';
            break;
         case ddtAfrica_Nouakchott:
            $timezone = 'Africa/Nouakchott';
            break;
         case ddtAfrica_Ouagadougou:
            $timezone = 'Africa/Ouagadougou';
            break;
         case ddtAfrica_Porto_Novo:
            $timezone = 'Africa/Porto-Novo';
            break;
         case ddtAfrica_Sao_Tome:
            $timezone = 'Africa/Sao_Tome';
            break;
         case ddtAfrica_Timbuktu:
            $timezone = 'Africa/Timbuktu';
            break;
         case ddtAfrica_Tripoli:
            $timezone = 'Africa/Tripoli';
            break;
         case ddtAfrica_Tunis:
            $timezone = 'Africa/Tunis';
            break;
         case ddtAfrica_Windhoek:
            $timezone = 'Africa/Windhoek';
            break;
         case ddtAmerica_Adak:
            $timezone = 'America/Adak';
            break;
         case ddtAmerica_Anchorage:
            $timezone = 'America/Anchorage';
            break;
         case ddtAmerica_Anguilla:
            $timezone = 'America/Anguilla';
            break;
         case ddtAmerica_Antigua:
            $timezone = 'America/Antigua';
            break;
         case ddtAmerica_Araguaina:
            $timezone = 'America/Araguaina';
            break;
         case ddtAmerica_Argentina_Buenos_Aires:
            $timezone = 'America/Argentina/Buenos_Aires';
            break;
         case ddtAmerica_Argentina_Catamarca:
            $timezone = 'America/Argentina/Catamarca';
            break;
         case ddtAmerica_Argentina_ComodRivadavia:
            $timezone = 'America/Argentina/ComodRivadavia';
            break;
         case ddtAmerica_Argentina_Cordoba:
            $timezone = 'America/Argentina/Cordoba';
            break;
         case ddtAmerica_Argentina_Jujuy:
            $timezone = 'America/Argentina/Jujuy';
            break;
         case ddtAmerica_Argentina_La_Rioja:
            $timezone = 'America/Argentina/La_Rioja';
            break;
         case ddtAmerica_Argentina_Mendoza:
            $timezone = 'America/Argentina/Mendoza';
            break;
         case ddtAmerica_Argentina_Rio_Gallegos:
            $timezone = 'America/Argentina/Rio_Gallegos';
            break;
         case ddtAmerica_Argentina_Salta:
            $timezone = 'America/Argentina/Salta';
            break;
         case ddtAmerica_Argentina_San_Juan:
            $timezone = 'America/Argentina/San_Juan';
            break;
         case ddtAmerica_Argentina_San_Luis:
            $timezone = 'America/Argentina/San_Luis';
            break;
         case ddtAmerica_Argentina_Tucuman:
            $timezone = 'America/Argentina/Tucuman';
            break;
         case ddtAmerica_Argentina_Ushuaia:
            $timezone = 'America/Argentina/Ushuaia';
            break;
         case ddtAmerica_Aruba:
            $timezone = 'America/Aruba';
            break;
         case ddtAmerica_Asuncion:
            $timezone = 'America/Asuncion';
            break;
         case ddtAmerica_Atikokan:
            $timezone = 'America/Atikokan';
            break;
         case ddtAmerica_Atka:
            $timezone = 'America/Atka';
            break;
         case ddtAmerica_Bahia:
            $timezone = 'America/Bahia';
            break;
         case ddtAmerica_Bahia_Banderas:
            $timezone = 'America/Bahia_Banderas';
            break;
         case ddtAmerica_Barbados:
            $timezone = 'America/Barbados';
            break;
         case ddtAmerica_Belem:
            $timezone = 'America/Belem';
            break;
         case ddtAmerica_Belize:
            $timezone = 'America/Belize';
            break;
         case ddtAmerica_Blanc_Sablon:
            $timezone = 'America/Blanc-Sablon';
            break;
         case ddtAmerica_Boa_Vista:
            $timezone = 'America/Boa_Vista';
            break;
         case ddtAmerica_Bogota:
            $timezone = 'America/Bogota';
            break;
         case ddtAmerica_Boise:
            $timezone = 'America/Boise';
            break;
         case ddtAmerica_Buenos_Aires:
            $timezone = 'America/Buenos_Aires';
            break;
         case ddtAmerica_Cambridge_Bay:
            $timezone = 'America/Cambridge_Bay';
            break;
         case ddtAmerica_Campo_Grande:
            $timezone = 'America/Campo_Grande';
            break;
         case ddtAmerica_Cancun:
            $timezone = 'America/Cancun';
            break;
         case ddtAmerica_Caracas:
            $timezone = 'America/Caracas';
            break;
         case ddtAmerica_Catamarca:
            $timezone = 'America/Catamarca';
            break;
         case ddtAmerica_Cayenne:
            $timezone = 'America/Cayenne';
            break;
         case ddtAmerica_Cayman:
            $timezone = 'America/Cayman';
            break;
         case ddtAmerica_Chicago:
            $timezone = 'America/Chicago';
            break;
         case ddtAmerica_Chihuahua:
            $timezone = 'America/Chihuahua';
            break;
         case ddtAmerica_Coral_Harbour:
            $timezone = 'America/Coral_Harbour';
            break;
         case ddtAmerica_Cordoba:
            $timezone = 'America/Cordoba';
            break;
         case ddtAmerica_Costa_Rica:
            $timezone = 'America/Costa_Rica';
            break;
         case ddtAmerica_Cuiaba:
            $timezone = 'America/Cuiaba';
            break;
         case ddtAmerica_Curacao:
            $timezone = 'America/Curacao';
            break;
         case ddtAmerica_Danmarkshavn:
            $timezone = 'America/Danmarkshavn';
            break;
         case ddtAmerica_Dawson:
            $timezone = 'America/Dawson';
            break;
         case ddtAmerica_Dawson_Creek:
            $timezone = 'America/Dawson_Creek';
            break;
         case ddtAmerica_Denver:
            $timezone = 'America/Denver';
            break;
         case ddtAmerica_Detroit:
            $timezone = 'America/Detroit';
            break;
         case ddtAmerica_Dominica:
            $timezone = 'America/Dominica';
            break;
         case ddtAmerica_Edmonton:
            $timezone = 'America/Edmonton';
            break;
         case ddtAmerica_Eirunepe:
            $timezone = 'America/Eirunepe';
            break;
         case ddtAmerica_El_Salvador:
            $timezone = 'America/El_Salvador';
            break;
         case ddtAmerica_Ensenada:
            $timezone = 'America/Ensenada';
            break;
         case ddtAmerica_Fort_Wayne:
            $timezone = 'America/Fort_Wayne';
            break;
         case ddtAmerica_Fortaleza:
            $timezone = 'America/Fortaleza';
            break;
         case ddtAmerica_Glace_Bay:
            $timezone = 'America/Glace_Bay';
            break;
         case ddtAmerica_Godthab:
            $timezone = 'America/Godthab';
            break;
         case ddtAmerica_Goose_Bay:
            $timezone = 'America/Goose_Bay';
            break;
         case ddtAmerica_Grand_Turk:
            $timezone = 'America/Grand_Turk';
            break;
         case ddtAmerica_Grenada:
            $timezone = 'America/Grenada';
            break;
         case ddtAmerica_Guadeloupe:
            $timezone = 'America/Guadeloupe';
            break;
         case ddtAmerica_Guatemala:
            $timezone = 'America/Guatemala';
            break;
         case ddtAmerica_Guayaquil:
            $timezone = 'America/Guayaquil';
            break;
         case ddtAmerica_Guyana:
            $timezone = 'America/Guyana';
            break;
         case ddtAmerica_Halifax:
            $timezone = 'America/Halifax';
            break;
         case ddtAmerica_Havana:
            $timezone = 'America/Havana';
            break;
         case ddtAmerica_Hermosillo:
            $timezone = 'America/Hermosillo';
            break;
         case ddtAmerica_Indiana_Indianapolis:
            $timezone = 'America/Indiana/Indianapolis';
            break;
         case ddtAmerica_Indiana_Knox:
            $timezone = 'America/Indiana/Knox';
            break;
         case ddtAmerica_Indiana_Marengo:
            $timezone = 'America/Indiana/Marengo';
            break;
         case ddtAmerica_Indiana_Petersburg:
            $timezone = 'America/Indiana/Petersburg';
            break;
         case ddtAmerica_Indiana_Tell_City:
            $timezone = 'America/Indiana/Tell_City';
            break;
         case ddtAmerica_Indiana_Vevay:
            $timezone = 'America/Indiana/Vevay';
            break;
         case ddtAmerica_Indiana_Vincennes:
            $timezone = 'America/Indiana/Vincennes';
            break;
         case ddtAmerica_Indiana_Winamac:
            $timezone = 'America/Indiana/Winamac';
            break;
         case ddtAmerica_Indianapolis:
            $timezone = 'America/Indianapolis';
            break;
         case ddtAmerica_Inuvik:
            $timezone = 'America/Inuvik';
            break;
         case ddtAmerica_Iqaluit:
            $timezone = 'America/Iqaluit';
            break;
         case ddtAmerica_Jamaica:
            $timezone = 'America/Jaimaca';
            break;
         case ddtAmerica_Jujuy:
            $timezone = 'America/Jujuy';
            break;
         case ddtAmerica_Juneau:
            $timezone = 'America/Juneau';
            break;
         case ddtAmerica_Kentucky_Louisville:
            $timezone = 'America/Kentucky/Louisville';
            break;
         case ddtAmerica_Kentucky_Monticello:
            $timezone = 'America/Kentucky/Monticello';
            break;
         case ddtAmerica_Knox_IN:
            $timezone = 'America/Knox_IN';
            break;
         case ddtAmerica_La_Paz:
            $timezone = 'America/La_Paz';
            break;
         case ddtAmerica_Lima:
            $timezone = 'America/Lima';
            break;
         case ddtAmerica_Los_Angeles:
            $timezone = 'America/Los_Angeles';
            break;
         case ddtAmerica_Louisville:
            $timezone = 'America/Louisville';
            break;
         case ddtAmerica_Maceio:
            $timezone = 'America/Maceio';
            break;
         case ddtAmerica_Managua:
            $timezone = 'America/Managua';
            break;
         case ddtAmerica_Manaus:
            $timezone = 'America/Manaus';
            break;
         case ddtAmerica_Marigot:
            $timezone = 'America/Marigot';
            break;
         case ddtAmerica_Martinique:
            $timezone = 'America/Martinique';
            break;
         case ddtAmerica_Matamoros:
            $timezone = 'America/Matamoros';
            break;
         case ddtAmerica_Mazatlan:
            $timezone = 'America/Mazatlan';
            break;
         case ddtAmerica_Mendoza:
            $timezone = 'America/Mendoza';
            break;
         case ddtAmerica_Menominee:
            $timezone = 'America/Menominee';
            break;
         case ddtAmerica_Merida:
            $timezone = 'America/Merida';
            break;
         case ddtAmerica_Mexico_City:
            $timezone = 'America/Mexico_City';
            break;
         case ddtAmerica_Miquelon:
            $timezone = 'America/Miquelon';
            break;
         case ddtAmerica_Moncton:
            $timezone = 'America/Moncton';
            break;
         case ddtAmerica_Monterrey:
            $timezone = 'America/Monterrey';
            break;
         case ddtAmerica_Montevideo:
            $timezone = 'America/Montevideo';
            break;
         case ddtAmerica_Montreal:
            $timezone = 'America/Montreal';
            break;
         case ddtAmerica_Montserrat:
            $timezone = 'America/Montserrat';
            break;
         case ddtAmerica_Nassau:
            $timezone = 'America/Nassau';
            break;
         case ddtAmerica_New_York:
            $timezone = 'America/New_York';
            break;
         case ddtAmerica_Nipigon:
            $timezone = 'America/Nipigon';
            break;
         case ddtAmerica_Nome:
            $timezone = 'America/Nome';
            break;
         case ddtAmerica_Noronha:
            $timezone = 'America/Noronha';
            break;
         case ddtAmerica_North_Dakota_Beulah:
            $timezone = 'America/North_Dakota/Beulah';
            break;
         case ddtAmerica_North_Dakota_Center:
            $timezone = 'America/North_Dakota/Center';
            break;
         case ddtAmerica_North_Dakota_New_Salem:
            $timezone = 'America/North_Dakota/New_Salem';
            break;
         case ddtAmerica_Ojinaga:
            $timezone = 'America/Ojinaga';
            break;
         case ddtAmerica_Panama:
            $timezone = 'America/Panama';
            break;
         case ddtAmerica_Pangnirtung:
            $timezone = 'America/Pangnirtung';
            break;
         case ddtAmerica_Paramaribo:
            $timezone = 'America/Paramaribo';
            break;
         case ddtAmerica_Phoenix:
            $timezone = 'America/Phoenix';
            break;
         case ddtAmerica_Port_au_Prince:
            $timezone = 'America/Port-au-Prince';
            break;
         case ddtAmerica_Port_of_Spain:
            $timezone = 'America/Port_of_Spain';
            break;
         case ddtAmerica_Porto_Acre:
            $timezone = 'America/Porto_Acre';
            break;
         case ddtAmerica_Porto_Velho:
            $timezone = 'America/Porto_Velho';
            break;
         case ddtAmerica_Puerto_Rico:
            $timezone = 'America/Puerto_Rico';
            break;
         case ddtAmerica_Rainy_River:
            $timezone = 'America/Rainy_River';
            break;
         case ddtAmerica_Rankin_Inlet:
            $timezone = 'America/Rankin_Inlet';
            break;
         case ddtAmerica_Recife:
            $timezone = 'America/Recife';
            break;
         case ddtAmerica_Regina:
            $timezone = 'America/Regina';
            break;
         case ddtAmerica_Resolute:
            $timezone = 'America/Resolute';
            break;
         case ddtAmerica_Rio_Branco:
            $timezone = 'America/Rio_Branco';
            break;
         case ddtAmerica_Rosario:
            $timezone = 'America/Rosario';
            break;
         case ddtAmerica_Santa_Isabel:
            $timezone = 'America/Santa_Isabel';
            break;
         case ddtAmerica_Santarem:
            $timezone = 'America/Santarem';
            break;
         case ddtAmerica_Santiago:
            $timezone = 'America/Santiago';
            break;
         case ddtAmerica_Santo_Domingo:
            $timezone = 'America/Santo_Domingo';
            break;
         case ddtAmerica_Sao_Paulo:
            $timezone = 'America/Sao_Paulo';
            break;
         case ddtAmerica_Scoresbysund:
            $timezone = 'America/Scoresbysund';
            break;
         case ddtAmerica_Shiprock:
            $timezone = 'America/Shiprock';
            break;
         case ddtAmerica_St_Barthelemy:
            $timezone = 'America/St_Barthelemy';
            break;
         case ddtAmerica_St_Johns:
            $timezone = 'America/St_Johns';
            break;
         case ddtAmerica_St_Kitts:
            $timezone = 'America/St_Kitts';
            break;
         case ddtAmerica_St_Lucia:
            $timezone = 'America/St_Lucia';
            break;
         case ddtAmerica_St_Thomas:
            $timezone = 'America/St_Thomas';
            break;
         case ddtAmerica_St_Vicent:
            $timezone = 'America/St_Vicent';
            break;
         case ddtAmerica_Swift_Current:
            $timezone = 'America/Swift_Current';
            break;
         case ddtAmerica_Tegucigalpa:
            $timezone = 'America/Tegucigalpa';
            break;
         case ddtAmerica_Thule:
            $timezone = 'America/Thule';
            break;
         case ddtAmerica_Thunder_Bay:
            $timezone = 'America/Thunder_Bay';
            break;
         case ddtAmerica_Tijuana:
            $timezone = 'America/Tijuana';
            break;
         case ddtAmerica_Toronto:
            $timezone = 'America/Toronto';
            break;
         case ddtAmerica_Tortola:
            $timezone = 'America/Tortola';
            break;
         case ddtAmerica_Vancouver:
            $timezone = 'America/Vancouver';
            break;
         case ddtAmerica_Virgin:
            $timezone = 'America/Virgin';
            break;
         case ddtAmerica_Whitehorse:
            $timezone = 'America/Whitehorse';
            break;
         case ddtAmerica_Winnipeg:
            $timezone = 'America/Winnipeg';
            break;
         case ddtAmerica_Yakutat:
            $timezone = 'America/Yakutat';
            break;
         case ddtAmerica_Yellowknife:
            $timezone = 'America/Yellowknife';
            break;
         case ddtAntarctica_Casey:
            $timezone = 'Antarctica/Casey';
            break;
         case ddtAntarctica_Davis:
            $timezone = 'Antarctica/Davis';
            break;
         case ddtAntarctica_DumontDUrville:
            $timezone = 'Antarctica/DumontDUrville';
            break;
         case ddtAntarctica_Macquarie:
            $timezone = 'Antarctica/Macquarie';
            break;
         case ddtAntarctica_Mawson:
            $timezone = 'Antarctica/Mawson';
            break;
         case ddtAntarctica_McMurdo:
            $timezone = 'Antarctica/McMurdo';
            break;
         case ddtAntarctica_Palmer:
            $timezone = 'Antarctica/Palmer';
            break;
         case ddtAntarctica_Rothera:
            $timezone = 'Antarctica/Rothera';
            break;
         case ddtAntarctica_South_Pole:
            $timezone = 'Antarctica/South_Pole';
            break;
         case ddtAntarctica_Syowa:
            $timezone = 'Antarctica/Syowa';
            break;
         case ddtAntarctica_Vostok:
            $timezone = 'Antarctica/Vostok';
            break;
         case ddtArctic_Longyearbyen:
            $timezone = 'Arctic/Longyearbyen';
            break;
         case ddtAsia_Aden:
            $timezone = 'Asia/Aden';
            break;
         case ddtAsia_Almaty:
            $timezone = 'Asia/Almaty';
            break;
         case ddtAsia_Amman:
            $timezone = 'Asia/Amman';
            break;
         case ddtAsia_Anadyr:
            $timezone = 'Asia/Anadyr';
            break;
         case ddtAsia_Aqtau:
            $timezone = 'Asia/Aqtau';
            break;
         case ddtAsia_Aqtobe:
            $timezone = 'Asia/Aqtobe';
            break;
         case ddtAsia_Ashgabat:
            $timezone = 'Asia/Ashgabat';
            break;
         case ddtAsia_Ashkhabad:
            $timezone = 'Asia/Ashkhabad';
            break;
         case ddtAsia_Baghdad:
            $timezone = 'Asia/Baghdad';
            break;
         case ddtAsia_Bahrain:
            $timezone = 'Asia/Bahrain';
            break;
         case ddtAsia_Baku:
            $timezone = 'Asia/Baku';
            break;
         case ddtAsia_Bangkok:
            $timezone = 'Asia/Bangkok';
            break;
         case ddtAsia_Beirut:
            $timezone = 'Asia/Beirut';
            break;
         case ddtAsia_Bishkek:
            $timezone = 'Asia/Bishkek';
            break;
         case ddtAsia_Brunei:
            $timezone = 'Asia/Brunei';
            break;
         case ddtAsia_Calcutta:
            $timezone = 'Asia/Calcutta';
            break;
         case ddtAsia_Choibalsan:
            $timezone = 'Asia/Choibalsan';
            break;
         case ddtAsia_Chongqing:
            $timezone = 'Asia/Chongqing';
            break;
         case ddtAsia_Chungking:
            $timezone = 'Asia/Chungking';
            break;
         case ddtAsia_Colombo:
            $timezone = 'Asia/Colombo';
            break;
         case ddtAsia_Dacca:
            $timezone = 'Asia/Dacca';
            break;
         case ddtAsia_Damascus:
            $timezone = 'Asia/Damascus';
            break;
         case ddtAsia_Dhaka:
            $timezone = 'Asia/Dhaka';
            break;
         case ddtAsia_Dili:
            $timezone = 'Asia/Dili';
            break;
         case ddtAsia_Dubai:
            $timezone = 'Asia/Dubai';
            break;
         case ddtAsia_Dushanbe:
            $timezone = 'Asia/Dushanbe';
            break;
         case ddtAsia_Gaza:
            $timezone = 'Asia/Gaza';
            break;
         case ddtAsia_Harbin:
            $timezone = 'Asia/Harbin';
            break;
         case ddtAsia_Ho_Chi_Minh:
            $timezone = 'Asia/Ho_Chi_Minh';
            break;
         case ddtAsia_Hong_Kong:
            $timezone = 'Asia/Hong_Kong';
            break;
         case ddtAsia_Hovd:
            $timezone = 'Asia/Hovd';
            break;
         case ddtAsia_Irkutsk:
            $timezone = 'Asia/Irkutsk';
            break;
         case ddtAsia_Istanbul:
            $timezone = 'Asia/Istanbul';
            break;
         case ddtAsia_Jakarta:
            $timezone = 'Asia/Jakarta';
            break;
         case ddtAsia_Jayapura:
            $timezone = 'Asia/Jayapura';
            break;
         case ddtAsia_Jerusalem:
            $timezone = 'Asia/Jerusalem';
            break;
         case ddtAsia_Kabul:
            $timezone = 'Asia/Kabul';
            break;
         case ddtAsia_Kamchatka:
            $timezone = 'Asia/Kamchatka';
            break;
         case ddtAsia_Karachi:
            $timezone = 'Asia/Karachi';
            break;
         case ddtAsia_Kashgar:
            $timezone = 'Asia/Kashgar';
            break;
         case ddtAsia_Kathmandu:
            $timezone = 'Asia/Kathmandu';
            break;
         case ddtAsia_Katmandu:
            $timezone = 'Asia/Katmandu';
            break;
         case ddtAsia_Kolkata:
            $timezone = 'Asia/Kolkata';
            break;
         case ddtAsia_Krasnoyarsk:
            $timezone = 'Asia/Krasnoyarsk';
            break;
         case ddtAsia_Kuala_Lumpur:
            $timezone = 'Asia/Kuala_Lumpur';
            break;
         case ddtAsia_Kuching:
            $timezone = 'Asia/Kuching';
            break;
         case ddtAsia_Kuwait:
            $timezone = 'Asia/Kuwait';
            break;
         case ddtAsia_Macao:
            $timezone = 'Asia/Macao';
            break;
         case ddtAsia_Macau:
            $timezone = 'Asia/Macau';
            break;
         case ddtAsia_Magadan:
            $timezone = 'Asia/Magadan';
            break;
         case ddtAsia_Makassar:
            $timezone = 'Asia/Makassar';
            break;
         case ddtAsia_Manila:
            $timezone = 'Asia/Manila';
            break;
         case ddtAsia_Muscat:
            $timezone = 'Asia/Muscat';
            break;
         case ddtAsia_Nicosia:
            $timezone = 'Asia/Nicosia';
            break;
         case ddtAsia_Novokuznetsk:
            $timezone = 'Asia/Novokuznetsk';
            break;
         case ddtAsia_Novosibirsk:
            $timezone = 'Asia/Novosibirsk';
            break;
         case ddtAsia_Omsk:
            $timezone = 'Asia/Omsk';
            break;
         case ddtAsia_Oral:
            $timezone = 'Asia/Oral';
            break;
         case ddtAsia_Phnom_Penh:
            $timezone = 'Asia/Phnom_Penh';
            break;
         case ddtAsia_Pontianak:
            $timezone = 'Asia/Pontianak';
            break;
         case ddtAsia_Pyongyang:
            $timezone = 'Asia/Pyongyang';
            break;
         case ddtAsia_Qatar:
            $timezone = 'Asia/Qatar';
            break;
         case ddtAsia_Qyzylorda:
            $timezone = 'Asia/Qyzylorda';
            break;
         case ddtAsia_Rangoon:
            $timezone = 'Asia/Rangoon';
            break;
         case ddtAsia_Riyadh:
            $timezone = 'Asia/Riyadh';
            break;
         case ddtAsia_Saigon:
            $timezone = 'Asia/Saigon';
            break;
         case ddtAsia_Sakhalin:
            $timezone = 'Asia/Sakhalin';
            break;
         case ddtAsia_Samarkand:
            $timezone = 'Asia/Samarkand';
            break;
         case ddtAsia_Seoul:
            $timezone = 'Asia/Seoul';
            break;
         case ddtAsia_Shanghai:
            $timezone = 'Asia/Shanghai';
            break;
         case ddtAsia_Singapore:
            $timezone = 'Asia/Singapore';
            break;
         case ddtAsia_Taipei:
            $timezone = 'Asia/Taipei';
            break;
         case ddtAsia_Tashkent:
            $timezone = 'Asia/Tashkent';
            break;
         case ddtAsia_Tbilisi:
            $timezone = 'Asia/Tbilisi';
            break;
         case ddtAsia_Tehran:
            $timezone = 'Asia/Tehran';
            break;
         case ddtAsia_Tel_Aviv:
            $timezone = 'Asia/Tel_Aviv';
            break;
         case ddtAsia_Thimbu:
            $timezone = 'Asia/Thimbu';
            break;
         case ddtAsia_Thimphu:
            $timezone = 'Asia/Thimphu';
            break;
         case ddtAsia_Tokyo:
            $timezone = 'Asia/Tokyo';
            break;
         case ddtAsia_Ujung_Pandang:
            $timezone = 'Asia/Ujung_Pandang';
            break;
         case ddtAsia_Ulaanbaatar:
            $timezone = 'Asia/Ulaanbaatar';
            break;
         case ddtAsia_Ulan_Bator:
            $timezone = 'Asia/Ulan_Bator';
            break;
         case ddtAsia_Urumqi:
            $timezone = 'Asia/Urumqi';
            break;
         case ddtAsia_Vientiane:
            $timezone = 'Asia/Vientiane';
            break;
         case ddtAsia_Vladivostok:
            $timezone = 'Asia/Vladivostok';
            break;
         case ddtAsia_Yakutsk:
            $timezone = 'Asia/Yakutsk';
            break;
         case ddtAsia_Yekaterinburg:
            $timezone = 'Asia/Yekaterinburg';
            break;
         case ddtAsia_Yeveran:
            $timezone = 'Asia/Yeveran';
            break;
         case ddtAtlantic_Azores:
            $timezone = 'Atlantic/Azores';
            break;
         case ddtAtlantic_Bermuda:
            $timezone = 'Atlantic/Bermuda';
            break;
         case ddtAtlantic_Canary:
            $timezone = 'Atlantic/Canary';
            break;
         case ddtAtlantic_Cape_Verde:
            $timezone = 'Atlantic/Cape_Verde';
            break;
         case ddtAtlantic_Faeroe:
            $timezone = 'Atlantic/Faeroe';
            break;
         case ddtAtlantic_Faroe:
            $timezone = 'Atlantic/Faroe';
            break;
         case ddtAtlantic_Jan_Mayen:
            $timezone = 'Atlantic/Jan_Mayen';
            break;
         case ddtAtlantic_Madeira:
            $timezone = 'Atlantic/Madeira';
            break;
         case ddtAtlantic_Reykjavik:
            $timezone = 'Atlantic/Reykjavik';
            break;
         case ddtAtlantic_South_Georgia:
            $timezone = 'Atlantic/South_Georgia';
            break;
         case ddtAtlantic_St_Helena:
            $timezone = 'Atlantic/St_Helena';
            break;
         case ddtAtlantic_Stanley:
            $timezone = 'Atlantic/Stanley';
            break;
         case ddtAustralia_ACT:
            $timezone = 'Australia/ACT';
            break;
         case ddtAustralia_Adelaide:
            $timezone = 'Australia/Adelaide';
            break;
         case ddtAustralia_Brisbane:
            $timezone = 'Australia/Brisbane';
            break;
         case ddtAustralia_Broken_Hill:
            $timezone = 'Australia/Broken_Hill';
            break;
         case ddtAustralia_Canberra:
            $timezone = 'Australia/Camberra';
            break;
         case ddtAustralia_Currie:
            $timezone = 'Australia/Currie';
            break;
         case ddtAustralia_Darwin:
            $timezone = 'Australia/Darwin';
            break;
         case ddtAustralia_Eucla:
            $timezone = 'Australia/Eucla';
            break;
         case ddtAustralia_Hobart:
            $timezone = 'Australia/Hobart';
            break;
         case ddtAustralia_LHI:
            $timezone = 'Australia/LHI';
            break;
         case ddtAustralia_Lindeman:
            $timezone = 'Australia/Lindeman';
            break;
         case ddtAustralia_Lord_Howe:
            $timezone = 'Australia/Lord_Howe';
            break;
         case ddtAustralia_Melbourne:
            $timezone = 'Australia/Melbourne';
            break;
         case ddtAustralia_North:
            $timezone = 'Australia/North';
            break;
         case ddtAustralia_NSW:
            $timezone = 'Australia/NSW';
            break;
         case ddtAustralia_Perth:
            $timezone = 'Australia/Perth';
            break;
         case ddtAustralia_Queensland:
            $timezone = 'Australia/Queensland';
            break;
         case ddtAustralia_South:
            $timezone = 'Australia/South';
            break;
         case ddtAustralia_Sydney:
            $timezone = 'Australia/Sydney';
            break;
         case ddtAustralia_Tasmania:
            $timezone = 'Australia/Tasmania';
            break;
         case ddtAustralia_Victoria:
            $timezone = 'Australia/Victoria';
            break;
         case ddtAustralia_West:
            $timezone = 'Australia/West';
            break;
         case ddtAustralia_Yancowinna:
            $timezone = 'Australia/Yancowinna';
            break;
         case ddtEurope_Amsterdam:
            $timezone = 'Europe/Amsterdam';
            break;
         case ddtEurope_Andorra:
            $timezone = 'Europe/Andorra';
            break;
         case ddtEurope_Athens:
            $timezone = 'Europe/Athens';
            break;
         case ddtEurope_Belfast:
            $timezone = 'Europe/Belfast';
            break;
         case ddtEurope_Belgrade:
            $timezone = 'Europe/Belgrade';
            break;
         case ddtEurope_Berlin:
            $timezone = 'Europe/Berlin';
            break;
         case ddtEurope_Bratislava:
            $timezone = 'Europe/Bratislava';
            break;
         case ddtEurope_Brussels:
            $timezone = 'Europe/Brussels';
            break;
         case ddtEurope_Bucharest:
            $timezone = 'Europe/Bucharest';
            break;
         case ddtEurope_Budapest:
            $timezone = 'Europe/Budapest';
            break;
         case ddtEurope_Chisinau:
            $timezone = 'Europe/Chisinau';
            break;
         case ddtEurope_Copenhagen:
            $timezone = 'Europe/Copenhagen';
            break;
         case ddtEurope_Dublin:
            $timezone = 'Europe/Dublin';
            break;
         case ddtEurope_Gibraltar:
            $timezone = 'Europe/Gibraltar';
            break;
         case ddtEurope_Guernsey:
            $timezone = 'Europe/Guernsey';
            break;
         case ddtEurope_Helsinki:
            $timezone = 'Europe/Helsinki';
            break;
         case ddtEurope_Isle_of_Man:
            $timezone = 'Europe/Isle_of_Man';
            break;
         case ddtEurope_Istanbul:
            $timezone = 'Europe/Istanbul';
            break;
         case ddtEurope_Jersey:
            $timezone = 'Europe/Jersey';
            break;
         case ddtEurope_Kaliningrad:
            $timezone = 'Europe/Kaliningrad';
            break;
         case ddtEurope_Kiev:
            $timezone = 'Europe/Kiev';
            break;
         case ddtEurope_Lisbon:
            $timezone = 'Europe/Lisbon';
            break;
         case ddtEurope_Ljubljana:
            $timezone = 'Europe/Ljubljana';
            break;
         case ddtEurope_London:
            $timezone = 'Europe/London';
            break;
         case ddtEurope_Luxembourg:
            $timezone = 'Europe/Luxembourg';
            break;
         case ddtEurope_Madrid:
            $timezone = 'Europe/Madrid';
            break;
         case ddtEurope_Malta:
            $timezone = 'Europe/Malta';
            break;
         case ddtEurope_Mariehamn:
            $timezone = 'Europe/Mariehamn';
            break;
         case ddtEurope_Minsk:
            $timezone = 'Europe/Minsk';
            break;
         case ddtEurope_Monaco:
            $timezone = 'Europe/Monaco';
            break;
         case ddtEurope_Moscow:
            $timezone = 'Europe/Moscow';
            break;
         case ddtEurope_Nicosia:
            $timezone = 'Europe/Nicosia';
            break;
         case ddtEurope_Oslo:
            $timezone = 'Europe/Oslo';
            break;
         case ddtEurope_Paris:
            $timezone = 'Europe/Paris';
            break;
         case ddtEurope_Podgorica:
            $timezone = 'Europe/Podgorica';
            break;
         case ddtEurope_Prague:
            $timezone = 'Europe/Prague';
            break;
         case ddtEurope_Riga:
            $timezone = 'Europe/Riga';
            break;
         case ddtEurope_Rome:
            $timezone = 'Europe/Rome';
            break;
         case ddtEurope_Samara:
            $timezone = 'Europe/Samara';
            break;
         case ddtEurope_San_Marino:
            $timezone = 'Europe/San_Marino';
            break;
         case ddtEurope_Sarajevo:
            $timezone = 'Europe/Sarajevo';
            break;
         case ddtEurope_Simferopol:
            $timezone = 'Europe/Simferopol';
            break;
         case ddtEurope_Skopje:
            $timezone = 'Europe/Skopje';
            break;
         case ddtEurope_Sofia:
            $timezone = 'Europe/Sofia';
            break;
         case ddtEurope_Stockholm:
            $timezone = 'Europe/Stockholm';
            break;
         case ddtEurope_Tallinn:
            $timezone = 'Europe/Tallinn';
            break;
         case ddtEurope_Tirane:
            $timezone = 'Europe/Tirane';
            break;
         case ddtEurope_Tiraspol:
            $timezone = 'Europe/Tiraspol';
            break;
         case ddtEurope_Uzhgorod:
            $timezone = 'Europe/Uzhgorod';
            break;
         case ddtEurope_Vaduz:
            $timezone = 'Europe/Vaduz';
            break;
         case ddtEurope_Vatican:
            $timezone = 'Europe/Vatican';
            break;
         case ddtEurope_Vienna:
            $timezone = 'Europe/Vienna';
            break;
         case ddtEurope_Vilnius:
            $timezone = 'Europe/Vilnius';
            break;
         case ddtEurope_Volgograd:
            $timezone = 'Europe/Volgograd';
            break;
         case ddtEurope_Warsaw:
            $timezone = 'Europe/Warsaw';
            break;
         case ddtEurope_Zagreb:
            $timezone = 'Europe/Zagreb';
            break;
         case ddtEurope_Zaporozhye:
            $timezone = 'Europe/Zaporozhye';
            break;
         case ddtEurope_Zurich:
            $timezone = 'Europe/Zurich';
            break;
         case ddtIndian_Antananarivo:
            $timezone = 'Indian/';
            break;
         case ddtIndian_Chagos:
            $timezone = 'Indian/Chagos';
            break;
         case ddtIndian_Christmas:
            $timezone = 'Indian/Christmas';
            break;
         case ddtIndian_Cocos:
            $timezone = 'Indian/Cocos';
            break;
         case ddtIndian_Comoro:
            $timezone = 'Indian/Comoro';
            break;
         case ddtIndian_Kerguelen:
            $timezone = 'Indian/Kerguelen';
            break;
         case ddtIndian_Mahe:
            $timezone = 'Indian/Mahe';
            break;
         case ddtIndian_Maldives:
            $timezone = 'Indian/Maldives';
            break;
         case ddtIndian_Mauritius:
            $timezone = 'Indian/Mauritius';
            break;
         case ddtIndian_Mayotte:
            $timezone = 'Indian/Mayotte';
            break;
         case ddtIndian_Reunion:
            $timezone = 'Indian/Reunion';
            break;
         case ddtPacific_Apia:
            $timezone = 'Pacific/Apia';
            break;
         case ddtPacific_Auckland:
            $timezone = 'Pacific/Auckland';
            break;
         case ddtPacific_Chatham:
            $timezone = 'Pacific/Chatham';
            break;
         case ddtPacific_Chuuk:
            $timezone = 'Pacific/Chuuk';
            break;
         case ddtPacific_Easter:
            $timezone = 'Pacific/Easter';
            break;
         case ddtPacific_Efate:
            $timezone = 'Pacific/Efate';
            break;
         case ddtPacific_Enderbury:
            $timezone = 'Pacific/Enderbury';
            break;
         case ddtPacific_Fakaofo:
            $timezone = 'Pacific/Fakaofo';
            break;
         case ddtPacific_Fiji:
            $timezone = 'Pacific/Fiji';
            break;
         case ddtPacific_Funafuti:
            $timezone = 'Pacific/Funafuti';
            break;
         case ddtPacific_Galapagos:
            $timezone = 'Pacific/Galapagos';
            break;
         case ddtPacific_Gambier:
            $timezone = 'Pacific/Gambier';
            break;
         case ddtPacific_Guadalcanal:
            $timezone = 'Pacific/Guadalcanal';
            break;
         case ddtPacific_Guam:
            $timezone = 'Pacific/Guam';
            break;
         case ddtPacific_Honolulu:
            $timezone = 'Pacific/Honolulu';
            break;
         case ddtPacific_Johnston:
            $timezone = 'Pacific/Johnston';
            break;
         case ddtPacific_Kiritimati:
            $timezone = 'Pacific/Kiritimati';
            break;
         case ddtPacific_Kosrae:
            $timezone = 'Pacific/Kosrae';
            break;
         case ddtPacific_Kwajalein:
            $timezone = 'Pacific/Kwajalein';
            break;
         case ddtPacific_Majuro:
            $timezone = 'Pacific/Majuro';
            break;
         case ddtPacific_Marquesas:
            $timezone = 'Pacific/Marquesas';
            break;
         case ddtPacific_Midway:
            $timezone = 'Pacific/Midway';
            break;
         case ddtPacific_Nauru:
            $timezone = 'Pacific/Nauru';
            break;
         case ddtPacific_Niue:
            $timezone = 'Pacific/Niue';
            break;
         case ddtPacific_Norfolk:
            $timezone = 'Pacific/Norfolk';
            break;
         case ddtPacific_Noumea:
            $timezone = 'Pacific/Noumea';
            break;
         case ddtPacific_Pago_Pago:
            $timezone = 'Pacific/Pago_Pago';
            break;
         case ddtPacific_Palau:
            $timezone = 'Pacific/Palau';
            break;
         case ddtPacific_Pitcairn:
            $timezone = 'Pacific/Pitcairn';
            break;
         case ddtPacific_Pohnpei:
            $timezone = 'Pacific/Pohnpei';
            break;
         case ddtPacific_Ponape:
            $timezone = 'Pacific/Ponape';
            break;
         case ddtPacific_Port_Moresby:
            $timezone = 'Pacific/Port_Moresby';
            break;
         case ddtPacific_Rarotonga:
            $timezone = 'Pacific/Rarotonga';
            break;
         case ddtPacific_Saipan:
            $timezone = 'Pacific/Saipan';
            break;
         case ddtPacific_Samoa:
            $timezone = 'Pacific/Samoa';
            break;
         case ddtPacific_Tahiti:
            $timezone = 'Pacific/Tahiti';
            break;
         case ddtPacific_Tarawa:
            $timezone = 'Pacific/Tarawa';
            break;
         case ddtPacific_Tongatapu:
            $timezone = 'Pacific/Tongatapu';
            break;
         case ddtPacific_Truk:
            $timezone = 'Pacific/Truk';
            break;
         case ddtPacific_Wake:
            $timezone = 'Pacific/Wake';
            break;
         case ddtPacific_Wallis:
            $timezone = 'Pacific/Wallis';
            break;
         case ddtPacific_Yap:
            $timezone = 'Pacific/Yap';
            break;
      }

      date_default_timezone_set($timezone);

      $locale=strtolower(str_replace('dl','',$this->_datelocale));

      $this->_date=new Zend_Date($this->_time,null,$locale);

      $data['format_type']=str_replace('ft','',$this->_formattype);
      if($this->_fixdst=='false' || $this->_fixdst==0)
          $data['fix_dst']=false;
      else
          $data['fix_dst']=true;
      if($this->_extendmonth=='false' || $this->_extendmonth==0)
          $data['extend_month']=false;
      else
          $data['extend_month']=true;

      $this->_date->setOptions($data);

   }

   // Date Default Timezone

   /**
    * PHP default timezone.
    *
    * @var       string
    */
   protected $_datedefaulttimezone = ddtAmerica_New_York;

   /**
    * Getter method for {@link $_datedefaulttimezone}.
    *
    * @return   string  {@link $_datedefaulttimezone}
    */
   function getDateDefaultTimezone()    {return $this->_datedefaulttimezone;}

   /**
    * Setter method for {@link $_datedefaulttimezone}.
    *
    * @param    string  $value
    */
   function setDateDefaultTimezone($value)    {$this->_datedefaulttimezone = $value;}

   /**
    * Getter for {@link $_datedefaulttimezone}’s default value.
    *
    * @return   string  ddtAmerica_New_York
    */
   function defaultDateDefaultTimezone()    {return ddtAmerica_New_York;}

   // Format Type

   /**
    * Date output format type.
    *
    * Possible values are: {@link ftISO}, or {@link ftPHP}.
    *
    * @link     http://framework.zend.com/manual/en/zend.date.overview.html#zend.date.options.formattype Zend Framework Documentation
    *
    * @var       string
    */
   protected $_formattype = ftPHP;

   /**
    * Getter method for {@link $_formattype}.
    *
    * @return   string  {@link $_formattype}
    */
   function getFormatType()    {return $this->_formattype;}

   /**
    * Setter method for {@link $_formattype}.
    *
    * @param    string  $value
    */
   function setFormatType($value)    {$this->_formattype = $value;}

   /**
    * Getter for {@link $_formattype}’s default value.
    *
    * @return   string  ftPHP
    */
   function defaultFormatType()    {return ftPHP;}

   // Fix DST

   /**
    * Whether or not to ignore DST when permorming date math.
    *
    * It can be set either to true ('true') or to false ('false').
    *
    * @link     http://framework.zend.com/manual/en/zend.date.overview.html#zend.date.options.fixdst Zend Framework Documentation
    *
    * @var       string
    */
   protected $_fixdst = 'true';

   /**
    * Getter method for {@link $_fixdst}.
    *
    * @return   string  {@link $_fixdst}
    */
   function getFixDST()    {return $this->_fixdst;}

   /**
    * Setter method for {@link $_fixdst}.
    *
    * @param    string  $value
    */
   function setFixDST($value)    {$this->_fixdst = $value;}

   /**
    * Getter for {@link $_fixdst}’s default value.
    *
    * @return   string  True ('true')
    */
   function defaultFixDST()    {return 'true';}

   // Extend Month

   /**
    * How month time calculations should be performed.
    *
    * If set to false ('false'), they will be performed the SQL way, where 31th January + 1 month
    * equals to 28th February. If set to true ('true'), on the other hand, 31th January + 1 month
    * would equal 3th March, for example.
    *
    * @link http://framework.zend.com/manual/en/zend.date.overview.html#zend.date.options.extendmonth Zend Framework Documentation
    *
    * @var       string
    */
   protected $_extendmonth = 'false';

   /**
    * Getter method for {@link $_extendmonth}.
    *
    * @return   string  {@link $_extendmonth}
    */
   function getExtendMonth()    {return $this->_extendmonth;}

   /**
    * Setter method for {@link $_extendmonth}.
    *
    * @param    string  $value
    */
   function setExtendMonth($value)    {$this->_extendmonth = $value;}

   /**
    * Getter for {@link $_extendmonth}’s default value.
    *
    * @return   string  False ('false')
    */
   function defaultExtendMonth()    {return 'false';}

   // Date Locale

   /**
    * Locale.
    *
    * The locale affects the output date format, as well as the date format used for serialization.
    *
    * @var       string
    */
   protected $_datelocale = dlEN;

   /**
    * Getter method for {@link $_datelocale}.
    *
    * @return   string  {@link $_datelocale}
    */
   function getDateLocale()    {return $this->_datelocale;}

   /**
    * Setter method for {@link $_datelocale}.
    *
    * @param    string  $value
    */
   function setDateLocale($value)    {$this->_datelocale = $value;}

   /**
    * Getter for {@link $_datelocale}’s default value.
    *
    * @return   string  dlEN
    */
   function defaultDateLocale()    {return dlEN;}

   // Other Methods

   /**
    * Returns a string representation of the date.
    *
    * All parameters are optional.
    *
    * @param    string  $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string  $locale Locale. Possible values are the same as for {@link $_datelocale}.
    * @param    string  $format String defining date output format, either in
    *                           {@link http://framework.zend.com/manual/en/zend.date.constants.html#zend.date.constants.selfdefinedformats ISO}
    *                           or
    *                           {@link http://framework.zend.com/manual/en/zend.date.constants.html#zend.date.constants.phpformats PHP}
    *                           notation.
    * @param    string  $type   Date format type. Possible values are the same as for {@link $_formattype}.
    * @return   string
   */
   function asString($part = null, $locale = null, $format = null,$type=null)
   {
       if($part==null)
          return $this->_date->toString($format,$type,$locale);
       else
          return $this->_date->get($part,$locale);
   }

   /**
    * Change the date, completely or parcially, to a different value.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   New value.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    */
   function change($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->ObjectDate();
      }
      else
      {
          $aux=$date;
      }

      $this->_date->set($aux,$part,$locale);
   }

   /**
    * Increase object date by given value, either a complete date or a part of one.
    *
    * @param     integer|string|ZDate|Zend_Date  $date   New value.
    * @param     string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param     string                          $locale Locale. Possible values are the same as for
    *                                                    {@link $_datelocale}.
    */
   function add($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }
      $this->_date->add($aux,$part,$locale);
   }

   /**
    * Decrease object date by given value, either a complete date or a part of one.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   New value.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    */
   function sub($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      $this->_date->sub($aux,$part,$locale);
   }

   /**
    * Compares object date and given one, either completely or partially.
    *
    * <ul>
    *   <li>When both dates are the <b>same</b>, it returns <tt>0</tt>.</li>
    *   <li>When object date is more recent, it returns <tt>1</tt>.</li>
    *   <li>When given date is more recent, it returns <tt>-1</tt>.</li>
    * </ul>
    *
    * @param    integer|string|ZDate|Zend_Date  $date   Date to compare with object one.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    * @return   integer
    */
   function compare($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      return $this->_date->compare($aux,$part,$locale);
   }

   /**
    * Check if object date and given date are equal.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   Date to compare with object one.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    * @return   boolean
    */
   function equals($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      return $this->_date->equals($aux,$part,$locale);
   }

   /**
    * Check if object date is more recent than given date.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   Date to compare with object one.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    * @return   boolean
    */
   function isEarlier($date, $part = null, $locale = null)
   {
       if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      return $this->_date->isEarlier($aux,$part,$locale);
   }

   /**
    * Check if given date is more recent than object date.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   Date to compare with object one.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    * @return   boolean
    */
   function isLater($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      return $this->_date->isLater($aux,$part,$locale);
   }

   /**
    * Check if object date is today.
    *
    * @return   boolean
    */
   function isToday()
   {
      return $this->_date->isToday();
   }

   /**
    * Check if object date is tomorrow.
    *
    * @return   boolean
    */
   function isTomorrow()
   {
      return $this->_date->isTomorrow();
   }

   /**
    * Check if object date is yesterday.
    *
    * @return   boolean
    */
   function isYesterday()
   {
      return $this->_date->isYesterday();
   }

   /**
    * Check if object date is a leap year.
    *
    * @return   boolean
    */
   function isLeapYear()
   {
      return $this->_date->isLeapYear();
   }

   /**
    * Check if given date is a real date.
    *
    * @param    integer|string|ZDate|Zend_Date  $date   Date to compare with object one.
    * @param    string                          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @param    string                          $locale Locale. Possible values are the same as for
    *                                                   {@link $_datelocale}.
    * @return   boolean
    */
   function isDate($date, $part = null, $locale = null)
   {
      if($date instanceof ZDate)
      {
          $aux=$date->getObject();
      }
      else
      {
          $aux=$date;
      }

      return $this->_date->isDate($aux,$part,$locale);
   }

   /**
    * Returns an array representation of object date.
    *
    * @return   array
    */
   function toArray()
   {
      return $this->_date->toArray();
   }

   /**
    * Returns a numerical representation of object date, either the complete date or a part of it.
    *
    * If specified date part has a non-numerical value, this method retuns false.
    *
    * @param    string          $part   {@link http://framework.zend.com/manual/en/zend.date.constants.html Zend_Date constants}.
    * @return   boolean|integer
    */
   function toValue($part = null)
   {
      return $this->_date->toValue($part);
   }

   /**
    * Returns a {@link Zend_Date} object setup with today’s date.
    *
    * @param    string          $locale Locale. Possible values are the same as for {@link
    *                                   $_datelocale}.
    * @return   Zend_Date
    */
   function now($locale = null)
   {
      return $this->_date->now($locale);
   }

   /**
    * Returns the precision for fractional seconds.
    *
    * @return   integer
    */
   function ReadFractionalPrecision()
   {
      return $this->_date->getFractionalPrecision();
   }

   /**
    * Sets the precision for fractional seconds.
    *
    * @param    integer $precision
    */
   function WriteFractionalPrecision($precision)
   {
      $this->_date->setFractionalPrecision($precision);
   }

   /**
    * Returns the time of sunrise for given location.
    *
    * Only parameter is a key-value array with the following fields:
    * <ul>
    *   <li><b>horizon</b>:
    *     <ul>
    *       <li><tt>astronomical</tt></li>
    *       <li><tt>civic</tt></li>
    *       <li><tt>effective</tt> (default)</li>
    *       <li><tt>nautic</tt></li>
    *     </ul>
    *   </li>
    *   <li><b>longitude</b>: longitude of the location.</li>
    *   <li><b>latitude</b>: latitude of the location.</li>
    * </ul>
    *
    * @param    array   $location
    * @return   Zend_Date
    */
   function returnSunrise($location)
   {
      return $this->_date->getSunrise($location);
   }

   /**
    * Returns the time of sunset for given location.
    *
    * Only parameter is a key-value array with the following fields:
    * <ul>
    *   <li><b>horizon</b>:
    *     <ul>
    *       <li><tt>astronomical</tt></li>
    *       <li><tt>civic</tt></li>
    *       <li><tt>effective</tt> (default)</li>
    *       <li><tt>nautic</tt></li>
    *     </ul>
    *   </li>
    *   <li><b>longitude</b>: longitude of the location.</li>
    *   <li><b>latitude</b>: latitude of the location.</li>
    * </ul>
    *
    * @param    array   $location
    * @return   Zend_Date
    */
   function returnSunset($location)
   {
      return $this->_date->getSunset($location);
   }

   /**
    * Returns an array with the sunset and sunrise dates for given location and all horizon types.
    *
    * Only parameter is a key-value array with the following fields:
    * <ul>
    *   <li><b>horizon</b>:
    *     <ul>
    *       <li><tt>astronomical</tt></li>
    *       <li><tt>civic</tt></li>
    *       <li><tt>effective</tt> (default)</li>
    *       <li><tt>nautic</tt></li>
    *     </ul>
    *   </li>
    *   <li><b>longitude</b>: longitude of the location.</li>
    *   <li><b>latitude</b>: latitude of the location.</li>
    * </ul>
    *
    * @param    array   $location
    * @return   Zend_Date
    */
   function returnSunInfo($location)
   {
      return $this->_date->getSunInfo($location);
   }

   /**
    * Returns {@link $_date}.
    *
    * @return   Zend_Date
    */
   function ObjectDate()
   {
      return $this->_date;
   }

   /**
    * Returns the timezone.
    *
    * @return   string
    */
   function retrieveTimezone()
   {
      if($this->_date == null)
      {
         $this->CreateDate();
      }
      return $this->_date->getTimezone();
   }

   /**
    * Sets the timezone.
    *
    * @param    string  $timezone       New timezone.
    */
   function changeTimezone($timezone)
   {
      if($this->_date == null)
      {
         $this->CreateDate();
      }
      $this->_date->setTimezone($timezone);
   }
}

?>