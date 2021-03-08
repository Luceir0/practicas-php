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

$carla = new Person('Carla', 23, 'Mexico', 'She');
$carla -> showInfo();


$alejandra = new Person('Alejandra', 32, 'Spain', 'She');
$alejandra -> showInfo();

?>
