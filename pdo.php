<?php

try{
  $connection = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
  //'tipo de bd : el host; el nombre de la bd;', 'nombre de usuario', 'contraseña, si hay';
  echo "Conexión OK" . '</br>';
  $results = $connection -> query('SELECT * FROM usuarios');
    foreach($results as $row){
      echo $row['nombre'] . '</br>';
    }
}catch(PDOException $e){
  echo "Error: " . $e -> getMessage();
}

//Con esto intentamos conectarnos. Si no podemos, atrapamos el error y le pedimos que nos devuelva el mensaje.
?>
