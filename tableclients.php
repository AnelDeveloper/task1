























<!DOCTYPE html>

<html>
<head>
<link rel="stylesheet" type="text/css"
href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<title>Add Client </title>
<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
<link rel="stylesheet" type="text/css" href="css/table.css">





</head>

<body>
<div class="tableedit">
<table border="2">

<tr>
<th>id</th>
<th>username</th>
<th>email</th>
<th>Operation</th>
</tr>









<?php

include ('connection/connection.php');
error_reporting(0);


$query = "SELECT * FROM register ";
$data = mysqli_query($conn , $query);
$total = mysqli_num_rows($data);


if ($total!=0){
    while ($result = mysqli_fetch_assoc($data)){
        echo "
        <tr>
        <td>".$result['id']."</td>
        <td>".$result['username']."</td>
        <td>".$result['email']."</td>
        <td><a href='delete.php?delete=$result[id]'>Delete</td>
        </tr>";
    }
}
else {
    echo "No Record Found";
}






?>

</div>



</body>

</head>