<?php

include_once("core/php/api.php");

$color1;
$color2;
$color3;


function loadtable($name, $symbol, $priceUsd, $changePercent24Hr){


	for($i = 0; $i <= 99; $i++){

		$rank = $i + 1;

		if($changePercent24Hr[$i] < 0.00){
			$color[$i] = 'red';
		}else{
			$color[$i] = 'green';
		}

		echo '<tr>
	           <td s>
	           	<div class="row">
	           		<div class="col-md-1 hiddensm">
						<p>'.$rank.'</p>
	           		</div>
	           		<div class="col-md-1">
						<img src="core/img/coin/'.$symbol[$i].'.png" width="20" height="20">
	           		</div>

	           		<div class="col-md-6" ">
	           			<p class="c-black">'.$name[$i].'</p>
	           		</div>
	           		<div class="col-md-3"">
	           			<p class="c-darkgray">'.$symbol[$i].'</p>
	           		</div>
	           	</div>
	           </td>
	           <td>
					<p class="c-black">$ '.round($priceUsd[$i],3).'</p>
	           </td>
			   <td>
	           		<p class="c-'.$color[$i].'">'.round($changePercent24Hr[$i],3).'%</p>
			   </td>
	          </tr>';
	}

}

?>