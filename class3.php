<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
$('.formsubmit').click(function(){

var name = $('#name').val();
var email = $('#email;').val();

$('.outputname').html(name);
$('.outputemail').html(email);

  });

$('#name').keyup(function(){
var name = $('#name').val();
$('.outputname').html(name);

});
$('#email').keyup(function(){
var email = $('#email').val();
$('.outputemail').html(email);

});
});
</script>

</head>
<body>
	<div>
	<span>Name:</span>
<input type="text" name="name" id="name" placeholder="name"><br>
	<span>Email:</span>
<input type="text" name="email" id = "email" placeholder="email"><br><br>

<button class="formsubmit">submit</button>
</div>
<div>
	
Name: <span class="outputname">Your name</span><br>
email: <span class="outputemail">Your email</span>

</div>

</body>
</html>
