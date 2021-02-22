



<?php
session_start();




$emailError = $passwordError = "";
$email = $password = "";


if(isset($_POST['loginB'])) {
    function validateFormData ($formData) {
        $formData = trim(stripslashes(htmlspecialchars($formData)));
        return $formData;

    }

   if ( !$_POST['email']) {
       $emailError =" please enter your email";

   } else {
       $email = validateFormData($_POST['email']);

   }
   if ( !$_POST['password']) {
       $passwordError ="Please enter your pass";

   } else {
       $password = validateFormData($_POST['password']);

   }

 if ( $email && $password ) {

    $query = "INSERT INTO login ( email, password ) VALUES ( '$email', '$password')";

if (mysqli_query($conn , $query )) {
    echo header('Location: http://localhost/kams/naslov.php');

} else {
    echo "Error : ". $query . "<br>" . mysqli_error ($conn);

}



}



}


$hashedpassword = '$2y$10$Ii8qh39he5yoMyE9TWCzr.V/rY6.UnXWOjIw1zznAw6.fLBmxYSay$2y$10$Ii8qh39he5yoMyE9TWCzr.V/rY6.UnXWOjIw1zznAw6.fLBmxYSay';


 // if ( isset ($_POST['loginB'] ) ) {
    // if ( password_verify($_POST['password'], $hashedpassword)) {
      //  echo "inccorect";
    //} else {
     //   echo "good";

  //  }

//} 




?>