<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $credit = $_POST['credit'];
   $street = $_POST['street'];
   $city = $_POST['city'];
   $country = $_POST['country'];
   $pin_code = $_POST['pin_code'];

   $cart_query = mysqli_query($conn, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';
         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($conn, "INSERT INTO `order`(name, number, email, method, credit, street, city, country, pin_code, total_products, total_price) VALUES('$name','$number','$email','$method','$credit','$street','$city','$country','$pin_code','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>
         <h3>Customers detail</h3>
         <div class='customer-details'>
            <p> your name : <span>".$name."</span> </p>
            <p> your number : <span>".$number."</span> </p>
            <p> your email : <span>".$email."</span> </p>
            <p> your credit number : <span>".$credit."</span> </p>
            <p> your address : <span>".$street.", ".$city.", ".$country." - ".$pin_code."</span> </p>
            <p> your payment mode : <span>".$method."</span> </p>
            </div>
             <a href='successful.php' class='btn'>Okay</a>
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
   <title>Check out</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
      body{
    background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url(img/cute.jpg);       
            backdrop-filter: blur(5px);
    }
    .checkout-form form{
   padding:2rem;
   border: 1px solid black;
   border-radius: .5rem;
   background-color: white;
   width: 40%;
   margin-left: 30%;
   margin-bottom: 5%;
}

.checkout-form form .flex{
   display: block;
   flex-wrap: wrap;
   gap:1.5rem;
}

.checkout-form form .flex .inputBox{
   flex:1 1 40rem;
}

.checkout-form form .flex .inputBox span{
   font-size: 1.5rem;
   color:var(--black);
   
}

.checkout-form form .flex .inputBox input,
.checkout-form form .flex .inputBox select{
   width: 100%;
   background-color: var(--white);
   font-size: 1rem;
   color:var(--black);
   border-radius: .5rem;
   margin:1rem 0;
   padding:1.2rem 1rem;
   text-transform: none;
   border: 1px solid black;
}
.heading{
   font-size: 2rem;
   color: white;
   margin-top: 4%;
   background-color: white;
   color: black;
   text-align: center;
   margin-left: 30%;
   margin-right: 30%;
   margin-bottom: 3%;

}
.btn {
   color: white;
   background-color: black;
}
.btn:hover{
   background-color: white;
   color: black;
   border: 1px solid black;
}

@media (max-width:1200px){

.shopping-cart{
   overflow-x: scroll;
}

.shopping-cart table{
   width: 120rem;
}

.shopping-cart .heading{
   text-align: left;
}

.shopping-cart .checkout-btn{
   text-align: left;
}

}
.order-message-container{
   position: fixed;
   top:0; left:0;
   height: 100vh;
   overflow-y: hidden;
   overflow-x: hidden;
   padding:2rem;
   display: flex;
   align-items: center;
   justify-content: center;
   z-index: 1200;
   background-color: white;
   width: 50%;
   margin-left: 25%;
   
}

.order-message-container::-webkit-scrollbar{
   width: 1rem;
}

.order-message-container::-webkit-scrollbar-track{
   background-color: var(--dark-bg);
}

.order-message-container::-webkit-scrollbar-thumb{
   background-color: var(--blue);
}

.order-message-container .message-container{
   width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   padding:2rem;
   text-align: center;
}

.order-message-container .message-container h3{
   font-size: 2.5rem;
   color:var(--black);
}

.order-message-container .message-container .order-detail{
   background-color: var(--bg-color);
   border-radius: .5rem;
   padding:3rem;
   margin:1rem 0;
}

.order-message-container .message-container .order-detail span{
   background-color: var(--white);
   border-radius: .5rem;
   color:var(--black);
   font-size: 2rem;
   display: inline-block;
   padding:1rem 1.5rem;
   margin:1rem;
   height: 50%;
}

.order-message-container .message-container .order-detail span.total{
   display: block;
   background: var(--red);
   color:var(--white);
}

.order-message-container .message-container .customer-details{
   margin:1rem 0;
   text-align: left;
}

.order-message-container .message-container .customer-details p{
   padding:1rem 0;
   font-size: 2rem;
   color:black;
}

.order-message-container .message-container .customer-details p span{
   color:blue;
   padding:0rem;
   text-transform: none;
}
.display-order{
   max-width: 50rem;
   background-color: var(--white);
   border-radius: .5rem;
   text-align: center;
   padding:1.5rem;
   margin:0 auto;
   margin-bottom: 2rem;
   box-shadow: var(--box-shadow);
   border:var(--border);
}

.display-order span{
   display: inline-block;
   border-radius: .5rem;
   background-color: var(--bg-color);
   padding:.5rem 1.5rem;
   font-size: 2rem;
   color:var(--black);
   margin:.5rem;
}

.display-order span.grand-total{
   width: 100%;
   background-color: var(--red);
   color:var(--white);
   padding:1rem;
   margin-top: 1rem;
}



   </style>

</head>
<body>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Billing Information</h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);
            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)</span>
      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> grand total : ₱<?= $grand_total; ?>/- </span>
   </div>
   
      <div class="flex">
         <div class="inputBox">
            <span>Name</span>
            <input type="text" placeholder="enter your name" name="name" required>
         </div>
         <div class="inputBox">
            <span>number</span>
            <input type="number" placeholder="enter your number" name="number" required>
         </div>
         <div class="inputBox">
            <span>email</span>
            <input type="email" placeholder="enter your email" name="email" required>
         </div>
         <div class="inputBox">
            <span>payment method</span>
            <select name="method">
               <option value="cash on delivery" selected>cash on delivery</option>
               <option value="credit cart">credit card</option>
               <option value="paypal">paypal</option>
            </select>
            <div class="inputBox">
            <div class="inputBox">
            <span>Credit card number</span>
            <input type="text" placeholder="e.g 091xxxx" name="credit" required>
         </div>
         </div>
         <div class="inputBox">
            <span>Street</span>
            <input type="text" placeholder="e.g. street name" name="street" required>
         </div>
         <div class="inputBox">
            <span>city</span>
            <input type="text" placeholder="e.g. caloocan" name="city" required>
         </div>
         <div class="inputBox">
            <span>country</span>
            <input type="text" placeholder="e.g. philippines" name="country" required>
         </div>
         <div class="inputBox">
            <span>pin code</span>
            <input type="text" placeholder="e.g. 123456" name="pin_code" required>
         </div>
      </div>
      <input type="submit" value="Pay now" name="order_btn" class="btn">
   </form>

</section>

</div>

<!-- custom js file link  -->
<script src="script.js"></script>
   
</body>
</html>