<?php

class User{
  public $name;
  protected $email;

  function __construct($name, $email){
    $this -> name = $name;
    $this -> email = $email;
  }
}

class Member extends User{
  public function showEmail(){
    return $this -> email;
  }
  //En la práctica, estamos creando un getter para acceder desde una clase hija a los datos protegidos de la clase madre.
  //No se puede acceder a ese dato desde fuera de la clase a machete. Hay que acceder desde un método de la clase.
}
$andrea = new Member('Andrea', 'andrea65464@gmail.com');
echo $andrea -> showEmail();


?>
