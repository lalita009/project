

<?php


abstract class Fruit{

public $name;
function __construct($name){
$this->name=$name;

}

abstract public function intro() :string;
}

class Veg extends Fruit {
    public function intro() : string {
      return "Choose German quality! I'm an $this->name!"; 
    }
  }
  
class Name extends Fruit{

public function intro(): string {
return  "my  name is  $this->name!";
}

}

class Student extends Fruit{

public function intro(): string {

    return "your name is $this->name";

}

}

class Cat extends Fruit{

public function intro(): string{
	return "Wow $this->name";
}

}
$veg = new Veg("over");
echo $veg->intro();
echo "<br>";

$nam = new name("lalita");
echo $nam->intro();
echo"<br>";

$stud = new student("saini");
echo $stud->intro();
echo"<br>";

$cat = new Cat("smile");
echo $cat->intro();

?> 