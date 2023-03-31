<?php
$dbname = "smart";
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
if(!$conn) {
    echo "Connection Failur";
} 
?>