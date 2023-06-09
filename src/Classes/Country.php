<?php
/**
 * This file is part of the netsuitephp/netsuite-php library
 * AND originally from the NetSuite PHP Toolkit.
 *
 * New content:
 * @package    ntn/netsuite-php
 * @copyright  Copyright (c) Ryan Winchester
 * @license    http://www.apache.org/licenses/LICENSE-2.0 Apache-2.0
 * @link       https://github.com/netsuitephp/netsuite-php
 *
 * Original content:
 * @copyright  Copyright (c) NetSuite Inc.
 * @license    https://raw.githubusercontent.com/netsuitephp/netsuite-php/master/original/NetSuite%20Application%20Developer%20License%20Agreement.txt
 * @link       http://www.netsuite.com/portal/developers/resources/suitetalk-sample-applications.shtml
 */

namespace NetSuite\Classes;

class Country {
    static $paramtypesmap = array(
    );
    const _afghanistan = "_afghanistan";
    const _alandIslands = "_alandIslands";
    const _albania = "_albania";
    const _algeria = "_algeria";
    const _americanSamoa = "_americanSamoa";
    const _andorra = "_andorra";
    const _angola = "_angola";
    const _anguilla = "_anguilla";
    const _antarctica = "_antarctica";
    const _antiguaAndBarbuda = "_antiguaAndBarbuda";
    const _argentina = "_argentina";
    const _armenia = "_armenia";
    const _aruba = "_aruba";
    const _australia = "_australia";
    const _austria = "_austria";
    const _azerbaijan = "_azerbaijan";
    const _bahamas = "_bahamas";
    const _bahrain = "_bahrain";
    const _bangladesh = "_bangladesh";
    const _barbados = "_barbados";
    const _belarus = "_belarus";
    const _belgium = "_belgium";
    const _belize = "_belize";
    const _benin = "_benin";
    const _bermuda = "_bermuda";
    const _bhutan = "_bhutan";
    const _bolivia = "_bolivia";
    const _bonaireSaintEustatiusAndSaba = "_bonaireSaintEustatiusAndSaba";
    const _bosniaAndHerzegovina = "_bosniaAndHerzegovina";
    const _botswana = "_botswana";
    const _bouvetIsland = "_bouvetIsland";
    const _brazil = "_brazil";
    const _britishIndianOceanTerritory = "_britishIndianOceanTerritory";
    const _bruneiDarussalam = "_bruneiDarussalam";
    const _bulgaria = "_bulgaria";
    const _burkinaFaso = "_burkinaFaso";
    const _burundi = "_burundi";
    const _cambodia = "_cambodia";
    const _cameroon = "_cameroon";
    const _canada = "_canada";
    const _canaryIslands = "_canaryIslands";
    const _capeVerde = "_capeVerde";
    const _caymanIslands = "_caymanIslands";
    const _centralAfricanRepublic = "_centralAfricanRepublic";
    const _ceutaAndMelilla = "_ceutaAndMelilla";
    const _chad = "_chad";
    const _chile = "_chile";
    const _china = "_china";
    const _christmasIsland = "_christmasIsland";
    const _cocosKeelingIslands = "_cocosKeelingIslands";
    const _colombia = "_colombia";
    const _comoros = "_comoros";
    const _congoDemocraticPeoplesRepublic = "_congoDemocraticPeoplesRepublic";
    const _congoRepublicOf = "_congoRepublicOf";
    const _cookIslands = "_cookIslands";
    const _costaRica = "_costaRica";
    const _coteDIvoire = "_coteDIvoire";
    const _croatiaHrvatska = "_croatiaHrvatska";
    const _cuba = "_cuba";
    const _curacao = "_curacao";
    const _cyprus = "_cyprus";
    const _czechRepublic = "_czechRepublic";
    const _denmark = "_denmark";
    const _djibouti = "_djibouti";
    const _dominica = "_dominica";
    const _dominicanRepublic = "_dominicanRepublic";
    const _eastTimor = "_eastTimor";
    const _ecuador = "_ecuador";
    const _egypt = "_egypt";
    const _elSalvador = "_elSalvador";
    const _equatorialGuinea = "_equatorialGuinea";
    const _eritrea = "_eritrea";
    const _estonia = "_estonia";
    const _ethiopia = "_ethiopia";
    const _falklandIslands = "_falklandIslands";
    const _faroeIslands = "_faroeIslands";
    const _fiji = "_fiji";
    const _finland = "_finland";
    const _france = "_france";
    const _frenchGuiana = "_frenchGuiana";
    const _frenchPolynesia = "_frenchPolynesia";
    const _frenchSouthernTerritories = "_frenchSouthernTerritories";
    const _gabon = "_gabon";
    const _gambia = "_gambia";
    const _georgia = "_georgia";
    const _germany = "_germany";
    const _ghana = "_ghana";
    const _gibraltar = "_gibraltar";
    const _greece = "_greece";
    const _greenland = "_greenland";
    const _grenada = "_grenada";
    const _guadeloupe = "_guadeloupe";
    const _guam = "_guam";
    const _guatemala = "_guatemala";
    const _guernsey = "_guernsey";
    const _guinea = "_guinea";
    const _guineaBissau = "_guineaBissau";
    const _guyana = "_guyana";
    const _haiti = "_haiti";
    const _heardAndMcDonaldIslands = "_heardAndMcDonaldIslands";
    const _holySeeCityVaticanState = "_holySeeCityVaticanState";
    const _honduras = "_honduras";
    const _hongKong = "_hongKong";
    const _hungary = "_hungary";
    const _iceland = "_iceland";
    const _india = "_india";
    const _indonesia = "_indonesia";
    const _iranIslamicRepublicOf = "_iranIslamicRepublicOf";
    const _iraq = "_iraq";
    const _ireland = "_ireland";
    const _isleOfMan = "_isleOfMan";
    const _israel = "_israel";
    const _italy = "_italy";
    const _jamaica = "_jamaica";
    const _japan = "_japan";
    const _jersey = "_jersey";
    const _jordan = "_jordan";
    const _kazakhstan = "_kazakhstan";
    const _kenya = "_kenya";
    const _kiribati = "_kiribati";
    const _koreaDemocraticPeoplesRepublic = "_koreaDemocraticPeoplesRepublic";
    const _koreaRepublicOf = "_koreaRepublicOf";
    const _kosovo = "_kosovo";
    const _kuwait = "_kuwait";
    const _kyrgyzstan = "_kyrgyzstan";
    const _laoPeoplesDemocraticRepublic = "_laoPeoplesDemocraticRepublic";
    const _latvia = "_latvia";
    const _lebanon = "_lebanon";
    const _lesotho = "_lesotho";
    const _liberia = "_liberia";
    const _libya = "_libya";
    const _liechtenstein = "_liechtenstein";
    const _lithuania = "_lithuania";
    const _luxembourg = "_luxembourg";
    const _macau = "_macau";
    const _macedonia = "_macedonia";
    const _madagascar = "_madagascar";
    const _malawi = "_malawi";
    const _malaysia = "_malaysia";
    const _maldives = "_maldives";
    const _mali = "_mali";
    const _malta = "_malta";
    const _marshallIslands = "_marshallIslands";
    const _martinique = "_martinique";
    const _mauritania = "_mauritania";
    const _mauritius = "_mauritius";
    const _mayotte = "_mayotte";
    const _mexico = "_mexico";
    const _micronesiaFederalStateOf = "_micronesiaFederalStateOf";
    const _moldovaRepublicOf = "_moldovaRepublicOf";
    const _monaco = "_monaco";
    const _mongolia = "_mongolia";
    const _montenegro = "_montenegro";
    const _montserrat = "_montserrat";
    const _morocco = "_morocco";
    const _mozambique = "_mozambique";
    const _myanmar = "_myanmar";
    const _namibia = "_namibia";
    const _nauru = "_nauru";
    const _nepal = "_nepal";
    const _netherlands = "_netherlands";
    const _newCaledonia = "_newCaledonia";
    const _newZealand = "_newZealand";
    const _nicaragua = "_nicaragua";
    const _niger = "_niger";
    const _nigeria = "_nigeria";
    const _niue = "_niue";
    const _norfolkIsland = "_norfolkIsland";
    const _northernMarianaIslands = "_northernMarianaIslands";
    const _norway = "_norway";
    const _oman = "_oman";
    const _pakistan = "_pakistan";
    const _palau = "_palau";
    const _panama = "_panama";
    const _papuaNewGuinea = "_papuaNewGuinea";
    const _paraguay = "_paraguay";
    const _peru = "_peru";
    const _philippines = "_philippines";
    const _pitcairnIsland = "_pitcairnIsland";
    const _poland = "_poland";
    const _portugal = "_portugal";
    const _puertoRico = "_puertoRico";
    const _qatar = "_qatar";
    const _reunionIsland = "_reunionIsland";
    const _romania = "_romania";
    const _russianFederation = "_russianFederation";
    const _rwanda = "_rwanda";
    const _saintBarthelemy = "_saintBarthelemy";
    const _saintHelena = "_saintHelena";
    const _saintKittsAndNevis = "_saintKittsAndNevis";
    const _saintLucia = "_saintLucia";
    const _saintMartin = "_saintMartin";
    const _saintVincentAndTheGrenadines = "_saintVincentAndTheGrenadines";
    const _samoa = "_samoa";
    const _sanMarino = "_sanMarino";
    const _saoTomeAndPrincipe = "_saoTomeAndPrincipe";
    const _saudiArabia = "_saudiArabia";
    const _senegal = "_senegal";
    const _serbia = "_serbia";
    const _seychelles = "_seychelles";
    const _sierraLeone = "_sierraLeone";
    const _singapore = "_singapore";
    const _sintMaarten = "_sintMaarten";
    const _slovakRepublic = "_slovakRepublic";
    const _slovenia = "_slovenia";
    const _solomonIslands = "_solomonIslands";
    const _somalia = "_somalia";
    const _southAfrica = "_southAfrica";
    const _southGeorgia = "_southGeorgia";
    const _southSudan = "_southSudan";
    const _spain = "_spain";
    const _sriLanka = "_sriLanka";
    const _stateOfPalestine = "_stateOfPalestine";
    const _stPierreAndMiquelon = "_stPierreAndMiquelon";
    const _sudan = "_sudan";
    const _suriname = "_suriname";
    const _svalbardAndJanMayenIslands = "_svalbardAndJanMayenIslands";
    const _swaziland = "_swaziland";
    const _sweden = "_sweden";
    const _switzerland = "_switzerland";
    const _syrianArabRepublic = "_syrianArabRepublic";
    const _taiwan = "_taiwan";
    const _tajikistan = "_tajikistan";
    const _tanzania = "_tanzania";
    const _thailand = "_thailand";
    const _togo = "_togo";
    const _tokelau = "_tokelau";
    const _tonga = "_tonga";
    const _trinidadAndTobago = "_trinidadAndTobago";
    const _tunisia = "_tunisia";
    const _turkey = "_turkey";
    const _turkmenistan = "_turkmenistan";
    const _turksAndCaicosIslands = "_turksAndCaicosIslands";
    const _tuvalu = "_tuvalu";
    const _uganda = "_uganda";
    const _ukraine = "_ukraine";
    const _unitedArabEmirates = "_unitedArabEmirates";
    const _unitedKingdom = "_unitedKingdom";
    const _unitedStates = "_unitedStates";
    const _uruguay = "_uruguay";
    const _uSMinorOutlyingIslands = "_uSMinorOutlyingIslands";
    const _uzbekistan = "_uzbekistan";
    const _vanuatu = "_vanuatu";
    const _venezuela = "_venezuela";
    const _vietnam = "_vietnam";
    const _virginIslandsBritish = "_virginIslandsBritish";
    const _virginIslandsUSA = "_virginIslandsUSA";
    const _wallisAndFutunaIslands = "_wallisAndFutunaIslands";
    const _westernSahara = "_westernSahara";
    const _yemen = "_yemen";
    const _zambia = "_zambia";
    const _zimbabwe = "_zimbabwe";
}
