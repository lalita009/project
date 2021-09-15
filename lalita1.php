<?php

class Player{

public $name;
public $color;


function set_name($name,$color){
$this->name=$name;
$this->color=$color;
}

function get_name(){

return $this->name;

}
}


$obj=new Player();
$obj->set_name(lalita,red);
echo $obj->get_name();

?>