<?php 
include("connection.php");

if(isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $sql = "SELECT * FROM signup WHERE username='$username'";
    $result = mysqli_query($conn, $sql);
    $count_username = mysqli_num_rows($result);

    $sql = "SELECT * FROM signup WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $count_email = mysqli_num_rows($result);

    if($count_username == 0 && $count_email == 0){  
        if($password == $cpassword){
            // No password hashing, storing the password as plain text
            $sql = "INSERT INTO signup(username, email, password) VALUES('$username','$email','$password')";
            $result = mysqli_query($conn, $sql);
            if($result){
                echo '<script>
                    alert("Account created successfully!");
                    window.location.href="krukru.php";
                </script>';
                exit();
            }
        }
    } else {
        if($count_username > 0){
            echo '<script>
            window.location.href="signup.php";
            alert("Username already exists!");
            </script>';
            exit();
        }
        if($count_email > 0){
            echo '<script>
            window.location.href="signup.php";
            alert("Email already exists!");
            </script>';
            exit();
        }
    }
}
?>
