<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HEADER</title>
</head>
<style>
    .header{
    min-height: 100vh;
    width: 100%;
    background-image:linear-gradient(rgba(43, 37, 37, 0.75),rgba(0,0,0,0.75)), url(https://images.pexels.com/photos/1525041/pexels-photo-1525041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
    background-position: center;
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
    position: relative;
}
nav{
    display: flex;
    padding: 2% 6%;
    justify-content: space-between;
    align-items: center;
}
nav img{
    width: 150px;

}
.nav-links{
    flex: 1;
    text-align: right;
}
.nav-links ul li{
    list-style: none; 
    display: inline-block;
    padding: 8px 12px;
    position: relative;
}
.nav-links ul li a {
    color : white;
    text-decoration: none;
    font-size: 13px;

}
.nav-links ul li::after{
    content: '';
    width: 0;
    height: 2px;
    background: #f44336;
    display: block;
    margin: auto;
    
}
.nav-links ul li:hover::after{
 width: 100%;
 transition: 0.5s;
}

</style>
<body>
<section class="header">
        <nav>
            <a href="#"><img src="https://www.creativevivid.com/wp-content/uploads/2018/02/Tour-and-Travels-Stock-Logo-Template.jpg" class="logos" alt="logo"></a>

            <div class="nav-links">
                <ul>
                    <li><a href="LOGIN.php">HOME</a></li>
                    <li><a href="PLACES.php">PLACES</a></li>
                    <li><a href="ABOUT.php">ABOUT US</a></li>
                    <li><a href="CONTACT.php  ">CONTACT US</a></li>
                </ul>
            </div>
        </nav>

</body>
</html>