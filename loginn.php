<?php
include("connected.php");
session_start();
if(isset($_POST['submit'])){
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    $sql = "select * from signup where email = '$email' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("Location: products.php");
        exit();
    }
    else{
        $error[] = 'incorrect email or password!';
    }
}

?>