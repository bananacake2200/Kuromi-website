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
   <title>Orders</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom admin css file link  -->
   <link rel="stylesheet" href="admin_style.css">
<style>
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

</style>
</head>
<body>

<header class="arrow">
   <a href="admin.php"><i class="fa-solid fa-arrow-left"></i></a>
</header>
<section class="placed-orders">

   <h1 class="title">Customers' placed orders</h1>

   <div class="box-container">

      <?php
      
      $select_orders = mysqli_query($conn, "SELECT * FROM `order`") or die('query failed');
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){
      ?>
      <div class="box">
         <p> user id : <span><?php echo $fetch_orders['id']; ?></span> </p>
         <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> number : <span><?php echo $fetch_orders['number']; ?></span> </p>
         <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> total product : <span><?php echo $fetch_orders['total_products']; ?></span> </p>
         <p> total price : <span>₱<?php echo $fetch_orders['total_price']; ?>/-</span> </p>
         <p> payment method : <span><?php echo $fetch_orders['method']; ?></span> </p>
         <p> status : <span><?php echo $fetch_orders['payment_status']; ?></span> </p>
         <form action="" method="post">
            <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">
            <select name="update_payment">
               <option disabled selected><?php echo $fetch_orders['payment_status']; ?></option>
               <option value="pending">pending</option>
               <option value="completed">completed</option>
            </select>
            <input type="submit" name="update_order" value="update" class="option-btn">
            <a href="admin_orders.php?delete=<?php echo $fetch_orders['id']; ?>" class="delete-btn" onclick="return confirm('delete this order?');">delete</a>
         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">Empty</p>';
      }
      ?>
   </div>

</section>













<script src="js/admin_script.js"></script>

</body>
</html>