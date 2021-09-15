<?php


$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);

if (mysqli_connect_error($conn)) {
echo"failed to connect in mysql".mysqli_connect_error();
}
?>