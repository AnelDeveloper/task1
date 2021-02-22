<?php

include_once 'connection/connection.php';

// funkcija koja validejta datu
if ( isset($_POST['register'])) {

session_start();
$username = $_POST['username'];
$surname = $_POST['surname'];
$password = $_POST['password'];
$email = $_POST['email'];
$confirmpass = $_POST['confirmpassword'];
$truckname = $_POST['truckname'];

if ($password == $confirmpass ) {

$sql = "INSERT INTO register ( username, surname , password , email, confirmpassword, truckname ) VALUES ( '$username' , '$surname' , '$password' ,'$email' , '$confirmpass' , '$truckname')";

if (mysqli_query($conn , $sql )) {
    echo header('Location: http://localhost/kams/admin.php');

} else {

    $confirmError = "<script>alert('you must enter your confirm')</script>";

}






}


}
?>
