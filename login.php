<?php

if(isset($_SESSION["email"])){
  header ("Location: naslov.php");
}


?>






<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Register & login </title>
<link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>


<?php

include ('logincfg.php')





?>
<div class="loginb">
  <br><br><br><br>
  <div id="box">

    <br><br>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1 id="txt">Log-in</h1>

    
<br><br>
<!--<small> <?php echo $error ?></smnall>-->
<input placeholder="Email" type="text"  name="email" id="e-mail"></input>
<br> <br>
<!--<small> //<?php echo $error ?></smnall> -->
<input placeholder="Password" type="password"  name="password" id="pass" autofill="false" ></input>


<br><br><br>

<button name="loginB" id="button">Login</button>
<a href="naslov.php" type="button">

  </div>
  </div>
</form>
</body>



</html>


<script>
$(document).ready(function(){
 $('#loginB').click(function(){
  var username = $('#email').val();
  var password = $('#password').val();
  if($.trim(email).length > 0 && $.trim(password).length > 0)
  {
   $.ajax({
    url:"logincfg.php",
    method:"POST",
    data:{email:email, password:password},
    cache:false,
    beforeSend:function(){
     $('#loginB').val("connecting...");
    },
    success:function(data)
    {
     if(data)
     {
      $("body").load("naslov.php").hide().fadeIn(1500);
     }
     else
     {
      var options = {
       distance: '40',
       direction:'left',
       times:'3'
      }
      $("#box").effect("shake", options, 800);
      $('#loginB').val("LoginB");
      $('#error').html("<span class='text-danger'>Invalid username or Password</span>");
     }
    }
   });
  }
  else
  {

  }
 });
});
</script>


