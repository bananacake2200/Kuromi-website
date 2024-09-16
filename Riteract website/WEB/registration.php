<?php

$db_servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "wanderlust_db";

$conn = mysqli_connect($db_servername,$db_username,$db_password,$db_name,3307);

if(mysqli_connect_error()) {
    exit('Error connection to the database' . mysqli_connect_error());
}


// pang check if yung method is post
if(!isset($_POST['username'],$_POST['email'],$_POST['pwd'])) 
{
    exit(mysqli_error($conn));
}



// pang check if merong textbox na walang laman
if( empty($_POST['username']) && empty($_POST['email']) && empty($_POST['pwd']))
{

    echo '<script> 
                 alert("Fill all the blank fields!");
                 window.location.href="LOGIN.php";
          </script>';
}
else if( empty($_POST['username']))
{
    echo '<script> 
                alert("INSERT YOUR NAME OR USERNAME");
                window.location.href="LOGIN.php";
        </script>';
}
else if( empty($_POST['email']))
{
    echo '<script> 
                alert("INSERT YOUR EMAIL ");
                window.location.href="LOGIN.php";
        </script>';
}
else if( empty($_POST['pwd']))
{
    echo '<script> 
                alert("INSERT YOUR PASSWORD ");
                window.location.href="LOGIN.php";
        </script>';
}

// pang check if existing na yung username
if($stmt = $conn->prepare('SELECT * FROM users WHERE email = ? ')) {
    $stmt->bind_param('s', $_POST['email']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {
        echo '<script>
        alert("This email already exist, try another one!");
        window.location.href="LOGIN.php";
        </script>';
    }
    else {
        if ($stmt = $conn->prepare('INSERT INTO users (name, pwd, email) VALUES (?, ?, ?)')) {
            $stmt->bind_param('sss', $_POST['username'], $_POST['pwd'], $_POST['email']);
            $stmt->execute();
            echo '<script>
                alert("Successfully Registered!");
                window.location.href="LOGIN.php";
                </script>';
        }
         else
        {
            echo mysqli_error($conn);
        }
    }
    $stmt->close(); 
}
else{
    echo 'Error Occurred';
}
$conn->close();

?>