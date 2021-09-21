<!-- 
 
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
  $("p").click(function(){
    $(this).hide();
  });
});
</script>
</head>
<body>
​
<p>If you click on me, I will disappear.</p>
<p>Click me away!</p>
<p>Click me too!</p>
​
</body>
</html>
​ -->

<!-- 
 
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>




$(document).ready(function(){
  $(".hide").click(function(){
    $("div").hide();
  });

  $(".show").click(function(){
    $("div").show();
  });
});
</script>
</head>
<body>
<div>
<div style="height:300px;width:50%;background-color:#93ff498f;float:left;margin-top:15px;border: 3px solid black;text-align: center;
 border-radius: 20px;padding: 1%;" >
    
hello everyone
</div>
</div>
​​<button class="hide">hide</button>
​​<button class="show">show</button>

</body>
</html>
​ -->


<!-- 
 
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
//  $(".div").mouseenter(function (){
    // $(".div").mouseleave(function (){
        // $(".div").mousedown(function (){
            // $(".div").mouseup(function (){
$(".div").hover(function (){

alert("entered number");

 });
});
</script>
</head>
<body>
<div class="div">
hello everyone
</div>
​​
</body>
</html>
​ -->




 
<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
$("input").focus(function (){
$(this).css("background-color","yellow")

 });
 
$("input").blur(function(){
$(this).css("background-color","red")

});

});
</script>
</head>
<body>

Name: <input type="text" name="fullname"><br>
Email: <input type="text" name="email">

</body>
</html>
​