<!DOCTYPE html>
<html>
<body>

<?php
interface Animal {
  public function makeSound();
}

class Cat implements Animal {
  public function makeSound() {
    echo "Wow";
  }
}

class Cow implements Animal {
    public function makeSound() {
      echo "I am  lalita saini ";
    }
  }

$cat = new Cat();
$cow = new Cow();
$animal =array($cat, $cow);
foreach($animal as $all){

	$all->makeSound();
}

?>
 
</body>
</html>
