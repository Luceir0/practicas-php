<?php session_start();

if(isset($_SESSION['usuario'])){
  header('Location: index.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
  $password = $_POST['password'];
  $password2 = $_POST['password2'];
  //Estos datos los estamos pasando por el 'name' de cada uno de los campos del form. Tienen que llevar el mismo nombre.
  //echo "$user . $password . $password2";

  $errors = '';

  if (empty($user) or empty($password) or empty($password2)) {
    $errors .= '<li>Please, fill all the form fields correctly</li>';
    //Si hay algún campo vacío en el formulario del usuario, sumas el mensaje de error a la variable errors.
  } else {
    try {
      $connection = new PDO('mysql:host=localhost;dbname=login_practica', 'root', '');
      //Si todo va bien hasta aquí, te intentas conectar a la BBDD.
    } catch (PDOException $e) {
      echo "Error: " . $e -> getMessage();
      //Si hubiera algún error de conexión.
    }
      $statement = $connection -> prepare('SELECT * FROM usuarios WHERE usuario = :user LIMIT 1');
      //Preparamos la petición a la BBDD
      $statement -> execute(array(':user' => $user));
      //Le aclaramos que en el momento de la ejecución, ':user' se refiere a la variable $user obtenida por formulario.
      $result = $statement -> fetch();
      //Si esto nos devuelve algún dato, significa que el usuario ya existe (y no se puede volver a hacer una cuenta).
      if ($result != false) {
        $errors .= '<li>This username already exists</li>';
      }

      $password = hash('sha512', $password);
      $password2 = hash('sha512', $password2);

      if ($password != $password2) {
        $errors .= '<li>You have not repeated your password</li>';
      }
  }
    if ($errors == '') {
      $statement = $connection -> prepare ('INSERT INTO usuarios (id, usuario, pass) VALUES (null, :user, :password)');
      $statement -> execute(array(':user' => $user, ':password' => $password));
      //Cuando ejecutamos el statement es cuando reemplazamos los placeholders de la petición a la BBDD, por los datos reales.
      header('Location: login.php');
    }
}



require 'views/signup.view.php';
?>
