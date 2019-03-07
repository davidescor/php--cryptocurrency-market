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

    <title>VOLUME BASE</title>

    <!-- BOOTSTRAP CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>

  <body>











<div class="container-fluid">
    <table cellpadding="0" cellspacing="0" border="0">

      <thead class="tbl-header">
        <tr>
          <th>COIN</th>
          <th>PRICE</th>
          <th>1 HOUR</th>
          <th>24 HOURS</th>
          <th>7 DAYS</th>
        </tr>
      </thead>


    <table cellpadding="0" cellspacing="0" border="0">
      <tbody>

      	<?php

      		loadtable($id, $name, $symbol, $price_usd, $price_btc,$percent_change_1h, $percent_change_24h, $percent_change_7d);

      	?>

      </tbody>
    </table>
</div>








    <!-- BOOSTRAP JAVASCRIPT -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
