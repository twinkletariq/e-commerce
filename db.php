<?php

$servername = "localhost";
$username = "root";
$password = "123";
$db = "onlineshop";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db,3307);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
