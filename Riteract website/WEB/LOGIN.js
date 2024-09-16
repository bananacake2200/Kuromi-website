


/*PLACES ALERT */


 function showAlert(country)
 {
 //  document.getElementById("countryInput").value = country;
   // document.getElementById("checkoutForm").submit(); 
   
   
        let result = confirm('Do you want to book ' + country + '? ');
        if (result==false){
            event.preventDefault();
        } 
         else
        {
            window.location.href = "CONFIRMATION.php";
            document.getElementById("place").innerHTML = 'China';
        }
}   




// payment form
  let popup = document.getElementById("popup");

        function BtnPay()
        {   
            let name = document.getElementById("name").value;
            let email = document.getElementById("email").value;
            let number = document.getElementById("number").value;
            let month = document.getElementById("month").value;
            let year = document.getElementById("year").value;
            let cvc = document.getElementById("cvc").value;
            let result = confirm('Are you sure you want to complete the transaction?');

            if (result == false) 
            {
                event.preventDefault();
            }
             else if( (name === "" || email === "" || number === "" || month === "" || year === "" || cvc === "")){
              
                alert("Enter your credentials first!");
            } 
                    
             else 
             {
               
                 
             }
        }
 
/* CLOSE PAYMENT */

function BtnClose(){
    let result = confirm('Leave Site?');  
    if (result==false){
        event.preventDefault();
    } 
    else{
        window.location.assign("LOGIN.php");
    }   
}








     /* function showAlert(country) {
            // Perform actions based on the selected country
            alert("Booking for " + country + "!");
            // You can also send this information to the checkout form
            // For example, you can use JavaScript to populate a hidden input field in the form
            document.getElementById("countryInput").value = country;
            // Then submit the form
            document.getElementById("checkoutForm").submit();
        }

        */
       