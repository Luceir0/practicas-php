<?php

$errors = '';
$sent = '';

//En caso de que el formulario tenga algún contenido aportado por el usuario, inicializamos sus variables:

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

//En caso de que la variable "name" no esté vacía, "limpiamos" el dato que hayan introducido, tanto de espacios como de código html inyectado etc.:
//Si está vacía, añadiremos el mensaje de error correspondiente, a la variable "errors", para usarla después:

  if (!empty($name)) {
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
  } else {
    $errors .= 'Please, write your name </br>';
  }

//En caso de que la variable "email" no esté vacía, usamos un filtro para eliminar caracteres no válidos, y otro de validación del email.
//Si la validación no es correcta, sumamos el mensaje correspondiente a la variable "errors"
//Si la variable está vacía, sumamos un mensaje de error a la variable "errors":

  if (!empty($email)) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors .= "It seems that your email isn't valid :( </br>";
    }
  } else {
    $errors .= 'Sorry but we need to know your email </br>';
  }

//Si la variable mensaje no está vacía, corregimos los espacios y caracteres. Si está vacía, añadimos el mensaje de error a la variable "errors".

  if (!empty($message)) {
    $message = htmlspecialchars($message);
    $message = trim($message);
    $message = stripslashes($message);
  } else {
    $errors .= 'Oops, you forgot to write your message </br>';
  }

//En caso de que no haya errores, construimos el mensaje para enviarlo a cierto mail de recepción del formulario:

  if (!$errors) {
    $send_to = 'anemail@adirection.com';
    $issue = 'Email sent from mypage.com';
    $built_message = "De: $name \n";
    $built_message .= "Email: $email \n";
    $built_message .= "Message: " . $message;

    //mail($send_to, $issue, $built_message);

  //Y marcamos la variable $sent como true, para utilizarla después en el archivo hmtl:

    $sent = 'true';
  }

}

//Ponemos AL FINAL DEL ARCHIVO, el require con el archivo del front de la web. Para unir la lógica con el "cuerpo" de la página web:

require 'index.view.php';
?>
