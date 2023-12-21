<?php
$server = "localhost";
$user = "root";
$db_password = "";
$db_name = "musewords";

try{
    $conn = mysqli_connect($server, $user, $db_password, $db_name);
    if($conn){
        //echo"You are connected.";
    }
} catch(mysqli_sql_exception){
    echo "<script>alert('You are not connected.');</script>";
    echo "<script>window.location.href = 'index.html';</script>";
}

?>