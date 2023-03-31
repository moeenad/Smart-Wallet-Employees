<?php
$dbname = "smart";
$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "root";
$conn = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);
$sql = "CREATE TABLE employee(id int AUTO_INCREMENT PRIMARY KEY, firstName varchar(30), lastName varchar(30), userName varchar(200), address varchar(200), gender varchar(6), mobile varchar(15), password varchar(30))";
if(!$conn) {
    echo "Connection Failur";
} else {
    echo "Connection Successful";
    if (mysqli_query($conn, $sql)) {
        echo "Table employee created successfully";
    } else {
        echo "There was an error creating a table";
    }
}
musqli_close($conn);
?>
