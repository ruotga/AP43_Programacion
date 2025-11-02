<?php

$city = ["Tokyo", "Mexico City", "New York City", "Mumbai", "Seoul", "Shanghai", "Lagos", "Buenos Aires", " Cairo", "London"];
$country = ["Japan", "Mexico", "USA", "India", "Korea", "China", "Nigeria", "Argentina", "Egypt", "England"];
$capitals = [];

for ($i=0; $i < count($city); $i++) { 
    $CountryCity["Country"] = $country[$i];
    $CountryCity["City"] = $city[$i];
    $capitals[] = $CountryCity;
}

var_dump($capitals);


?>