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

include ('registerforpage.php')


?>








<div class="registerpage">
  <br><br><br><br>
  <div id="box">

    <br><br>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"  method="post">
    <h1 id="txt">Register</h1>

<small> <?php echo $userError ?></smnall>
<input placeholder="Username" type="text" name="username" id="username"></input>
<br><br>
<small> <?php echo $passError ?></smnall>
<input placeholder="Password" type="password"  name="password" id="password"  ></input>
<br><br>
<small> <?php echo $emailError ?></smnall>
<input placeholder="email" type="email"  name="email" id="e-mail"  ></input>
<br><br>
<h2> <?php echo $confirmError ?></h2>
<input placeholder="confirmpassword" type="confirmpassword"  name="confirmpassword" id="confirmpassword"  ></input>
<br><br>





<br><br><br>

<input type="submit"  name="registerforpage" id="button" value="Register">

  </div>
  </div>
</form>


</body>

</html>