<?php

$paises = array(
  'España',
  'Mexico',
  'Argentina',
  'Cuba'
);

foreach ($paises as $pais) {
  echo $pais . '</br>';

  if($pais == 'Mexico') {
    break;
  }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Países latinoamericanos</title>
  </head>
  <body>
    <h1>Países latinoamericanos</h1>
    <?php
      foreach ($paises as $pais) {
        if ($pais == 'España') {
          continue;
        }
        echo $pais . '</br>';
      }
    ?>
  </body>
</html>
