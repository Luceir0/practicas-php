<?php

session_start();
$_SESSION['name'] = 'Eve';
//Creamos una variable de inicio de sesión mediante el método session_start(); que ha de ponerse en todas las páginas en las que queramos que la sesión continúe abierta.
//La variable constante la estaremos inicializando al llamarla dándole un nombre a la variable interna, y un valor.
//Esta sesión se cerrará automáticamente cuando se cierre el navegador web.
//También en el momento en el que se active el método session_destroy(), que hemos escrito en el archivo close.php

?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sessions</title>
  </head>
  <body>
    <h1>Index page</h1>
    <p></p>
    <a href="page2.php">Go to page 2</a>
  </body>
</html>
