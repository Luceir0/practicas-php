<?php

class Person {
  public static $day = 'March, 8';

  public static function greet($name = null){
    if($name){
      return 'Hello, have a great day, ' . $name . '!';
    }else{
      return 'Hello, have a great day!';
    }
  }
}

echo Person::$day;
echo '</br>';
echo Person::greet('Ana');
//Estamos tirando de la forma estática del método.
echo '</br>';

$ana = new Person;
echo $ana -> greet('Ana');
//Estamos accediendo al método desde una instancia de la clase. Ambas maneras funcionan.

//Podríamos acceder a los métodos de igual manera sin instanciar la clase y sin la palabra static, pero es buena práctica usar la palabra clave.
?>
