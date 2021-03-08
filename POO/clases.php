<?php

class Person{
  public $name;
  public $age;
  public $country;

  public function showInfo(){
    echo 'Hello World' . '</br>';
  }
}

$carlos = new Person;
$carlos -> name = 'Carlos';
$carlos -> age = 23;
$carlos -> country = 'Mexico';
$carlos -> showInfo();
echo $carlos -> name . ' is ' . $carlos -> age . ' years old.';

$alejandro = new Person;
$alejandro -> name = 'Alejandro';
$alejandro -> age = 23;
$alejandro -> country = 'Spain';

?>
