<?php

include_once("core/control/api.php");

$color1;
$color2;
$color3;


function loadtableHome($name, $symbol, $priceUsd, $changePercent24Hr){
echo "<div class='container'>";
echo "<div class='row'>";
	echo "<div class='col-md-12 crypto_market'>";
		echo "<div class='row'>";
		echo "<div class='col-md-2'>
			  <p class='text-header-coin'>#</p>
			  </div>
	          <div class='col-md-2'>
	          <p class='text-header-coin'>Name</p>
	          </div>
			  <div class='col-md-2'>
			  </div>
			  <div class='col-md-2'>
			  </div>
			  <div class='col-md-2'>
				<p class='text-header-coin'>Price</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='text-header-coin'>24h</p>
			  </div>
			  <div class='col-md-12'>
			  	<br><br>
			  </div>
		";
	for($i = 0; $i < 7; $i++){

		$rank = $i + 1;

		if($changePercent24Hr[$i] < 0.00){
			$color[$i] = 'red';
		}else{
			$color[$i] = 'green';
		}

		
		echo "<div class='col-md-2'>
				".$rank."
			  </div>
	          <div class='col-md-2'>
				<img src='core/img/coin/".$symbol[$i].".png' width='32' height='32'>
	          </div>
			  <div class='col-md-2'>
	           	<p class=''>".$symbol[$i]."</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='c-black'>".$name[$i]."</p>
			  </div>
			  <div class='col-md-2'>
				<p class='c-black'>".round($priceUsd[$i],3)." $</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='c-".$color[$i]."'>".round($changePercent24Hr[$i],3)."%</p>
			  </div>
			  <div class='col-md-12'>
			  	<br>
			  </div>
		";
	}

		echo "</div>";
		echo "<a href='market.php' class='view-all-coin'>View all market</a>";
	echo "</div>";

	echo "</div>";
	echo "</div>";
}

function loadtableMarket($name, $symbol, $priceUsd, $changePercent24Hr){
echo "<div class='container'>";
echo "<div class='row'>";
	echo "<div class='col-md-12 crypto_market'>";
		echo "<div class='row'>";
		echo "<div class='col-md-2'>
			  <p class='text-header-coin'>#</p>
			  </div>
	          <div class='col-md-2'>
	          <p class='text-header-coin'>Name</p>
	          </div>
			  <div class='col-md-2'>
			  </div>
			  <div class='col-md-2'>
			  </div>
			  <div class='col-md-2'>
				<p class='text-header-coin'>Price</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='text-header-coin'>24h</p>
			  </div>
			  <div class='col-md-12'>
			  	<br><br>
			  </div>
		";
	for($i = 0; $i < 100; $i++){

		$rank = $i + 1;

		if($changePercent24Hr[$i] < 0.00){
			$color[$i] = 'red';
		}else{
			$color[$i] = 'green';
		}

		
		echo "<div class='col-md-2'>
				".$rank."
			  </div>
	          <div class='col-md-2'>
				<img src='core/img/coin/".$symbol[$i].".png' width='32' height='32'>
	          </div>
			  <div class='col-md-2'>
	           	<p class=''>".$symbol[$i]."</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='c-black'>".$name[$i]."</p>
			  </div>
			  <div class='col-md-2'>
				<p class='c-black'>".round($priceUsd[$i],3)." $</p>
			  </div>
			  <div class='col-md-2'>
	           	<p class='c-".$color[$i]."'>".round($changePercent24Hr[$i],3)."%</p>
			  </div>
			  <div class='col-md-12'>
			  	<br>
			  </div>
		";
	}

		echo "</div>";
	echo "</div>";

	echo "</div>";
	echo "</div>";
}

?>