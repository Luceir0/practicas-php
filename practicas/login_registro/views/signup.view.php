<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no,
    initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Slab:wght@500&display=swap" rel="stylesheet">
    <title>Sign Up!</title>
  </head>
  <body>
    <div class="container">
      <h1 class="title">Sign up!</h1>
      <hr class="border">

      <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="form" name="login">
        <div class="form-group">
          <i class="icon left fa fa-user"></i><input type="text" name="user" class="user" placeholder="User:"/>
        </div>

        <div class="form-group">
          <i class="icon left fa fa-lock"></i><input type="password" name="password" class="password" placeholder="Password:"/>
        </div>

        <div class="form-group">
          <i class="icon left fa fa-user"></i><input type="password" name="password2" class="password_btn" placeholder="Repeat your password:"/>
          <i class="submit-btn fa fa-arrow-right" onclick="login.submit()"></i>
          <!-- Este login del onclick es el name del form que habíamos puesto arriba. Estamos "creando" un botón con js, sin que lo sea realmente. -->
        </div>
      </form>
      <p class="text-signup">
        Do you already have an account?
        <a href="login.php">Sign in</a>
      </p>
    </div>
  </body>
</html>
