<!DOCTYPE html>
<html>
    <head>
   
    <title>BOOK ONLINE!</title>
    
        <link rel="stylesheet" href="style.css">

    </head>
    <style>

*{
    margin : 0;
    padding : 0;
    font-family : sans-serif;    
}
.banner{
    width: 100%;
    height: 100vh;
    background-image: linear-gradient(rgba(50,50,50,0.75),rgba(40,40,40,0.75)),url(https://wallpapers.com/images/featured-full/green-leaves-background-39hzfg9nvuarivt1.jpg);
    background-position: center;
 
    background-size: cover; 
}
.navbar{

    width: 85%;
    margin: auto;
    padding: 35px 0;
    display: flex;
    align-items: center;
    justify-content: space-between;
    
}
.logo{
    width: 110px;
    cursor : pointer;
    border-radius: 100%; 

}
.navbar ul li{
    list-style: none;
    display: inline-block;
    margin : 0 20px;
    position: relative;
}
.navbar ul li a{
    text-decoration:none;
    color : #fff;
    text-transform: uppercase;
    font-size: 13px;

}
.navbar ul li::after{
    content: '';
    height: 3px;
    width: 0;
    background: burlywood ;
    position: absolute;
    left : 0;
    bottom: -10px;
    transition: 0.5s;
}
.navbar ul li:hover::after{
    width : 100%;

}
.web-quote{
    width: 100%;
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    text-align: center;
    color: #fff;
}
.web-quote h1{
    font-size: 40px;
    margin-top:80px;

}
.web-quote p{
    margin: 20px auto;
    font-weight: 100;
    line-height: 25px;
}
button{
    width: 200px;
    padding: 15px 0;
    text-align: center;
    margin: 20px 10px;
    border-radius: 25px;
    font-weight: bold;
    border: 2px solid burlywood;
    background: transparent;
    color: #fff;
    cursor: pointer;
    position: relative;
    overflow: hidden;
}
span{
    background: burlywood;
    height: 100%;
    width: 0;
    border-radius: 25px;
    position: absolute;
    left :0;
    bottom: 0;
    z-index: -1;
    transition: 0.5s;
}
button:hover span{
    width: 100%;
}
button:hover {
    border: none;

}


    </style>
            <body>
              <div class=banner>
                    <div class="navbar">
                        <img src="https://www.creativevivid.com/wp-content/uploads/2018/02/Tour-and-Travels-Stock-Logo-Template.jpg" alt="logo" class="logo">
                        <ul>
                            <li><a href="HOMEPAGE.php">Home</a></li>
                            <li><a href="ABOUT.php">About Us</a></li>
                            <li><a href="CONTACT.php">Contact Us</a></li>
                        </ul>  
                    </div>
                    <div class= "web-quote" >
                            <h1>Ritetract Enviro Services, Inc.- Waste Management</h1>  
                            <p>Responding to clean and healthy environtment.</p>
                        
                        <div>
                            <a href="LOGIN.php">
                              <button><span></span>LOG IN</button>
                            </a>
                           
                        </div>
                    </div>
              </div>  
        </body>
</html>
    

  
    