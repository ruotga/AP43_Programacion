<?php
$city = "Tokyo,Mexico City,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London";
$country = "Japan,Mexico,USA,India,Korea,China,Nigeria,Argentina,Egypt,England";

$cityArray = explode(",", $city);
$countryArray = explode(",", $country);

$capitals = [];

foreach ($countryArray as $index => $pais) {
    $capitals[] = [
        'country' => trim($pais),
        'city' => trim($cityArray[$index])
    ];
}

var_dump($capitals);
?>
