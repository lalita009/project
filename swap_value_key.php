<?php
$array= ['0'=>['name'=>'additional_settings__active_tab_page', 'value'=>'edit-submission'],
'1'=>['name'=>'admin_menu_tweak_modules', 'value'=>'1'], '2'=>['name'=>'admin_menu_tweak_permissions', 'value'=>'1']];	


foreach($array as $x => $value)
    {

foreach($value as $arr => $val) {
  echo "$arr = $val<br>";

} 



// <?php


//  $result = db_select('variable', 'c')
//   ->fields('c')
//   ->execute()
//   ->fetchAll();
// //   echo"<pre>";
// //  print_r($result[0]->name);die;
// var_export($result);

// foreach($result as $x =>$value){


// 	foreach($value as $arr => $val){
	
// 	echo "$arr = $val<br>";
	
// 	}
	
// 	}
	
	
	
// 	$size = count($result);
	
// 	for($i = 0; $i < $size; $i++)
// 	{
// 	  $dummy[$result[$i]->name] = $result[$i]->value;
// 	}




?>
