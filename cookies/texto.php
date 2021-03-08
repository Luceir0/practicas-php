<?php

if(isset($_COOKIE['font-size'])){
  $size = htmlspecialchars($_COOKIE['font-size']);
  //Guardamos en esta variable el valor que tiene la palabra clave 'font-size' en la cookie seteada en index.php
  //Uso htmlspecialchars para proteger a la cookie de inyección de código.
}else{
  $size = '15px';
  //Damos un valor por defecto a la variable, en caso de que la cookie no esté seteada con el valor 'font-size'.
}


?>



<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Texto</title>
    <style media="screen">
      p{
        font-size: <?php echo $size; ?>;
        /*Hacemos que su valor sea dinámico, dependiendo de la variable '$size' de la cookie. (La hemos creado arriba e igualado su valor al valor guardado en la cookie).*/
      }
    </style>
  </head>
  <body>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
      Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
      Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </body>
</html>
