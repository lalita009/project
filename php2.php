<!-- <!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
}

echo Goodbye::LEAVING_MESSAGE;
?>

</body>
</html> -->

<!DOCTYPE html>
<html>
<body>

<?php
class Goodbye {
  const LEAVING_MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::LEAVING_MESSAGE;
  }
}

$goodbye = new Goodbye();
$goodbye->byebye();
?>

</body>
</html> 





<!-- 
<?php
class Set{

const MESSAGE = "I am lalita saini";
public function get_value(){
echo self::MESSAGE;
}

    }
    
    $set = new Set();
    $set->get_value();
    
    ?>  -->
    
<!-- 
    <?php
class Set{

const MESSAGE = "I am lalita saini";
}
echo Set::MESSAGE;

?>    
-->
<!--      
<!DOCTYPE html>
<html>
<body>

<?php
class Good {
  const MESSAGE = "Thank you for visiting W3Schools.com!";
  public function byebye() {
    echo self::MESSAGE;
  }
}

$good = new Good();
$good->byebye();
?>

</body>
</html> 
 -->
