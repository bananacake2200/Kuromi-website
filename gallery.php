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
            transition: .5s;
        }

       

        #button1:hover {
            background-color:  rgba(229, 222, 222, 0.204);
        }

        .title {
            font-style: normal;
            font-size: 10px;
            font-weight: 50px;
            color: 	#181717;
            background-color: #f3efef;
            margin-left: 30%;
            margin-right: 30%;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow:#fcfcfc;
            padding: 2px;
            margin-bottom: 5%;
            margin-top: 2%;
        }

        .mimi {
            margin: 15px;
            padding: 5px;
            border: 1px solid #111111;
            border-radius: 20px;
            box-shadow: 3px 3px 5px #2b2a2a;
            background-color: #cfa7eb;
            transition: background-color 0.10s ease-in-out; /* Add transition for background-color */
            

        }
        .mimi:hover {
    background-color: #a991c1; 
    transform: scale(1.1);
    transition: .5s;
}

hr{ color: #fff9f9;
    margin-top: 8%;
    background-color: #100f0f;
    border:1px solid;
}
        .title2 {
            font-style: normal;
            font-size: 10px;
            font-weight: 50px;
            color: 	#0c0c0c;
            background-color: #f3ecec;
            margin-left: 30%;
            margin-right: 30%;
            margin-bottom: 15px;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow:#fcfcfc;
            padding: 3px;
            margin-top:8%;
            margin-bottom: 5%;
        }

        .vid1 {
            margin: 3px;
            padding: 3px;
            border: 1px solid #111111;
            border-radius: 25px;
            box-shadow: 3px 3px 5px #111111;
            margin-right: 5px;
            background-color: #cfa7eb;
        }
        .vid2{
            margin: 3px;
            padding: 3px;
            border: 1px solid #111111;
            border-radius: 25px;
            box-shadow: 3px 3px 5px #111111;
            margin-right: 5px;
            background-color: #cfa7eb;
        }

        .vid1:hover, .vid2:hover {
            background-color: rgb(81, 25, 99);
        }
        .vid3{
            margin: 3px;
            padding: 3px;
            border: 1px solid #111111;
            border-radius: 25px;
            box-shadow: 3px 3px 5px #111111;
            margin-right: 5px;
            background-color: #cfa7eb;
        }

        .vid3:hover{
            background-color: rgb(163, 94, 184);
        }
        .vid4{
            margin: 3px;
            padding: 3px;
            border: 1px solid #111111;
            border-radius: 25px;
            box-shadow: 3px 3px 5px #111111;
            margin-right: 5px;
            background-color: #cfa7eb;
        }

        .vid4:hover{
            background-color: rgb(163, 94, 184);
        }
        footer {
            background-color: #111111;
            color: #df79e9;
            text-align: center;
            padding: 5px;
            margin-top: 50px;
        }

        footer p {
            padding-left: 0%;
        }

        /* Footer Links Styles */
        .footer-links {
            list-style-type: none;
            padding: 0;
        }

        .footer-links li {
            display: inline-flex;
            margin-right: 25px;
        }
        .footer-links li:hover{
            background-color: rgba(243, 231, 231, 0.432);
            transform:scale(1.1)
        }

        .footer-links a {
            text-decoration: underline;
            color: #df79e9;
            font-weight: bold;
        }

        /* Social Media Icons Styles */
        .social-icons {
            list-style-type: none;
            padding: 0;
        }
        .social-icons :hover{
            transform:scale(1.1)
        }
        .social-icons li {
            display: inline-block;
            margin-right: 10px;
        }

        .social-icons a {
            text-decoration: none;
            color: #efedf0;
   font-size: 20px;
        }

        .logo {
            width: 200px;
            height: 150px;
            position: relative;
            left: 40%;
            top: 40px;
            padding: 5;
        }
        .gallerywall{
    width:50%;
    height: 20%;
    margin: 20px auto;
    padding: 70px;
    color:rgb(20, 19, 19);
    background-color: rgb(245, 241, 241);
    margin-right: 50px;
    font-size: 15px;
    border:1px solid #111111;
    border-radius: 15px;
    box-shadow:3px 3px 5px #111111;
    margin-top: 15%;
    position:relative;
    margin-left: 22%;
    word-spacing: 5px;
    line-height: 25px;
    background-image: url(img/pastel.jpg);
    background-size: cover;
        }
    .gallerywall img{
        margin-top: 1px;
    }
.file-label {
  display: inline-block;
  background-color: #141414;
  color: white;
  padding: 4px 10px;
  border-radius: 5px;
  cursor: pointer;
}

/* Style the file input */
.custom-file-input {
  display: none;
}

/* Style the label on hover */
.file-label:hover {
  background-color: #b159e4;
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
  .card{
    height: 10px;
    width: 200px;
    padding: 0px;
    box-sizing: border-box;
    position: absolute;
    bottom: 0px;
    color: white;
    transition: .5s;
    }
.card h4 {
      padding-bottom: 0;
      width: 100%;
      margin: 0; 
      padding-left: 40%;
      font-size: 20px;
      opacity: 0;
      transition: opacity 0.5s;
      text-align: center;
      position: absolute;
    }

.card:hover h4 {
      opacity: 1;
    }
.images:hover .card{
    height: 0%;
}
    </style>
</head>
<body>
    <header>
        <h1><img src="img/bele.png" class="logo">
         <img src="img/bleh.jpg" width="115" height="115" class="logo2"></h1>
         <div class="nav">
        <a href="homepage.php" target="_self">Home</a>
        <a href="gallery.php" target="_self">Gallery</a>
        <a href="products.php" target="_self">Products</a>
        <a href="about.php" target="_self">About</a>
        <a href="contact.php" target="_self">Contact us</a>
    </div>
    </header>
    

    <div class="container">
        <div class="title">
            <h1><center>[  Kuromi's mischief moments in Monochrome ]</center></h1>
        </div>
        <div class="images">
            <center>
                <img src="img/mimi1.jpg" alt="mimi1" class="mimi" width="280" height="280">
                <img src="img/mimi2.jpg" alt="mimi2" class="mimi" width="280" height="280">
                <img src="img/mimi3.jpg" alt="mimi3" class="mimi" width="280" height="280">
                <img src="img/mimi4.jpg" alt="mimi4" class="mimi" width="280" height="280">
            </center>
        </div>

<hr>

        <div class="title2">
            <h1><center>[ Kuromi's whimsical adventures ]</center></h1>
        </div>

        <div class="video">
            <center>
                <iframe width="300" height="300" class="vid1" src="https://www.youtube.com/embed/videoseries?si=LmCoUlorhiBdQ_sa&amp;list=PLjv78rVJV36NwEqEQRDEtEAGulv52Tx-Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="300" height="300" class="vid2" src="https://www.youtube.com/embed/videoseries?si=2Y15zpcRh_Pt-8ha&amp;list=PLN9X97LDR0XuIxAeg6KUbA2mZ-nFlrBFQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="300" height="300" class="vid3" src="https://www.youtube.com/embed/ySjiqOKao5M?si=MhVekl9r9j1_ixJs" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                <iframe width="300" height="300" class="vid4" src="https://www.youtube.com/embed/_SI3tCkhuiQ?si=ryVD3oW1A7XDWSni" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </center>
        </div>

        <div class="gallerywall">
            <h1><center>Get ready with Kuromi!</center></h1><br><br>
            <p>We invite you to become a part of this magical gallery by sharing your memories with Kuromi. It's easy to participate – simply upload your photo with Kuromi, whether it's a treasured keepsake, a recent adventure, or a creative masterpiece! Your image will take pride of place among our Kuromi-inspired collection.<br><br>

                Let's fill this wall with our shared love for Kuromi and make it a showcase of our collective enthusiasm for this enchanting character. Whether you're a long-time fan or a newcomer, your presence is cherished here!<br><br>
                
                To join 'Kuromi's Gallery Wall,' You can upload your photo and share your Kuromi moments with us. Together, we'll create a vibrant, ever-growing tapestry of Kuromi's world.<br><br>
                
                Thank you for being a part of our Kuromi community. We can't wait to see your photos and stories!</p><br>
                
<br><br>
                <img src="img/mm.png" width="670" height="200">
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
