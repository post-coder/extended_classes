<?php
@include_once __DIR__ . "/classes/subProducts.php";
@include_once __DIR__ . "/classes/creditCard.php";
@include_once __DIR__ . "/classes/order.php";

$crockets = new Food(1, "Crockets", 4.5, 1, "Carne", "Cani");

$crockets -> setWeight(0.75);
$crockets -> setPrice(4);

$miaCarta = new CreditCard(1, "4023 6601 1154 3470", "02/20");


$ordine = new Order(1,2,$miaCarta);
$acquisto = $ordine->buy();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>
  <pre>
    <?php 
    
    var_dump($ordine->creditCard);

    ?>
  </pre>
</body>
</html>