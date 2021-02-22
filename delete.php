









<?php

include_once "connection/connection.php";

$id=$_GET['delete'];
$query = "DELETE FROM register WHERE id = '$id'";

$data = mysqli_query($conn,$query);

if ($data)
{
    echo "Record Deleted From Table";

} 
else { 
    echo "<font color='red;> Failed to delete record from base";
}

?>
