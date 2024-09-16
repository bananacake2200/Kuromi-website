<?php
session_start();
@include 'config.php';



if(isset($_POST['checkout_btn'])){
   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $cardname = $_POST['cardname'];
   $expiry = $_POST['expiry'];
   $flightdate = $_POST['flight'];
   $cvc = $_POST['cvc'];
   $cardnum = $_POST['cardnum'];

 

  


   $book_query = mysqli_query($conn, "SELECT * FROM `booking`");
   $price_total = 0;
   if(mysqli_num_rows($book_query) > 0){
      while($country = mysqli_fetch_assoc($book_query)){
         $country_name[] = $country['name'] .' ('. $country['quantity'] .' person) ';
         $country_price = number_format($country['price'] * $country['quantity']);
         $price_total += $country['price'] * $country['quantity'];
      };
   };

   $clearBookingQuery = "DELETE FROM `booking`";
   if(mysqli_query($conn, $clearBookingQuery)) {
       echo "";
   } else {
       echo mysqli_error($conn);
   }

 


   $total_booking = implode(', ',$country_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `checkout`(name, mobile, email, nameoncard, cardnumber, cardexpiry, dateofflight, cvc, country, price) VALUES('$name','$number','$email','$cardname','$cardnum','$expiry','$flightdate','$cvc','$total_booking', '$price_total')") or die(mysqli_error($conn));

  
   
   if($book_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>thank you for booking!</h3>
         <div class='order-detail'>
            <span>".$total_booking."</span>
            <span class='total'> total : ₱".$price_total."  </span>
         </div>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> name on card :  <span>".$cardname." </span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your flight : <span>".$flightdate."</span> </p>
            <p> your card number and cvc: <span>".$cardnum.", ".$cvc."</span> </p>
            <p>card expiry : <span>".$expiry."</span> </p>
           
            
           
           
         </div>
            <a href='userorders.php' class='btn'>Check Booking</a>
         </div>
      </div>
      ";

     
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>checkout</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
  <link rel="stylesheet" href="style.css">

</head>
<body>



<div class="container">

<section class="checkout">

      <form action="" method="post">

    <!-- <div class="display-order"> -->
      <h1 class="heading"><i class="fa-solid fa-credit-card">complete your booking</i></h1>

         <div class="inputs">
            <div class="inputBox">
               <span>your name</span>
               <input type="text" placeholder="enter your name" name="name" required> 
            </div>
            <div class="inputBox">
               <span>your number</span>
               <input type="number" placeholder="enter your number" name="number" required>
            </div>
            <div class="inputBox">
               <span>your email</span>
               <input type="email" placeholder="enter your email" name="email" required>
            </div>
            <div class="inputBox">
               <span>name on card</span>
               <input type="text" placeholder="name on card" name="cardname" required>
            </div>
            <div class="inputBox">
               <span>card expiry</span>
               <input type="date" placeholder="12-07-2023" name="expiry" required>
            </div>
            <div class="inputBox">
               <span>date of flight</span>
               <input type="date" placeholder="prefered flight" name="flight" required>
            </div>
            <div class="inputBox">
               <span>cvc</span>
               <input type="text" placeholder="4564" name="cvc" required>
            </div>
            <div class="inputBox">
               <span>card number</span>
               <input type="text" placeholder="3453-345-2344" name="cardnum" required>
            </div>
         </div>
         <input type="submit" value="checkout" name="checkout_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="script.js"></script>
   
</body>
</html>