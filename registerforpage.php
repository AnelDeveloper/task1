<?php


include_once 'connection/connection.php';

session_start();




$userError = $passError = $emailError = $confirmError = "";
$username = $password = $email = $cpassword = "";


if(isset($_POST['registerforpage'])) {
    function validateFormData ($formData) {
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;

    }

    if ( !$_POST['username']) {
        $userError ="Please enter your username";
 
    } else {
        $username = validateFormData($_POST['username']);
 
    }

    if ( !$_POST['password']) {
        $passError ="Please enter your pass";
 
    } else {
        $password = validateFormData($_POST['password']);
 
    }

   if ( !$_POST['email']) {
       $emailError =" please enter your email";

   } else {
       $email = validateFormData($_POST['email']);

   }

   if ( !$_POST['confirmpassword']) {
    $confirmError ="Please enter your pass";

} else {
    $cpassword = validateFormData($_POST['confirmpassword']);

}






 if ( $username && $password && $email && $cpassword ) {

    if ($password == $cpassword ) {
        
        
   

    $query = "INSERT INTO register ( username, password , email, confirmpassword ) VALUES ( '$username' , '$password' , '$email', '$cpassword')";

if (mysqli_query($conn , $query )) {
    echo header('Location: http://localhost/kams/login.php');

} else {

    echo "<script>alert('Your new password does not match password confirm!')</script>";

}

}















}
















}














?>