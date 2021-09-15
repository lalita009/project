<?php



$arr = [23,688 ,77,98,23,67,44,89,768,10000,50,6657,567,234];
$count=count($arr);
//$sum =0;

for ($i=0; $i < count($arr); $i++) { 
  if ($arr[$i] % 2 == 0) {
 echo "even\n";
  }
  else {
    echo "odd\n";
  }

    echo "Index ", $i, ", value ", $arr[$i],"<br>";

   }

// echo"odd numbers ".$odd ." even numbers ".$even;

   
?>


// $arr = [711,68 ,77,99,23,67,44,89,768,10000,50,6657,567,234];
// $count=count($arr);
// //$sum =0;
// $min = $arr[0];

// for($i=0;$i<$count;$i++){
//     // if ($min>$arr[$i])
//     // $min=$arr[$i];
// $sum+=$arr[$i];

// }
// dd($arr); 

// }


// $arr = [23,688 ,77,99,23,67,44,89,768,10000,50,6657,567,234];
// $count=count($arr);
// //$sum =0;
// for ($i = 0; $i < $count; $i++) {
//     for ($j = $i + 1; $j < $count; $j++) {   
//         if ($arr[$i] > $arr[$j]) {
//             $x = $arr[$i];
//             $arr[$i] = $arr[$j];
//             $arr[$j] = $x;
// }
// }
// }
// dd($arr); 



