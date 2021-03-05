<?php

$errors = '';
$sent = '';

if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  if (!empty($name)) {
    $name = trim($name);
    $name = filter_var($name, FILTER_SANITIZE_STRING);
  } else {
    $errors .= 'Please, write your name </br>';
  }

  if (!empty($email)) {
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);

    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
      $errors .= "It seems that your email isn't valid :( </br>";
    }
  } else {
    $errors .= 'Sorry but we need to know your email </br>';
  }

  if (!empty($message)) {
    $message = htmlspecialchars($message);
    $message = trim($message);
    $message = stripslashes($message);
  } else {
    $errors .= 'Oops, you forgot to write your message </br>';
  }

  if (!$errors) {
    $send_to = 'anemail@adirection.com';
    $issue = 'Email sent from mypage.com';
    $built_message = "De: $name \n";
    $built_message .= "Email: $email \n";
    $built_message .= "Message: " . $message;

    //mail($send_to, $issue, $built_message);
    $sent = 'true';
  }

}

require 'index.view.php';
?>
