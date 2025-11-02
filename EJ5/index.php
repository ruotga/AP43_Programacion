<?php
$data = "Tokyo, Japan; Mexico City, Mexico; New York City, USA; Mumbai, India; Seoul, Korea; Shanghai, China; Lagos, Nigeria; Buenos Aires, Argentina; Cairo, Egypt; London, England.";
$PaisCapital = explode(";", $data);
$capitals = [];

foreach ($PaisCapital as $country){
    $CountryData = explode(",", $country);
    $countrycity["country"] = trim($CountryData[1]);
    $countrycity["city"] = trim($CountryData[0]);
    $capitals[] = $countrycity;
}

var_dump($capitals);


?>