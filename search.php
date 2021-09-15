
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

$conn = mysqli_connect($servername, $username, $password, $database);
if (mysqli_connect_error($conn)) {
echo"failed to connect in mysql".mysqli_connect_error();
}
$show= $_POST['id'];
$fetch= mysqli_query($conn, "SELECT * FROM employee WHERE email='$show'");

$row = mysqli_num_rows($fetch);

if($row){
$data = mysqli_fetch_assoc($fetch);
	echo '<br><br><table border="1">
	<tr>

<th>FIRSTNAME</th>
<th>LASTNAME</th>
<th>EMAIL</th>
<th>ADDRESS</th>

	</tr>
	<tr>
		<td>'.$data['fname'].'</td>
		<td>'.$data['lname'].'</td>
		<td>'.$data['email'].'</td>
		<td>'.$data['address'].'</td>

	</tr>
	</table>';

}else{
	echo "No data found";
}



?>