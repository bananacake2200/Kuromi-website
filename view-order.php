<?php

@include 'config.php';

session_start();

if (isset($_GET['delete'])) {
   $deleteOrderId = $_GET['delete'];

   // Perform the deletion
   $deleteQuery = mysqli_query($conn, "DELETE FROM `order` WHERE id = $deleteOrderId");

   if ($deleteQuery) {
       // Redirect to the same page after deletion
       header("Location: admin_orders.php");
       exit();
   } else {
       echo "Error deleting order: " . mysqli_error($conn);
   }
}
// Check if the form is submitted
if (isset($_POST['update_order'])) {
    $orderId = $_POST['order_id'];
    $newPaymentStatus = $_POST['update_payment'];

    // Perform the update
    $updateQuery = mysqli_query($conn, "UPDATE `order` SET payment_status = '$newPaymentStatus' WHERE id = $orderId");

    if ($updateQuery) {
        // Redirect to the same page after update
        header("Location: admin_orders.php");
        exit();
    } else {
        echo "Error updating payment status: " . mysqli_error($conn);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Order details</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="style.css">
<style>
   :root{
   --pink:#e84393;
   --red:#c0392b;
   --orange:#f39c12;
   --black:#333;
   --white:#fff;
   --light-color:#666;
   --light-white:#ccc;
   --light-bg:#f5f5f5;
   --border:.2rem solid var(--black);
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
   }
   .arrow{
      font-size: 4rem;
      font: black;
      padding: 15px;
   }
   .delete-btn{
   background-color: pink;
   color: black;
}

.option-btn{
   background-color:pink;
   color: black;
}

.btn:hover,
.delete-btn:hover,
.option-btn:hover{
   background-color: var(--black);
}
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
    float: right;
    justify-content: space-between;
    padding-left: 3%;
}
.h {
            float: right;
            text-decoration: none;
            color: black;
            padding: 0px 20px;
            font-size: 20px;
            font-weight: 600;
            
        }
body{
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
            background-color: white;
            backdrop-filter: blur(10px);
      }
      .display-product-tablee table{
   width: 100%;
   text-align: center;
   border: 1px solid black;
   margin-left: 0%;
   background-color: white;
   margin-bottom: 0%;
   margin-top: 5%;
}

.display-product-tablee table thead th{
   padding:5px;
   font-size: 1.5rem;
   background-color: pink;
   color:black;
   border-radius: 5px;
  
}

.display-product-tablee table td{
   padding:5px;
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
   padding:1rem 2rem;
   font-size: 2rem;
   color:black;
   width: 10rem;
}
.checkout-btn{
   text-align: center;
   margin-top: 10px;
}


.checkout-btn a{
   display: inline-block;
   width: 300px;
   font-size: 15px;
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
.btn{
   display: block;
   width: 100%;
   text-align: center;
   color:black;
   font-size: 1rem;
   padding:10px;
   border-radius: .5rem;
   cursor: pointer;
   margin-top: 1rem;
   background-color: pink;
   border: 1px solid black;
}
.btn:hover{
   background-color: var(--black);
   color: black;
}
.placed-orders .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 33rem);
   gap:1.5rem;
   align-items: flex-start;
   max-width: 1200px;
   margin: 0 auto;
   justify-content: center;
}

.placed-orders .box-container .box{
   padding:1rem;
   width: 100%;
   border:var(--border);
   background-color: var(--white);
   box-shadow: var(--box-shadow);
   border-radius: .5rem;
}

.placed-orders .box-container .box p{
   margin-bottom: 1rem;
   font-size: 1.3rem;
   color:var(--light-color);
}

.placed-orders .box-container .box p span{
   color:var(--pink);
}

.placed-orders .box-container .box form{
   margin-top: 1rem;
   text-align: center;
}

.placed-orders .box-container .box form select{
   width: 100%;
   border:var(--border);
   padding:1.2rem 1.4rem;
   font-size: 1.8rem;
   color:var(--black);
   border:var(--border);
   border-radius: .5rem;
   margin:.5rem 0;
}
.empty{
   padding:1rem;
   font-size: 1.5rem;
   color:var(--red);
   border:var(--border);
   box-shadow: var(--box-shadow);
   text-align: center;
   background-color: var(--white);
   border-radius: .5rem;
   text-transform: capitalize;
}

   </style>


</style>
</head>
<body>
<header class="header">
   <div class="flex">
    <a href="products.php"><i class="fa-solid fa-arrow-left"></i></a>
   
   <nav class="nav">
      <h1 class="h"> My order </h1>
   </nav>
   </div>
</header>

<section class="placed-orders">

   <div class="box-container">

      <?php
      
      $select_orders = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
      <div class="box">
         <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> status : <span><?php echo $fetch_orders['payment_status']; ?></span> </p>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no orders placed yet!</p>';
      }
      ?>
   </div>


<div>
<?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

   </div>


<div class="container">

<section class="display-product-tablee">

   <table>

      <thead>
         <th>Product</th>
         <th>name</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
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
            <td>₱<?php echo number_format($fetch_cart['price']); ?></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>">
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="" name="update_update_btn">
               </form>   
            </td>
            <td>₱<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="homepage.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">Back to products</a>
   </div>

</section>

</div>
</div>











<script src="js/admin_script.js"></script>

</body>
</html>