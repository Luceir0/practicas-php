<?php

$id = $_GET['id'];

try{
  $connection = new PDO('mysql:host=localhost;dbname=prueba_datos', 'root', '');
  $statement = $connection -> prepare('SELECT * FROM usuarios WHERE id = :id');
  // :id es un placeholder que reemplazaremos por un parámetro que recibirá el método execute();
  //execute(); recibirá un parámetro en forma de array.
  //prepare(); execute(); y fetch(); son tres métodos propios de la clase PDO.
  $statement -> execute(array(':id' => $id));
  //Dentro del array estamos sustituyendo el placerholder :id de la query, por la variable $id (que estará guardando el número del id que el usaurio le pase por la barra de dirección).
  $results = $statement -> fetch();
  //fetch(); nos devolverá un único array asociativo. Si queremos recibirlos todos tendremos que usar fetchall();
  /*
    $results = $statement -> fetchall();
    foreach($results as $user){
      echo $user['nombre'] . '</br>';
    }
  */
  print_r($results);
}catch(PDOException $e){
  echo "Error: " . $e -> getMessage();
}

?>
