<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="INDEX.css">
    
    <title>CONTACT US</title>


</head>
<body>
            <section class="contact">
                <div class="content">
                    <h2>Contact Us</h2>
                    <p>Your opinions and feedback are incredibly important to us. We're always looking for ways to enhance our services and provide an even better
                         booking experience for you. Your insights help us tailor our offerings to match your needs and preferences.</p>
                </div>
                <div class="container">
                    <div class="contactInfo">
                        <div class="box">
                            <div class="icon"><i class="fa fa-map-marker"></i></a>
                            </div>
                            <div class="text">
                                <h3>Address</h3> 
                                <p>Langit Road</p>
                                <p>Bagong Silang, Caloocan City</p>
                            </div>
                        </div>

                         <div class="box">
                            <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Phone</h3>
                               <p>09123456789</p>
                            </div>
                        </div>

                        <div class="box">
                            <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="text">
                                <h3>Email</h3>
                               <p>russel3306@gmail.com</p>
                            </div>
                        </div>
                    </div>

                    <div class="contactForm">
                        <form action="send-mail.php" method="post">
                            <h2>Send Message</h2>
                            <div class="inputBox">
                                <input type="email" name="email" required>
                                <span>Email</span>
                            </div>

                            <div class="inputBox">
                                <input type="text" id="subject" name="subject" required>
                                <span>Subject</span>
                            </div>

                            <div class="inputBox">
                                <textarea required name="message"></textarea>
                                <span>Your Message...</span>
                            </div>

                            <div class="inputBox">
                                <input type="submit" value="Send" name="send" id="btnsubmit"> 
                            </div>    
                        </form>
                    </div>
                </div>
            </section>


            <?php include('footer.php');?>

    </body>
</html>