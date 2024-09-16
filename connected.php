<?php
$servername = "localhost";
$email = "root";
$password = "";
$dbname = "signup";

// Create a new mysqli object
$conn = new mysqli($servername, $email, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "";
?>
<?