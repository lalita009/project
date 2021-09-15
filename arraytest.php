
<?php

$demo=[];

$arr=["spider-man" => ["name" => "Peter Parker", "email" => "peterparker@mail.com",],
    "super-man" => ["name" => "Clark Kent", "email" => "clarkkent@mail.com",],
      
        "iron-man" =>[ "name" => "Harry Potter", "email" => "harrypotter@mail.com",]   
];

$keys=array_keys($arr);

for($i=0; $i < count($arr); $i++){
    echo $keys[$i] . "{<br>";


foreach ($arr[$keys[$i]] as $key => $val) {
        echo $key . " : " . $val . "<br>";
}

  echo "}<br>";
}




?>
