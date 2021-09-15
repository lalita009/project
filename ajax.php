<!DOCTYPE html>
<html>
<body>
<h2>Text input fields</h2>
​

  <label for="fname">First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>
  <label for="lname">Last name:</label><br>
  <input type="text" id="lname" name="lname">
  <button  id="submit">submit</button>

​<div id="ffname"></div>
<div id="llname"></div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
	// function show(){
	
	// var firstname = document.getElementById('fname');
	// var lastname = document.getElementById('lname');

 //  document.getElementById("ffname").innerHTML = firstname.value;
 //  document.getElementById("llname").innerHTML = lastname.value;



	// }
$('#submit').click(function(){

	var firstname = $('#fname').val();
	var lastname = $('#lname').val();
	
	$.ajax({
		url: "demo.php", 
		data: 'fname='+ firstname +"&lname="+lastname,
		type: "POST",
		success: function(e){
			   //document.getElementById("ffname").innerHTML = e;
    $( "#ffname" ).html(e);

  }
	});
});
</script>
</body>
</html>
​


