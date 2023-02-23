<?php
$service_url = 'https://restcountries.com/v3.1/all';
$jsonObject = json_decode(file_get_contents($service_url),true);

// echo "<pre>";
// print_r($jsonObject);
// echo "</pre>";

foreach ($jsonObject as $object) {
    echo $object["name"]["common"]."<br>";
    echo "<img src=".$object["flags"]["png"]." width='50' height='50' /><br><br>";
}