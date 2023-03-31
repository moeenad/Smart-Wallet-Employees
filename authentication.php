<?php
include ('connection.php');
if(isset($_POST["login"])) {
    $username = stripcslashes($_POST["userName"]);
    $password = stripcslashes($_POST["password"]);
    $username = mysqli_real_escape_string($conn, $username);
    $password = mysqli_real_escape_string($conn, $password);
    $sql = "SELECT * FROM users WHERE userName='$username' and password='$password'";
    $resultSet = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($resultSet);
	if($count == 1){
        session_start();
        $_SESSION['update'] = 'Admin logged in successfully.';
		header('Location:index.php');
	} else {
		header('Location:login.php');
	}
} else {
	echo "user is not authenticated";
}
?>