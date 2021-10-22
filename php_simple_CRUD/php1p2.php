<!DOCTYPE html>
<html>
<head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta charset="utf-8">
    <title>Document</title>
</head>
<body>
    <?php
      $semester_fee = 16000;
      $g_discount = 0.5;
      $u_discount = 0.2;
      
      $fee_after_u_discount = $semester_fee * (1 - $u_discount);
      echo "Fee after university discount(20%)".$fee_after_u_discount."baht";
      
      $discount = 0.2;
      $hello = "Hello\"Monday\"";
      echo "This is Ex of string:$hello";
      echo "<br>";
      echo "This is Ex of string: ". $hello;
      
      
      
      
      ?>
</body>
</html>