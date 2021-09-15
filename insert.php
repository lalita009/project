<!DOCTYPE html>
<html>
<body>

<h2>Text input fields</h2>



  <label>First name:</label><br>
  <input type="text" id="fname" name="fname" ><br>


  <label>Last name:</label><br>
  <input type="text" id="lname" name="lname" ><br>


  <label">Email:</label><br>
  <input type="email" id="email" name="email" ><br>


  <label>Address:</label><br>
  <input type="text" id="address" name="address" ><br>

    <button  id="submit">submit</button><br><br>
<div id="ffname"></div><br><br>


<label>Search the Employee:</label><br>
<input type="search" id="site-search" name="show"
       aria-label="Search through site content">

<button id="sbtn">Search</button>


​<div id="show"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$('#submit').click(function(){

	var firstname = $('#fname').val();
	var lastname = $('#lname').val();
	var email = $('#email').val();
	var address = $('#address').val();

 $.ajax({
		url: "connect.php", 
		data: 'fname='+ firstname +"&lname="+lastname +"&email="+email +"&address="+address,
		type: "POST",
		success: function(e){
			   //document.getElementById("ffname").innerHTML = e;
  $( "#ffname" ).html(e);

  }
});
});

$('#sbtn').click(function(){
	var id = $('#site-search').val();
    //aslert(id);


$.ajax({
		url: "search.php", 
		data: 'id='+id,
		type: "post",
		success: function(a){
 $( "#show" ).html(a);

} 

});
});














</script>

</body>
</html>
