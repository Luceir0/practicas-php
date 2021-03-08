<?php

class Person{
  public $name;
  public $age;
  public $country;
  public $gender;

  public function showInfo(){
    echo $this -> name . ' is ' . $this -> age . ' years old. ' . $this -> gender . ' is from ' . $this -> country . '. ';
  }
}

$carla = new Person;
$carla -> name = 'Carla';
$carla -> age = 23;
$carla -> country = 'Mexico';
$carla -> gender = 'She';
$carla -> showInfo();


$alejandra = new Person;
$alejandra -> name = 'Alejandra';
$alejandra -> age = 32;
$alejandra -> country = 'Spain';
$alejandra -> gender = 'She';
$alejandra -> showInfo();

 ?>
