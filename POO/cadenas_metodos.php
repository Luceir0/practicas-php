<?php

class User{
  public $name;
  public $email;

  function __construct($name, $email){
    $this -> name = $name;
    $this -> email = $email;
  }

  public function showName(){
    echo 'Your name is: ' . $this -> name . '</br>';
    return $this;
  }

  public function showEmail(){
    echo 'Yout email is: ' . $this -> email . '</br>';
    return $this;
  }
}

$emma = new User('Emma', 'emma5767@gmail.com');
$emma -> showName();
$emma -> showEmail();
//Estos accesos a los dos métodos se podrían hacer de igual manera así:
$emma -> showName() -> showEmail();

//Para ello, necesitan el return $this (no entendí muy bien su uso. Preguntar a Javi).
?>
