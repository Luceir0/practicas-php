<?php

session_start();

if($_SESSION){
  $name = $_SESSION['name'];
  echo "<h1>Hola, $name</h1>";
}else{
  echo "No has iniciado sesión";
}

//Hacemos este if, por si volvemos a recargar alguna de las páginas después de haber cerrado la sesión en close.php

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Page 2</title>
  </head>
  <body>
    <a href="close.php">Close session</a>
  </body>
</html>
