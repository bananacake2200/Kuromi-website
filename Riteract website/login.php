LOGIN.php
<?php
    include("loginConnection.php");
    session_start();
?> 
<!DOCTYPE html>
<html>
<head>
    <title>LOG IN</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
</head>

<style>
        body{
            background: black;
        }
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins','san-serif';
        }
        .header{
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 70px;
            padding: 25px 12.9%;
            background-color: rgba(0,0,0,0.5);
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 100;
        }
        .navbar a{
            position: relative;
            font-size: 16px;
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin-right: 30px;
           
        }
        
        .navbar a::after{
            content: '';
            position: absolute;
            left: 0;
            bottom: -6px;
            width: 100%;
            height: 2px;
            background: #e4e4e4;
            border-radius: 5px;
            transform: translateY(10px);
            opacity: 0;
            transition: .5s;
        }
        .navbar a:hover:after{
                transform: translateY(0);
                opacity: 1;
        }
       
        .background{
            width: 100%;
            height: 100vh;
            background: url(https://images.pexels.com/photos/1525041/pexels-photo-1525041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1) no-repeat;
            background-position: center;
            background-size: cover;
            filter:blur(10px);

        }

        .container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 75%;
            height: 550px;
            background-image:linear-gradient(rgba(50, 46, 46, 0.75),rgba(0,0,0,0.75)), 
            url(https://images.pexels.com/photos/1525041/pexels-photo-1525041.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1);
            background-size: cover;
            background-position: center ;
            border-radius: 10px;
            margin-top: 20px;
            
        }
        .container .content{
            position: absolute;
            top: 0 ;
            left: 0; 
            width: 58%;
            height: 100%;
            background: transparent;
            padding: 80px;
            color: white;
            display: flex;
            justify-content: space-between;
            flex-direction: column;
        }
        .container .logregbox{
            position: absolute;
            top: 0 ;
            right: 0; 
            width: calc(100% - 60%);
            height: 100%;
            overflow: hidden;
            
        }
        .content .logo{
            font-size: 30px;

        }
        .text .h2{
            font-size: 40px;
            line-height: 25px;
        }
        .text h2 span{
            font-size: 25px;
           
        }
        .text p{
            font-size: 16px;
            margin: 20px 0;
            font-family: Arial, Helvetica, sans-serif;
        }
        .social-icon a i {
            font-size: 22px;
            color: white;
            margin-right: 10px;
            transition: .5s ease;
        }
        .social-icon a:hover i{
            transform: scale(1.2);
        }
        .logregbox .form-box {
                position: absolute;
                display: flex;
                justify-content: center;
                align-items: center;
                width: 100%;
                height: 100%;
                background: transparent;
                backdrop-filter: blur(4px);
                border-top-right-radius: 10px ;
                border-bottom-right-radius: 10px ;
                color: white;
        }
        .logregbox .form-box.login{
            transform: translateX(0);
            transition: transform .7s ease;
            transition-delay: .7s;
        }
        .logregbox.active .form-box.login{
            transform: translateX(430px);
            transition-delay: 0s;
        }

        .logregbox .form-box.register{
            transform: translateX(430px);
            transition:transform .6s ease;
            transition-delay: 0s;
        }
        .logregbox.active .form-box.register{
            transform: translateX(0);
            transition-delay: .7s;
        }
    
        .form-box h2{
            font-size: 32px;
            text-align: center;

        }
        .form-box .input-box{
            position: relative;
            width: 340px;
            height: 50px;
            border-bottom: 2px solid white;
            margin: 30px 0;
        }
        .input-box input{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: white;
           font-weight: 500;
            
        }
        .input-box label{
            position: absolute;
            top: 50%;
            left: 0;
            transform: translateY(-50%);
            font-size: 16px;
            font-weight: 500;
            pointer-events: none ;
            transition: .5s ease;
        }

        .input-box input:focus~label,
        .input-box input:valid~label{
            top: -5px;
        }
        #combobox{
            width: 100%;
            height: 100%;
            background: transparent;
            border: none;
            outline: none;
            font-size: 16px;
            color: white;
           font-weight: 500;
        }
        option{
            color: black;
        }

        .input-box .icon{
            position: absolute;
            top: 13px;
            right: 0;
            font-size: 19px ;
        }
        .btn{
            width: 100%;
            height: 45px;
            background: burlywood;
            border: none;
            outline: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            color: rgb(0, 0, 0);
            font-weight: 500;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5) ;
            transition: .5s ;
        }
        .btn:hover{
            transform: scale(1.1);
        }
        .form-box .login-register{
            font-size: 14.5px;
            font-weight: 500;
            text-align: center;
            margin-top: 25px;
        }
        .login-register p a{
            color: white;
            font-weight: 600;
            text-decoration: none;
        }
        .login-register p a:hover{
            text-decoration: underline;
        }
        .aLOGIN{
            text-decoration: none;
            color: #000;
            font-weight: 600;
        }
         .bx:hover
        {
            transform: scale(1.1);
        }
        .fa:hover{
            transform: scale(1.1);

        }

        @media screen and (max-width: 768px) {
            .header {
                height: 60px;
                padding: 15px 8%;
            }

            .navbar a {
                font-size: 14px;
                margin-right: 20px;
            }

            .container {
                width: 90%;
                height: auto;
                margin-top: 100px;
            }

            .container .content {
                padding: 40px;
                font-size: 14px;
            }

            .container .logregbox {
                width: 100%;
                height: auto;
                position: relative;
            }

            .logregbox .form-box {
                width: 100%;
                height: auto;
                border-radius: 0;
                transform: none !important;
                transition: none !important;
            }

            .form-box h2 {
                font-size: 28px;
            }

            .input-box {
                width: 100%;
                height: 45px;
                margin: 20px 0;
            }

            .input-box input,
            #combobox {
                width: 90%;
            }

            .input-box .icon {
                font-size: 16px;
            }

            .btn {
                height: 40px;
                font-size: 14px;
            }

            .form-box .login-register {
                font-size: 13px;
            }
        }</style>

<body>
    
        <header class="header">
                <nav class="navbar">
                        <a href="HOMEPAGE.php">HOME</a>
                        <a href="ABOUT.php">About</a>
                        <a href="CONTACT.php">Contact</a>
                      
                </nav>
        

        
    </header>

    <div class="background"></div>
    <div class="container">
        <div class="content">
            <h2 class="logo">
                <i class="fa fa-plane" aria-hidden="true"></i></i>Wanderlust Booking!</h2>

            <div class="text">
              <h2>Welcome, <br> <span>Please Log in or Sign up!</span></h2>

              <p>Please sign in/Sign up to get a chance to travel around the world! </p>

                <div class="social-icon">
                    <a href="https://www.facebook.com/"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/?hl=en"><i class="bx bxl-instagram"></i></a>
                    <a href="https://twitter.com/"><i class="bx bxl-twitter"></i></a>
                   
                </div>
            </div>
        </div>

        <!--LOG IN FORM-->
        <div class="logregbox">
            <div class="form-box login">
                <form action="formhandler.php" method="post" id="loginForm">
                    <h2>Log In</h2>

                    <div class="input-box">
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email"  id="loginEmail" name="loginEmail" >
                        <label>Email</label>
                    </div>


                    <div class="input-box">
                        <span class="icon"><i class="fa fa-eye-slash" aria-hidden="true" onclick="toggle()"> </i></span>
                        <input type="password" id="loginPass" name="loginPass" >
                        <label>Password</label>
                    </div>

                    <div class="input-box" >
                        <select name="user_type" id="combobox" >
                            <option value="user">USER</option>
                            <option value="admin">ADMIN</option>
                        </select>
                       
                    </div>
                    

                    
                    <button type="submit" class="btn" name="submit">LOG IN</button>
                  
                    <div class="login-register">
                        <p>Don't have an account? <a href="#" class="register-link">Sign Up</a></p>
                    </div>
                </form>
            </div>

            <!--REGISTRATION FORM-->
            <div class="form-box register" >
                <form action="registration.php" id="registerForm" method="post">
                    <h2>Sign up</h2>

                    <div class="input-box" >
                        <span class="icon"><i class="bx bxs-user"></i></span>
                        <input type="text" id="registerName" name="username" >
                        <label>Name</label>
                    </div>

                    <div class="input-box" >
                        <span class="icon"><i class="bx bxs-envelope"></i></span>
                        <input type="email" id="registerEmail" name="email" >
                        <label>Email</label>
                    </div>

                    <div class="input-box" >
                        <span class="icon"><i class="bx bxs-lock-alt" onclick="toggleIcon()"></i></span>
                        <input type="password" id="registerPassword" name = "pwd"  >
                        <label>Password</label>
                    </div>
                   
                  
                    
                    
                    
                    <button type="submit" name ="submit" class="btn">Sign Up</button>

                    <div class="login-register">
                        <p>Already have an account? <a href="#" class="login-link">Log In</a></p>
                    </div>
                </form>
            </div>   
            </div>
        </div>
    </div>

  
    <script>
        const logregBox = document.querySelector('.logregbox');
        const loginLink = document.querySelector('.login-link');
        const registerLink = document.querySelector('.register-link');

        registerLink.addEventListener('click',() => {
            logregBox.classList.add('active');
        });

        loginLink.addEventListener('click',() => {
            logregBox.classList.remove('active');
        });


        /* TOGGLE/ SHOW PASSWORD */

        var state = false;

        function toggle() {
            var passwordInput = document.getElementById("loginPass");
           var eyeLogo = document.querySelector(".fa-eye-slash"); 
        
            if (state) {
                passwordInput.setAttribute("type", "password");
                eyeLogo.style.color = "#f8f6f0";
            } else {
                passwordInput.setAttribute("type", "text");
                eyeLogo.style.color = "#f1c232";
            }
        
            state = !state;
        }

        var state1 = false;

        function toggleIcon() {
            var passwordInput = document.getElementById("registerPassword");
           var lockLogo = document.querySelector(".bxs-lock-alt"); 
        
            if (state1) {
                passwordInput.setAttribute("type", "password");
                lockLogo.style.color = "#f8f6f0";
            } else {
                passwordInput.setAttribute("type", "text");
                lockLogo.style.color = "#f1c232";
            }
        
            state1 = !state1;
        }

    </script>   
  
</body>

</body>
</html>