<?php

setcookie('font-size', '30px', time() + 60 * 60 * 24 * 30, '/')
//Primero defino el nombre de la cookie, su valor, el tiempo que estará seteada, y el archivo en que estará guardada. Si queremos que esté disponible para todo el dominio, la dejamos así '/'.
//Para eliminar la cookie, bastaría con ponerle un signo negativo en lugar de positivo a 'time()'.'
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Cookie seteada</h1>
  </body>
</html>
