<?php
$id = $_GET['id'];
echo $id;
if($id){
    include('connection.php');
    $sql = "DELETE FROM employee Where id = '$id'";
    if(mysqli_query($conn, $sql)){
        session_start();
        $_SESSION['delete'] = 'Employee record deleted successfuly.';
        header("Location:index.php");
    } else {
        echo "There was an issue in deleting the employee";
    }
    mysqli_close($conn);

} else {
    echo "Employee does not exist";
}
?>