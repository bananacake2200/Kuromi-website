<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>shopping cart</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">
   <style>

header{
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    background: url(img/pastel.jpg);
    box-shadow: 0 1px 4px hsla(0, 0%, 98%, 0.1);
    z-index: 100;
    border-bottom: 1px solid pink;
    padding: 0px;
    padding-right: 20%;
}
.nav{
    display: flex;
    justify-content: space-between;
    padding-left: 3%;
}
.h {
            text-decoration: none;
            color: black;
            padding: 0px 20px;
            font-size: 2rem;
            font-weight: 600;
            
        }
body{
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-image: url('img/kurmel.jpg');
            backdrop-filter: blur(10px);
      }
      .display-product-tablee table{
   width: 100%;
   text-align: center;
   border: 1px solid black;
   margin-left: 0%;
   background-color: white;
   margin-bottom: 0%;
   margin-top: 0%;
}

.display-product-tablee table thead th{
   padding:1rem;
   font-size: 1.5rem;
   background-color: pink;
   color:black;
   border-radius: 5px;
  
}

.display-product-tablee table td{
   padding:1rem;
   font-size: 1.5rem;
   color:black;
   border: 1px solid black;
   border-radius: 5px;
}

.display-product-tablee table td:first-child{
   padding:0;
}

.display-product-tablee table tr:nth-child(even){
   background-color: white;
}

.display-product-tablee .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: white;
   color:var(--black);
   font-size: 2rem;
   padding:1.5rem;
}
.delete-btn {
   color: white ;
   background-color: black;
}
.delete-btn:hover{
   background-color: pink;
   color: black;
}
.option-btn {
   color: white;
   background-color: black;

}
.option-btn:hover{
   background-color: pink;
   color: black;
}
.display-product-tablee input[type="number"]{
   border: var(--border);
   padding:1rem 2rem;
   font-size: 2rem;
   color:black;
   width: 10rem;
}

.display-product-tablee input[type="submit"]:hover{
   background-color: var(--black);
}
.checkout-btn{
   text-align: center;
   margin-top: 10px;
}


.checkout-btn a{
   display: inline-block;
   width: 300px;
   font-size: 20px;
   margin-bottom: 5%;
   background-color: black;
   color: white;
}

.checkout-btn a.disabled{
   pointer-events: none;
   opacity: .5;
   user-select: none;
   background-color: black;
}
.btnn{
   display: block;
   width: 100%;
   text-align: center;
   color:black;
   font-size: 1rem;
   padding:1rem 1rem;
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
   </style>

</head>
<body>

<header class="header">

   <div class="flex">
    <a href="products.php"><i class="fa-solid fa-arrow-left"></i></a>

    <nav class="nav">
      <h1 class="h"> My cart </h1>
   
                  <?php
               
               $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
               $row_count = mysqli_num_rows($select_rows);

               ?>

               <a href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </a>

               <div id="menu-btn" class="fas fa-bars"></div>

   </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

   </div>

</header>


<div class="container">

<section class="display-product-tablee">

   <table>

      <thead>
         <th>Product</th>
         <th>name</th>
         <th>description</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($conn, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td><img src="img/<?php echo $fetch_cart['image']; ?>" height="100" alt=""></td>
            <td><?php echo $fetch_cart['name']; ?></td>
            <td><?php echo $fetch_cart['description']; ?></td>
            <td>₱<?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update price" name="update_update_btn">
               </form>   
            </td>
            <td>₱<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td><a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('remove item from cart?')" class="btnn"> <i class="fas fa-trash"></i> remove</a></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
         <tr class="table-bottom">
            <td>
            <img src="img/Gif.gif" width="50" height="50"></img>
    </td>
            <td colspan="4">grand total</td>
            <td>₱<?php echo $grand_total; ?></td>
            <td><img src="img/Gif.gif" width="50" height="50"></img></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>