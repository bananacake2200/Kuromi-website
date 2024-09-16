<?php
$Email = $_POST['Email'];
$Password = $_POST['Password'];

//database connection
$conn = new mysqli('localhost', 'root', '', 'login');
if ($conn->connect_error) {
    die('Connection Failed: ' . $conn->connect_error);
} else {
    $stmt = $conn->prepare("SELECT * FROM Login WHERE Email = ?");
    $stmt->bind_param("s", $Email);
    $stmt->execute();

    $stmt_result = $stmt->get_result();

    if ($stmt_result === false) {
        die('Error executing the query: ' . $conn->error);
    }

    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        // Use case-insensitive comparison for password
        if (strcasecmp($data["Password"], $Password) === 0) {
            echo "<h2>Login Successfully</h2>";
        } else {
            echo "<h2>Invalid Email or Password</h2>";
        }
    } else {
        echo "<h2>Invalid Email or Password</h2>";
    }

    $stmt->close();
    $conn->close();
}
?>
