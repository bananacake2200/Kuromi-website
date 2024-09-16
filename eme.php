<?php
include("connected.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>Kuromi station</title>

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
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 95%;
            background-position: center;
            background-size: cover;
            margin-top: 4%;
        }

        .col2 {
            position: center;
            width: 410px;
            height: 400px;
            background-color: #f9f7fdf6;
            border: 2px solid  #0c0c0c;
            border-radius: 20px;
            display: flex;
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

        .inputbox {
            position: relative;
            margin: 20px 0;
            width: 300px;
            border-bottom: 2px solid #0c0c0c;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #0c0c0c;
            font-size: 1em;
            pointer-events: none;
            transition: .5s;
        }

        input:focus ~ label,
        input:valid ~ label {
            top: -5px;
        }

        .inputbox input {
            width: 100%;
            height: 50px;
            background: transparent;
            border: none;
            outline: none;
            font-size: 1em;
            padding: 0 35px 0 5px;
            color: #0f0f0f;
        }

        .inputbox ion-icon {
            position: absolute;
            right: 8px;
            color: #111111;
            font-size: 1.2em;
            top: 20px;
        }

        .forget {
            margin: -10px 0 10px;
            padding-left: 15px;
            font-size: .9em;
            color: #0f0f0f;
            display: flex;
            justify-content: space between;
        }

        .forget label input {
            margin-right: 5px;
        }

        .forget label a {
            color: #0c0c0c;
            text-decoration: none;
            padding-left: 50px;
        }

        .forget label a:hover {
            text-decoration: underline;
        }

        #button2 {
            width: 100%;
            height: 35px;
            border-radius: 40px;
            background: #131213;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: 300;
            border-color: #fff;
            padding: 10px 20px;
            color: aliceblue;
        }

        #button2:hover {
            background-color: pink;
            color: black;
        }

        .register {
            font-size: .9em;
            color: #0a0a0a;
            text-align: center;
            margin: 25px 0 10px;
        }

        .register p a {
            text-decoration: none;
            color: #0a0a0a;
            font-weight: 600;
            padding-left: 2%;
        }

        .register p a:hover {
            text-decoration: underline;
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
        <div class="col2">
            <form id="loginForm" action="loginn.php" method="POST" name="loginForm">

                <h2>Login</h2>
                            <?php
                if(isset($error)){
                    foreach($error as $error){
                        echo '<span class="error-msg">'.$error.'</span>';
                    };
                };
                ?>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" id="email" class="email" name="Email"> 
                    <label for="email">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" id="password" class="password" name="Password">
                    <label for="password">Password</label>
                </div>
                <div class="forget">
                    <label for=""><input type="checkbox">Remember Me  <a href="#">Forgot Password</a></label>
                </div>
                <button type="Submit" id="button2" value="Login" name="submit" onclick="direct()">Login</button>
                <div class="register">
                    <p><b>Don't have an account?</b><a href="signup.php">Sign up here</a></p>
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
