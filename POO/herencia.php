<?php
class Person{
  public $name;
  public $age;
  public $country;
  public $gender;


  function __construct($name, $age, $country, $gender){
    $this -> name = $name;
    $this -> age = $age;
    $this -> country = $country;
    $this -> gender = $gender;
  }

  public function showInfo(){
    echo $this -> name . ' is ' . $this -> age . ' years old. ' . $this -> gender . ' is from ' . $this -> country . '. ';
  }
}

class Student extends Person{
  //Sobreescribimos el constructor heredado, accediendo dentro de él, a lo que en java llamábamos Super():
  function __construct($name, $age, $country, $gender, $studies){
    parent:: __construct($name, $age, $country, $gender);
    //Copiamos el constructor de la clase madre, junto con la palabra clave parent::.
    $this -> studies = $studies;
    //La nueva propiedad añadida por la clase hija.
  }
}

class Worker extends Person{
  function __construct($name, $age, $country, $gender, $occupation){
    parent:: __construct($name, $age, $country, $gender);
    $this -> occupation = $occupation;
  }
}


$carla = new Student('Carla', 23, 'Mexico', 'She', 'Developer');
$carla -> showInfo();
$alejandra = new Worker('Alejandra', 32, 'Spain', 'She', 'UX Designer');
$alejandra -> showInfo();

?>
