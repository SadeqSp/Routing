<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "_test";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error()."<br>");} 
else {echo "Connected successfully<br>";}