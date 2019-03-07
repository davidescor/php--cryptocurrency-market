<?php

include_once("api.php");


function loadtable($id, $name, $symbol, $price_usd, $price_btc,$percent_change_1h, $percent_change_24h, $percent_change_7d){

	$color;

	for($i = 0; $i < 100; $i++){

		if($percent_change_1h[$i] < 0.00){
			$color = 'red';
		}else{
			$color = 'green';
		}

		echo '<tr>
	           <td>
	           	<div class="row">
	           		<div class="col-md-1">
						<img src="img/coin/'.$symbol[$i].'.png" width="20" height="20">
	           		</div>
	           		<div class="col-md-3">
	           			<p class="c-black">'.$name[$i].'</p>
	           		</div>
	           		<div class="col-md-5">
	           			<p class="c-darkgray">'.$symbol[$i].'</p>
	           		</div>
	           	</div>
	           </td>
	           <td>
					<p class="c-black m-bot5">USD '.round($price_usd[$i],3).'</p>
	           		<p class="c-darkgray">BTC '.$price_btc[$i].'</p>
	           </td>


			   <td>
	           		<p class="c-'.$color.'">'.$percent_change_1h[$i].'%</p>
			   </td>

			   <td>
	           		<p class="c-'.$color.'">'.$percent_change_24h[$i].'%</p>
			   </td>

			   <td>
	           		<p class="c-'.$color.'">'.$percent_change_7d[$i].'%</p>
			   </td>
	          </tr>';


	}
}


?>