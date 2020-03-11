<?php
  include_once("core/php/func.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

  <link rel="shortcut icon" href="core/img/favicon.ico" type="image/ico" />
  <link rel="apple-touch-icon" href="core/img/favicon.ico" type="image/ico" />
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="core/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="core/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="core/img/favicon.ico" type="image/ico">
  <link rel="apple-touch-icon-precomposed" href="core/img/favicon.ico" type="image/ico">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Cryptocurrency market</title>
  <link href="core/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="core/css/style.css" rel="stylesheet">
</head>

<body>
  <div class="text-center">
    <a href="index.php"><img src="core/img/512px.jpg" width="256" height="256"></a>
    <p class="t-cript upcase text-center">Cryptocurrency market</p>
  </div>
  <div class='container'>
    <table cellpadding="0" cellspacing="0" border="0">
      <tr>
        <th>COIN</th>
        <th>PRICE</th>
        <th>24 HOURS</th>
      </tr>
      <hr>
      <?php
      loadtable($name, $symbol, $priceUsd, $changePercent24Hr);
      ?>
    </table>
    <p class="backtotop">
    <a href="#">Back to top</a>
    </p>
  </div>
  <footer class="text-center">
    <p><a href="http://davidespier.com">davidespier.com</a> © CRYPTOCURRENCY MARKET</p>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
