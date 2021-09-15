<?php

include'db.php';



if(isset($_REQUEST['name'])){
$name = $_POST['name'];
$email =  $_POST['email'];
$password = $_POST['password'];
$address = $_POST['address'];
$phonenum = $_POST['phonenum'];

$sql= "INSERT INTO `contact` (`id`, `name`, `email`, `password`,  `address`, `phonenum`) VALUES ('', '$name', '$email', '$password', '$address', '$phonenum')";

$res=mysqli_query($conn,$sql);

 if($res){

header("Location: http://localhost/test/clist.php");
//1header("Location: C:\xampp\htdocs\test\clist.php");


 }else{
 	echo '<h1>something went wrong....Please try again </h1>';
 }   
}
//header("Location: C:\xampp\htdocs\test\clist.php");
?>