<?php

include_once("model.php");


?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>COIN VIEW</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body>

    <div id="gotop" class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
      <a class="my-0 mr-md-auto name-page" href="#">COIN VIEW</A>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="#">LOGIN</a>
      </nav>
      <a class="btn btn-primary" href="#">REGISTER</a>
    </div>





<div class="container">
    <table cellpadding="0" cellspacing="0" border="0">
      <p class="t-cript upcase text-center">Cryptocurrencies</p>

        <tr>
          <th>COIN</th>
          <th>PRICE</th>
          <th>1 HOUR</th>
          <th>24 HOURS</th>
          <th>7 DAYS</th>
        </tr>

    </table>
    <hr>
    <table cellpadding="0" cellspacing="0" border="0">

      	<?php

      		loadtable($rank, $id, $name, $symbol, $price_usd, $price_btc,$percent_change_1h, $percent_change_24h, $percent_change_7d);

      	?>

    </table>
</div>
<hr>
        <footer class="text-center footer">
          <p class="c-white-footer f-size15">COIN VIEW © COPYRIGHT BY <a class="no-style" href="http://www.davidespier.com">DAVID ESPIER</a></p>
        </footer>




<a href="#gotop" class="btn btn-outline-primary gotop">TOP</a>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
