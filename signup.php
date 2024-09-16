<?php
include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Registration Form</title>

    <style>
        header {
            font-family: 'Trebuchet MS';
            font-style: normal;
            font-size: 15px;
            color: #f6f0f7;
            padding-top: 20px;
            position: relative;
          
        }

        body {
            margin: 0px;
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(img/cute.jpg);
            backdrop-filter: blur(5px);
        }

.container {
    position: center;
            width: 410px;
            height: 550px;
            background-color: #f9f7fdf6;
            border: 2px solid  #0c0c0c;
            border-radius: 20px;
            justify-content: center;
            align-items: center;
            margin: 5%;
            margin-left: 35%;
           padding: 10px;

}

    h2 {
            font-size: 2em;
            color: #0c0c0c;
            text-align: center;
        }

form {
    display: flex;
    flex-direction: column;
    margin-top:10%;
    padding: 5px;
}

label, input {
    margin: 10px 0;
    color: black;
    font-weight: 600;
    font-size: 15px;

}

input {
    padding: 5px;
    border: 1px solid rgb(10, 10, 10);
    border-radius: 3px;
}

.sign {
    background-color: black;
    color: white;
    border: none;
    border-radius: 25px;
    padding: 7px;
    cursor: pointer;
    font-size: 20px;
    margin: 5%;
}
.sign:hover{            
    color: black;
    background-color: pink;
    border: 1px solid black;
}
.logo2{
            position: absolute;
            left: 2%;
            border: 2px solid whitesmoke;
            border-radius: 100px;
            margin:15px;
        }

    </style>
</head>
<body>

   <header>
         <img src="img/bleh.jpg" width="115" height="115" class="logo2"></h1>
    </header>

    <div class="container">
        <h2>Sign up Form</h2>
        <form name="form" method="POST" action="signupp.php" id="registrationForm">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirm Password:</label>
            <input type="password" id="cpassword" name="cpassword" required>

            <button type="submit" class="sign" onclick="direct()" id="sign" value="SignUp" name="submit">Register</button>
        </form>
    </div>

</body>
</html>
