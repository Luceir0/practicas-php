<?php

//print_r($_POST);
//La variable $_POST va a hacer referencia a todos los datos enviados por el usuario del formulario.
//Podemos consultarlos todos, por ejemplo, a través de esa función.

if(!$_POST){
  header('Location: http://localhost/cursoPHP/formularios/');
}
  $nombre = $_POST['nombre'];
  $sexo = $_POST['sexo'];
  $classyear = $_POST['classyear'];
  $terminos = $_POST['terminos'];

  echo 'Hola, ' . $nombre . ' tus términos han sido ' . $terminos;

//Con este if... else estamos indicando que, en caso de que el array asociativo $_POST no tenga ningún dato,
//redirigiremos al usuario al formulario. En caso contrario, operaremos con los datos que haya introducido.


?>
