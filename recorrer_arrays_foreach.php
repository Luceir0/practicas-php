<?php

$meses = array(
  'Enero',
  'Febrero',
  'Marzo',
  'Abril'
);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Algunos meses del año</title>
</head>

<body>
  <h1> Algunos meses del año </h1>
  <ul>
    <?php
      foreach($meses as $mes){
        echo '<li>' . $mes . '</li>';
      }

    ?>
  </ul>
</body>

</html>
