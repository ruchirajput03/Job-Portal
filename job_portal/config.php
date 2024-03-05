<?php

$server = 'localhost';
$username = 'Anni';
$password = '';
$database = 'Jobs';

$conn = mysqli_connect($server, $username, $password, $database);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);

}
echo "";
?>

