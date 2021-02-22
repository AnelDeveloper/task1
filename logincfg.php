



<?php
session_start();

include ('connection/connection.php');

if ($_POST ) {



$email = $_POST['email'];
$password = $_POST['password'];

$query = "SELECT * FROM register WHERE email='$email' and password='$password'";


$result=mysqli_query($conn, $query);

if( mysqli_num_rows($result) > 0 ) {


   
    header('location: http://localhost/kams/admin.php');


}

else {
    echo 'wrong email or password';
}



}



    

?>