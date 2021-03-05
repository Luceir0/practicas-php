<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Contact Form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Abel&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="estilos.css">
  </head>
  <body>
    <div class="wrap">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="text"
          class="form-control"
          id="name"
          name="name"
          placeholder="Write your name here:"
          value="<?php if(!$sent && isset($name))echo $name?>">
        <input type="text"
          class="form-control"
          id="email" name="email"
          placeholder="And here, your email:"
          value="<?php if(!$sent && isset($email))echo $email?>">
        <textarea name="message" class="form-control" id="menssage" placeholder="Now you can write your message:"><?php if(!$sent && isset($message))echo $message?></textarea>
        <!--
        <div class="alert error">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        <div class="alert success">
          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
        </div>
        -->
        <?php if (!empty($errors)): ?>
          <div class="alert error">
            <?php echo $errors; ?>
          </div>
        <?php elseif($sent): ?>
          <div class="alert success">
            <p>Your request was sent correctly</p>
          </div>
        <?php endif ?>
        <input type="submit" name="submit" class="btn" value="Send it!">
      </form>
    </div>
  </body>
</html>
