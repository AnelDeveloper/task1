<?php

session_start();

include ('includes/functions.php');

include ('connection/connection.php');

include ('admin.php');

if (isset($_POST['register'])) {

    $username = $surname = $password = $email = $cpassword = $truckname = "";

    if (!$_POST["username"]){
        $nameError = "please enter a name";
    } else {

        $username = validateFromData ( $_POST ['username']);

    }

    if (!$_POST["email"]){
        $emailError = "please enter a email";
    } else {

        $email = validateFromData ( $_POST ['email']);
        
    }

    $surname = validateFromData($_POST['surname']);
    $cpassword = validateFromData($_POST['cpassword']);
    $truckname = validateFromData($_POST['truckname']);
    $password = validateFromData($_POST['password']);

    if($username && $email ) {
        $query = "INSERT INTO register (id, username , surname, password, email, cpassword, truckname ) VALUES ('$username','$surname','$password','$email','$cpassword','$truckname')";

        $result = mysql_query($query,$conn);

        if ( $result)
        {
            header ( "location: http://localhost/kams/tableclients.php" );
        } else {
            echo "error: " . $query . "<br>" . mysqli_error( $conn);

        }

    }



}

mysqli_close($conn);









?>