<?php

$url = 'https://api.coinmarketcap.com/v1/ticker/?limit=0';
$data = file_get_contents($url);
$characters = json_decode($data);

$id = [];
$name = [];
$symbol = [];
$rank = [];
$price_usd = [];
$price_btc = [];
$percent_change_1h = [];
$percent_change_24h = [];
$percent_change_7d = [];
$market_cap_usd = [];

$i = 0;

foreach ($characters as $character) {
	$id[$i] = $character->id;
	$name[$i] = $character->name;
	$symbol[$i] = $character->symbol;
	$rank[$i] = $character->rank;
	$price_usd[$i] = $character->price_usd;
	$price_btc[$i] = $character->price_btc;
	$percent_change_1h[$i] = $character->percent_change_1h;
	$percent_change_24h[$i] = $character->percent_change_24h;
	$percent_change_7d[$i] = $character->percent_change_7d;
	$market_cap_usd[$i] = $character->market_cap_usd;
	$i++;
}



?>