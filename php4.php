<!-- <!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  public function prefixName($name) {
    if ($name == "John Doe") {
      $prefix = "Mr.";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs.";
    } else {
      $prefix = "";
    }
    return "{$prefix} {$name}";
  }
}

class Child extends ParentClass {
    public function prefixName($name) {
      if ($name!= "Anu") {
        $var = "Mr.";
      } elseif ($name=="Anu") {
        $var = "not found is";
      } 
      return "{$var} {$name}";
    }
  }
$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>"; 
echo $class->prefixName("John Doe");
echo "<br>"; 

$child = new Child();
echo $child->prefixName("Anu");
echo "<br>"; 
echo $child->prefixName("saini");


?>
 
</body>
</html> -->









<!-- 
<!DOCTYPE html>
<html>
<body>

<?php
abstract class ParentClass {
  // Abstract method with an argument
  abstract protected function prefixName($name);
}

class ChildClass extends ParentClass {
  // The child class may define optional arguments that is not in the parent's abstract method
  public function prefixName($name, $separator = ".", $greet = "Dear") {
    if ($name == "John Doe") {
      $prefix = "Mr";
    } elseif ($name == "Jane Doe") {
      $prefix = "Mrs";
    } else {
      $prefix = "";
    }
    return "{$greet} {$prefix}{$separator} {$name}";
  }
}

$class = new ChildClass;
echo $class->prefixName("John Doe");
echo "<br>";  
echo $class->prefixName("Jane Doe");
?>
 
</body>
</html> -->
