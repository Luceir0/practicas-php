<?php

abstract class Person{
  public function greet(){
    return 'Hello!';
  }
}

class Student extends Person{
}

$lidia = new Student();
echo $lidia -> greet();

?>
