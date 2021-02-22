





<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Register & login </title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/table.css">
<title>Page Title</title>
</head>
<body>

<h1>Update Account</h1>
<p></p>


<div class="updateacc">
<form action="edit.php" method="post" class="row">
<div class="form-group col-sm-6">
<label for="username">Username</label>
<input type="text" class="form-control input-lg" id="uname" name="username" value="">
<label for="surname">surname</label>
<input type="text" class="form-control input-lg" id="sname" name="surname" value="">
<label for="password">Password</label>
<input type="text" class="form-control input-lg" id="Pss" name="Password" value="">
<label for="email">Email</label>
<input type="text" class="form-control input-lg" id="email" name="email" value="">
<label for="cpassword">Confirm Password</label>
<input type="text" class="form-control input-lg" id="cpassword" name="confirmpassword" value="">
<label for="truckname">Truc Name</label>
<input type="text" class="form-control input-lg" id="truckname" name="truckname" value="">

<input type="submit" name="update" value="UPDATE DATA"/>

</form>
</div>






</body>
</html>


<?php

if(isset($_POST['update'])) {
    $id = $_POST['username'];

    include ('connection/connection.php');
    

    $query = "UPDATE register SET surname='$_POST[surname]',password='$_POST[Password]',email='$_POST[email]',confirmpassword='$_POST[confirmpassword]',truckname='$_POST[truckname]' where username='$_POST[username]'";
    $query_run = mysqli_query($conn , $query);

    if($query_run){
        echo '<scirpt type="text/javascript"> alert("Data Update") </script>';

    }
    else {
        echo '<scirpt type="text/javascript"> alert("Data not Update") </script>';
    }

    
}


?>







