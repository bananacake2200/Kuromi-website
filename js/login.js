 function redirect(event){
    event.preventDefault();
        var email = document.getElementById("email").value;
        var password =document.getElementById("password").value;
    
        if(email == 1  && password == 1){
            window.location.assign("products.php");
            alert("You've been Logged in successfully");
        }
        else if(email == ""  || password == ""){
            alert("Please insert your email and password.")
        }
        else{
            alert("Incorrect email or password ");
            return;
        }
    }
    document.getElementById("loginForm").addEventListener("submit", redirect);

