<?php session_start();

if(isset($_SESSION['usuario'])){
  header('Location: index.php');
}

$errors = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password = hash('sha512', $password);

  try {
    $connection = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
  } catch (PDOException $e) {
    echo "Error: " . $e -> getMessage();
  }

  $statement = $connection -> prepare('SELECT * FROM usuarios where usuario = :user AND pass = :password');
  $statement -> execute(array(':user' => $user, ':password' => $password));
  $result = $statement -> fetch();

  if ($result != false) {
    $_SESSION['user'] = $user;
    header('Location: index.php');
  }else {
    $errors .= '<li>Incorrect data</li>';
  }
}

require 'views/login.view.php';
?>
