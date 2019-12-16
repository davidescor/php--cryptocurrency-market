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

    <title>Mercado de criptomonedas</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>

  <body>

    <div class="text-center">
      <a href="index.php"><img src="img/512px.jpg" width="256" height="256"></a>
      <p class="t-cript upcase text-center">Mercado de criptomonedas</p>
    </div>

    <div class='container'>
      <table cellpadding="0" cellspacing="0" border="0">

          <tr>
            <th>COIN</th>
            <th>PRICE</th>
            <th>1 HOUR</th>
            <th>24 HOURS</th>
            <th class="seven-days">7 DAYS</th>
          </tr>

      </table>
      <table cellpadding="0" cellspacing="0" border="0">

        	<?php

        		loadtable($rank, $id, $name, $symbol, $price_usd, $price_btc,$percent_change_1h, $percent_change_24h, $percent_change_7d);

        	?>

      </table>

    <p class="backtotop">
      <a href="#">Back to top</a>
    </p>

      <footer class="text-center">
          <p>© Mercado de criptomonedas</p>
      </footer>
    </div>


    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
