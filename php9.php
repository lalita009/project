<?php
namespace Html;
class Table {
public $fname;
public $lname;

function message(){
echo"my firstname name is {$this->fname} and my last name is {$this->lname}";
}
}
$table=new Table();
$table->fname="Lalita";
$table->lname ="Saini";
?>
<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>

