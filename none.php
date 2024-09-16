<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:view-order.php');
   };
};

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

   <!-- custom css file link  -->
   <link rel="stylesheet" href="#">
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
    padding-right: 20%;
}
.heading {
   font-size: 3rem;
   background-color: black;
   color: white;
   margin-left: 40%;
   margin-right: 40%;
   border: 1px solid white;
   margin-top: 3%;
}
.a{
   background-color: black;
   color: white;
}
.nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0px 0;
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
            background-color: rgb(136, 119, 119);
            transition: .5s;
        }
  
body{
            background-size: cover;
            background-repeat: repeat;
            background-attachment: fixed;
            background-position: center;
          
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
   padding:1.5rem;
   font-size: 2rem;
   background-color: pink;
   color:black;
   border-radius: 5px;
  
}

.display-product-tablee table td{
   padding:1.5rem;
   font-size: 2rem;
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
</style>
</head>
<body>
<header class="header">

   <div class="flex">

      <a href="admin.php" class="logo"><img src="img/bleh.jpg" width="40" height="40" class="logo2"></a>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

     
      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>


<div class="container">

<section class="display-product-tablee">

   <h1 class="heading">
    Order details
   </h1>

   <table>

      <thead>
         <th>Product</th>
         <th>name</th>
         <th>description</th>
         <th>price</th>
         <th>quantity</th>
         <th>total price</th>
         <th>status</th>
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
               </form>   
            </td>
            <td>₱<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>
            <td>#</td>
            <td> <select name="method">
               <option value="cash on delivery" selected>Pending</option>
               <option value="credit cart">Accept</option>
            </select>
         </td>

            


         </tr>
         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>
        
      </tbody>

   </table>

</section>

</div>
   
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>