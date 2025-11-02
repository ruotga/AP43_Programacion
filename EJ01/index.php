<?php
/* var_dump() para $city = "Tokyo,Mexico city,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires, Cairo,London"; */
$city = "Tokyo,Mexico city,New York City,Mumbai,Seoul,Shanghai,Lagos,Buenos Aires,Cairo,London";
$cityArray = explode(",", $city);
$capitals = [];

foreach ($cityArray as $element){
    $CountryCity['city'] = $element;
    $capitals[] = $CountryCity;
}

var_dump($capitals);

?>