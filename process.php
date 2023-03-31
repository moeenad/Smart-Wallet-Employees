<?php
include('connection.php');
if(isset($_POST["register"])){
    $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
    $userName = mysqli_real_escape_string($conn,$_POST["userName"]);
    $address = mysqli_real_escape_string ($conn, $_POST["address"]);
    $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
    $mobile = mysqli_real_escape_string($conn,$_POST["mobile"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $sql = "INSERT INTO employee(firstName, lastName, userName, address, gender, mobile, password) VALUES ('$firstName', '$lastName','$userName', '$address', '$gender', '$mobile', '$password')";
    if(mysqli_query ($conn, $sql)){
        session_start();
        $_SESSION['register'] = 'Employee record created successfuly.';
        header("Location:index.php");
    }else{
        echo "there was an issue in inserting the employee";
    }
    mysqli_close($conn);
} 

if(isset($_POST["update"])){
    $id = mysqli_real_escape_string($conn,$_POST["id"]);
    $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
    $userName = mysqli_real_escape_string($conn,$_POST["userName"]);
    $address = mysqli_real_escape_string ($conn,$_POST["address"]);
    $gender = mysqli_real_escape_string($conn,$_POST["gender"]);
    $mobile = mysqli_real_escape_string($conn,$_POST["mobile"]);
    $sql = "UPDATE employee SET firstName='$firstName', lastName='$lastName', userName='$userName', address='$address', gender='$gender', mobile='$mobile' WHERE id=$id";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION['update'] = 'Employee record updated successfully.';
        header("Location:index.php");
    }else{
        echo "there was an issue updating the employee record";
    }
    mysqli_close($conn);
} 

if(isset($_POST["admin"])){
    $firstName = mysqli_real_escape_string($conn,$_POST["firstName"]);
    $lastName = mysqli_real_escape_string($conn,$_POST["lastName"]);
    $userName = mysqli_real_escape_string($conn,$_POST["userName"]);
    $role = mysqli_real_escape_string($conn,$_POST["role"]);
    $branch = mysqli_real_escape_string($conn,$_POST["branch"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $sql = "INSERT INTO users(firstName, lastName, userName, role, branch, password) VALUES ('$firstName', '$lastName','$userName', '$role', '$branch', '$password')";
    if(mysqli_query ($conn, $sql)){
        session_start();
        $_SESSION['admin'] = 'Admin record created successfuly.';
        header("Location:index.php");
    }else{
        echo "there was an issue in inserting the admin";
    }
    mysqli_close($conn);
} 
?>

