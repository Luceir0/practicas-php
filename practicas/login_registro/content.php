<?php session_start();
//Aquí va la lógica.

if (isset($_SESSION['user'])) {
  require 'views/content.view.php';
}else{
  header('Location: login.php');
}

?>
