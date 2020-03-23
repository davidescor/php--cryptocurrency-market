<?php

$url = 'https://api.coincap.io/v2/assets';
$data = file_get_contents($url);
$characters = json_decode($data, true);

$name = [];
$symbol = [];
$priceUsd = [];
$changePercent24Hr = [];


for($i = 0; $i <= 99; $i++){

	$name[$i] = $characters['data'][$i]['name'];
	$symbol[$i] = $characters['data'][$i]['symbol'];
	$priceUsd[$i] = $characters['data'][$i]['priceUsd'];
	$changePercent24Hr[$i] = $characters['data'][$i]['changePercent24Hr'];

}



?>