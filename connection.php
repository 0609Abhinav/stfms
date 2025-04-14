<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "stfms";
$port=3307;

$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname,$port);

if (!$conn){
    echo "Connection Failed!";
}

?>