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
            padding: 0px;
            padding-top: 5px;
            position: relative;
            bottom: 20px;
            background-image: url(img/pastel.jpg);
        }

        body {
            margin: 0px;
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(img/cute.jpg);
            
        }

        .new {
            color: rgb(3, 3, 3);
            font-size: 25px;
            padding-top: 5px;
            font-family: 'Courier New', Courier, monospace;
           
            
        }
        .nav {
            display: flex;
            align-items: center;
            padding: 3px 0;
            padding-left: 25%;
            margin-bottom: 0%;
            background-color: white;
            border-top: 1px solid black;
            border-bottom: 1px solid black;
        }

        .nav a {
            float: left;
            text-decoration: none;
            color: black;
            padding: 9px 30px;
            font-size: 20px;
            font-weight: 600;
           
        }

        .nav a:hover {
            background-color: rgb(136, 119, 119);
            transition: .5s;
        }

        .logo {
            width: 200px;
            height: 100px;
            position: relative;
            left: 40%;
            top: 40px;
            padding-bottom: 20px;
        }
        .logo2{
            position: absolute;
            left: 2%;
            border: 2px solid whitesmoke;
            border-radius: 100px;
            margin:15px;
        }
        .form {
            position: center;
            width: 1000px;
            height: 400px;
            background: whitesmoke;
            border: 2px solid rgba(8, 8, 8, 0.5);
            border-radius: 5px;
            display: flex;
            align-items: center;
            margin-left: 13%;
            padding-left: 3%;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        h2 {
            font-size: 35px;
            font-weight: 600;
            color: #0e0d0d;
            
        }
        p{
            font-size: 20px;
            font-weight: 300;
            color: #0e0d0d;
            margin-bottom: 10%;
        }

        #button2 {
            width: 70%;
            height: 40px;
            border-radius: 40px;
            background: #111111;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 20px;
            font-weight: 300;
            border-color: #fff;
            padding: 10px 100px;
            color: aliceblue;
            margin: 10%;
            text-decoration: none;
        }

        #button2:hover {
            background-color: rgba(32, 31, 31, 0.767);
        }

       .images{
       padding: 2%;
       margin: 2%;
       }

    </style>
</head>
<body>
    <header>
        <h1><img src="img/bele.png" class="logo">
         <img src="img/bleh.jpg" width="115" height="115" class="logo2"></h1>
        <h2 class="new"><center>Discover Kuromi, where cuteness gets a twist!</center></h2>
        <div class="nav">
        <a href="homepage.php" target="_self">Home</a>
        <a href="gallery.php" target="_self">Gallery</a>
        <a href="products.php" target="_self">Products</a>
        <a href="about.php" target="_self">About</a>
        <a href="contact.php" target="_self">Contact us</a>
    </div>

    </header>


    <div>
        <div class="form">
            <form action="">
                <h2>Welcome to Kuromi station,</h2>
                <p>Where adorable meets rebellious. Dive into the world of this iconic Sanrio character known for her edgy charm. Explore our Kuromi shop for exclusive merchandise, and embrace the darker side of cute. Join us in celebrating Kuromi's uniqueness!</p>
                <a href="krukru.php" id="button2" class="button2">Login</a>
            </form>
            <div class="images">
            <img src="img/love.gif" width="350" height="350"></img>
    </div>
    
</body>
</html>
