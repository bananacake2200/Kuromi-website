<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(name, description, price, image, quantity) VALUES('$product_name','$product_description' ,'$product_price', '$product_image', '$product_quantity')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Kuromi station</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>
      @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

      header{
    position: center;
    top: 0;
    left: 0;
    width: 100%;
    background: url(img/pastel.jpg);
    box-shadow: 0 1px 4px hsla(0, 0%, 98%, 0.1);
    z-index: 100;
    border-bottom: 1px solid pink;
    padding-right: 10%;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 5px;
}
.nav a {
            float: right;
            text-decoration: none;
            color: black;
            padding: 9px 25px;
            font-size: 20px;
            font-weight: 600;
        }

.nav a:hover {
            transform:scale(1.1);
        }

.flex{
   display: flex;
   align-items: center;
   padding:1rem 2rem;
   max-width: 1200px;
   margin:0 auto;
        }
        
body{
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url('img/kurmel.jpg');
            backdrop-filter: blur(0px);
      }
            
.productss .box-containerr{
   display:grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap:1.2rem;
   justify-content: center;
  
}

.productss .box-containerr .boxx{
   text-align: center;
   padding:2rem;
   box-shadow: var(--box-shadow);
   border:2px solid black;
   border-radius: .5rem;
   background-color: white;
}

.productss .box-containerr .boxx img{
   height: 15rem;
   border: 2px solid pink;
}

.productss .box-containerr .boxx h3{
   margin:0.5rem 0;
   font-size: 1.5rem;
   color:var(--black);
}

.productss .box-containerr .boxx .price{
   font-size: 2rem;
   color:var(--black);
}
.headingg{
   text-align: center;
   font-size: 2rem;
   text-transform: uppercase;
   color:black;
   margin: 4rem;
   border: 1px solid black;
   border-radius: 10px;
   background-color: white;
   margin-left:20%;
   margin-right:20%;

}
.pricee{
   font-size: 2rem;
   color:var(--black);
}
.btnn{
   display: block;
   width: 100%;
   text-align: center;
   color:black;
   font-size: 1.7rem;
   padding:5px;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
   background-color: pink;
   border: 1px solid black;
}
.btnn:hover{
   background-color: var(--black);
   color: black;
}
.logo2{
            position: left;
            left: 1%;
            border: 2px solid whitesmoke;
            border-radius: 100px;
            margin:1px;
            margin-right: 50%
           
        }
.nav2{
   float: right;
}

   </style>
</head>
<body>
<header class="header">

<div class="flex">

   <a href="admin.php" class="logo"><img src="img/bleh.jpg" width="40" height="40" class="logo2"></a>

   <nav class="nav">
      <a href="homepage.php">Home</a>
      <div class="nav2">
      <a href="view-order.php">My order</a>
      <a href="cart.php">My cart</a>
      </div>
   </nav>

   <?php
   
   $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
   $row_count = mysqli_num_rows($select_rows);

   ?>


</div>

</header>

<div class="container">

<section class="productss">

   <h1 class="headingg">Kuromi's enchanted essentials</h1>

   <div class="box-containerr">

      <?php
      
      $select_products = mysqli_query($conn, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="boxx">
            <img src="img/<?php echo $fetch_product['image']; ?>" alt="">
            <h3><?php echo $fetch_product['name']; ?></h3>
            <h3><?php echo $fetch_product['description']; ?></h3>
            <div class="pricee">₱<?php echo $fetch_product['price']; ?></div>
            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_description" value="<?php echo $fetch_product['description']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">
            <input type="submit" class="btnn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>