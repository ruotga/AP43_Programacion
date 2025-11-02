<?php

$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";
$countryArray = explode(",", $country);
$countrys = [];

foreach ($countryArray as $element){
    $CountryArray['country'] = $element;
    $countrys[] = $CountryArray;
}

var_dump($countrys);

?>