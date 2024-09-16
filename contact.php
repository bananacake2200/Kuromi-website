<!DOCTYPE html>

<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <title>Kuromi station</title>
    

    <style>
     header {
        font-family: 'Trebuchet MS';
            font-style: normal;
            font-size: 15px;
            color: #f6f0f7;
            padding: 0px;
            position: relative;
            background-size: cover;
            bottom: 20px;
            background-image: url(img/pastel.jpg);
            padding-bottom: 0%;
        }

        body {
            margin: 0px;
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(img/cute.jpg);
            
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
            transition: .5s;      }

.contact-form {
    width: 1000px;
    margin: 50px;
    padding: 50px;
    color:rgb(8, 8, 8);
    background-color: rgb(219, 219, 224);
    font-size: 15px;
    border:1px solid #111111;
    border-radius: 15px;
    box-shadow:5px 3px 5px #111111;  
    margin-left: 125px;
    margin-bottom: 10%;
}
.form {
            position: relative;
            width: 740px;
            height: 400px;
            background: linear-gradient(to right, #faf8fa, #c19ccc);
            border: 2px solid rgba(8, 8, 8, 0.5);
            border-radius: 20px;
            backdrop-filter: blur(15px);
            display: flex;
            justify-content: center;
            align-items: center;
            margin-left: 10%;
            padding-left: 7%;
           
        
        }

        h2 {
            font-size: 2em;
            color: #0e0d0d;
            
        }

        .inputbox {
            position: relative;
            margin: 20px 0;
            width: 300px;
            border-bottom: 2px solid #030303;
        }

        .inputbox label {
            position: absolute;
            top: 50%;
            left: 5px;
            transform: translateY(-50%);
            color: #000000;
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
            color: #0e0d0d;
        }
        #message {
    width: 280px; 
    height: 70px; 
    padding: 10px; 
    border: 1px solid #0f0f0f; 
    border-radius: 10px; 
    font-size: 16px; 
    color: #0c0c0c; 
    background-color: #f5f5f500;
    padding-bottom: 5px;
    margin-bottom: 5%;
}
        #button2 {
            width: 100%;
            height: 35px;
            border-radius: 40px;
            background: #111111;
            border: none;
            outline: none;
            cursor: pointer;
            font-size: 15px;
            font-weight: 300;
            border-color: #fff;
            padding: 10px 20px;
            color: aliceblue;
            margin-bottom: 5%;
        }

        #button2:hover {
            background-color: rgb(46, 10, 51);
        }

       .images{
       padding: 10%;
       margin-top: 5%;
       }
    .icons {
   list-style-type: none;
   padding: 5px;
   margin-top: 20px;
   margin-bottom: 20px;
   padding-left: 20%;
   font-size: 20px;
}

.icons li {
   display: inline;
   margin: 10px;
}
.icons :hover{
            transform:scale(1.2)
        }
       
        .icons a {
            text-decoration: none;
            color: #0c0c0c;
        }
        footer {
   
   background-color: #111111;
   color: #df79e9;
   text-align: center;
   padding: 5px;
   margin-top: 80px;
}

footer p {
   margin: 5px;
}

/* Footer Links Styles */
.footer-links {
   list-style-type:none;
   padding: 0;
}

.footer-links li {
   display: inline-flex;
   margin-right: 20px;
}
.footer-links li:hover{
            background-color: rgba(243, 231, 231, 0.432);
            transform:scale(1.1)
        }

.footer-links a {
   text-decoration:underline;
   color: #df79e9;
   font-weight: bold;
}

/* Social Media Icons Styles */
.social-icons {
   list-style-type: none;
   padding: 0;
   margin-top: 10px;
   margin-bottom: 10px;
  
}

.social-icons li {
   display: inline;
   margin-right: 10px;
}
.social-icons :hover{
            transform:scale(1.2)
        }

.social-icons a {
   text-decoration: none;
   color: #efedf0;
   font-size: 20px;
}

.greetings{
    width: 200px;
    height: 150px;
    position: relative;
    left: 40%;
    top: 40px;
    padding: 0;
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

</style>
</head>

<body><header>

    <h1><img src="img/bele.png" class="logo">
        <img src="img/bleh.jpg" width="115" height="115" class="logo2"></h1>
        <div class ="nav">
       <a href="homepage.php"target="_self">Home</a>
       <a href="gallery.php"target="_self">Gallery</a>
       <a href="products.php"target="_self">Products</a>
       <a href="about.php"target="_self">About</a>
       <a href="contact.php"target="_self">Contact us</a>
   </div>

   </header>
  
<div class="contact-form">
    <h2>Contact us...</h2>
    <p><strong>Website Name:</strong> Kuromi station</p>
    <p><strong>Phone:</strong>  0915xxxxxxx</p>
    <p><strong>Email:</strong> ma******@gmail.com</p>

    <p> We value your feedback and inquiries. Whether you have a questions , a comment or suggestions, please feel free to get in touch with us. You can use the form below to send us a message.</p><br><br>

    <div class="form">
        <form class="" action="contact.php" method="post" >
            <h2><center>Contact Form</center></h2>
            <div class="inputbox">
                <input type="name" name="name" required>
                <label for=""><i class="fa-solid fa-user"></i> Name</label>
            </div>
            <div class="inputbox">
                <input type="email" name="email" required>
                <label for=""><i class="fa-solid fa-address-card"></i> Email</label>
            </div>
            <div>
                <textarea id="message" name="message" rows="4" cols="50" placeholder="Enter your message..."></textarea>
                <br>
            </div>
            <button id="button2" type="submit" name="send">Submit</button>
        </form>

        <?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if (isset($_POST["send"])) {
    $mail = new PHPMailer(true);
 
   
    $mail->isSMTP();
    $mail->Host  = 'smtp.gmail.com';
    $mail->SMTPAuth  = true;
    $mail->Username  = 'bananamilkteax1@gmail.com'; 
    $mail->Password  = 'pkjhzfxvjevaozpg'; 
    $mail->SMTPSecure = 'tls';
    $mail->Port  = 587;

   
    $mail->setFrom('bananamilkteax1@gmail.com'); 
    $mail->addAddress($_POST['email']); 

  
    $mail->isHTML(true);
    $mail->Subject = "Subject: " .  $_POST["subject"];
    $mail->Body   = "Message: " . $_POST["message"];

    try {
      
        $mail->send();
        echo "
        <script> 
        alert('Message was sent successfully!');
        document.location.href = 'contact.php';
        </script>
        ";
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
        <div class="images">
        <img src="img/naknamp.jpg" width="350" height="250"></img>
    </ul>
    <ul class="icons">
        <li><a href="https://www.facebook.com/Kuromi" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
            <li><a href="https://www.youtube.com/user/SanrioInc" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
            <li><a href="https://www.instagram.com/kuromi_project/?hl=en" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
            <li><a href="https://www.sanrio.com/collections/kuromi" target="_blank"><i class="fa-solid fa-paw"></i></a></li>
            <li><a href="https://www.tiktok.com/@sanrio" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
    </ul>
        </div>
    </div>
    
    
       
    
</div>

<footer>
    <div class="container">
        <p>&copy; 2023 Kuromi station</p>
        <ul class="footer-links">
            <li><a href="homepage.php">Home</a></li>
            <li><a href="gallery.php">Gallery</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <ul class="social-icons">
            <li><a href="https://www.facebook.com/Kuromi" target="_blank"><i class="fa-brands fa-facebook"></i></a></li>
                <li><a href="https://www.youtube.com/user/SanrioInc" target="_blank"><i class="fa-brands fa-youtube"></i></a></li>
                <li><a href="https://www.instagram.com/kuromi_project/?hl=en" target="_blank"><i class="fa-brands fa-square-instagram"></i></a></li>
                <li><a href="https://www.sanrio.com/collections/kuromi" target="_blank"><i class="fa-solid fa-paw"></i></a></li>
                <li><a href="https://www.tiktok.com/@sanrio" target="_blank"><i class="fa-brands fa-tiktok"></i></a></li>
        </ul>
    </div>
</footer>
</body>
</html>