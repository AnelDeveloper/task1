<?php

$server = "localhost";
$username = "root";
$password = "";
$db = "kams";


$conn = mysqli_connect( $server, $username, $password, $db);

if (!$conn) {
    die ( "Error connecting to" .mysqli_connect_error() );

}








?>


