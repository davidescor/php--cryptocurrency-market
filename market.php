<?php
  include_once("core/control/func.php");
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
  <title>CCM - Home</title>
  <link href="core/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="core/css/style.css" rel="stylesheet">
</head>

<body>

  <div class="header">
    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a href="index.php" class="navbar-brand"><img src='core/img/512px.jpg' width="32" height="32"></a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="market.php" class="nav-item nav-link active">Market</a>
                <a href="#" class="nav-item nav-link">News</a>
                <a href="#" class="nav-item nav-link">Contact</a>
            </div>
            <div class="navbar-nav ml-auto">
                <a href="#" class="nav-item nav-link">Sign in</a>
            </div>
        </div>
    </nav>

    <p class="name-logo">cryptocurrency market</p>
    <p class="text-logo">List of the top 100 cryptocurrencies</p>
  </div>

  <?php
    loadtableMarket($name, $symbol, $priceUsd, $changePercent24Hr);
  ?>

  <br>

  <footer class="text-center">
    <p class="f-size17 c-black"> CMM © 2020 </p><a class="no-style" href="http://www.davidespier.com">Created by davidespier.com</a>
  </footer>

  <script src="core/vendor/jquery/jquery.min.js"></script>
  <script src="core/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>
</html>
