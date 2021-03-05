<?php

$errores = '';

if (isset($_POST['submit'])) {
  $nombre = $_POST['nombre'];
  $email = $_POST['email'];

//Si hay un nombre (si la variable no está vacía), ejecutas el código. Si no, añades ese string a la variable errores (que habíamos dejado vacía arriba)...
//(Mirar continuación en código html más abajo)

  if (!empty($nombre)) {
    $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    //el FILTER_SANITIZE_STRING sirve para "limpiar" el dato que hayan introducido, tanto de espacios como de código html inyectado etc.
    echo 'Tu nombre es: ' . $nombre . '</br>';
  }else{
    $errores .= 'Por favor, escribe tu nombre </br>';
    //Cada vez que se produzca un error, vamos a sumar el mensaje relativo al tipo de error, a la variable.
    //(Para después usarla en el código html y que me "escupa" todos los errores)
  }

  if (!empty($email)) {
    echo 'Tu email es: ' . $email . '</br>';
  }else{
    $errores .= 'Por favor, escribe tu email </br>';
  }
  //También se podría "sanear" y validar el mail con:
  //filter_var($email, FILTER_SANITIZE_EMAIL)
  //filter_var($email, FILTER_VALIDATE_EMAIL)
  //Pero no los he usado porque esa función ya la cumple en la vida real el input type="email"

}


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8" content="IE-edge">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style media="screen">
      .error{color:red;}
    </style>
  </head>
  <body>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
      <input type="text" name="nombre" placeholder="Tu nombre:">
      <input type="email" name="email" placeholder="Tu email:">

      <!-- Si se ha producido algún error (y hemos llenado la variable con un mensaje relativo al error en cuestión); me lo muestras por pantalla -->
      <?php if (!empty($errores)): ?>
        <div class="error"><?php echo $errores; ?></div>
      <?php endif; ?>


      <input type="submit" name="submit">
    </form>
  </body>
</html>
