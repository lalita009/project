<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_error($conn)) {
echo"failed to connect in mysql".mysqli_connect_error();
}

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email =  $_POST['email'];
$address = $_POST['address'];

$data= mysqli_query($conn, "SELECT * FROM employee WHERE email='$email'");
$d=mysqli_num_rows($data);
if($d){
	echo "<h1>email id already exist...!</h1>";

}else{
	$result = mysqli_query($conn, "INSERT INTO `employee` (`id`, `fname`, `lname`, `email`, `address`) VALUES ('', '$fname', '$lname', '$email', '$address')");

 if($result){
 	echo '<h1>saved.....!</h1>';
 }else{
 	echo '<h1>something went wrong....Please try again </h1>';
	
 }   
}



 

?>