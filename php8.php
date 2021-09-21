<!DOCTYPE html>
<html>
<body>

<?php
class pi {
  public static $value=3.14159;
}

class Cat extends pi {
  public function catStatic() {
    return parent::$value;
  } 
}

// Get value of static property directly via child class
echo Cat::$value;
echo"<br>";

// Get value of static property via xStatic() method
$x = new Cat();
echo $x->catStatic();
?>
 
</body>
</html>
