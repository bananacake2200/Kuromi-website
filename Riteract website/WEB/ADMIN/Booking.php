<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($conn, "UPDATE `booking` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:Booking.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];
   mysqli_query($conn, "DELETE FROM `booking` WHERE id = '$remove_id'");
   header('location:Booking.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($conn, "DELETE FROM `booking`");
   header('location:Booking.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>BOOKING SUMMARY</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body id="bookingbody">

<?php include 'header.php'; ?>

<div class="container">

<section class="booked-country">

   <h1 class="heading"><i class="fa-solid fa-book">BOOKING SUMMARY</i></h1>

   <table>

      <thead>
         
         <th>name</th>
         <th>price</th>
         <th>image</th>
         <th>passenger qty</th>
         <th>total price</th>
         <th> <i class="fas fa-trash"></th>
      </thead>

      <tbody>

         <?php 
         
         $select_booking = mysqli_query($conn, "SELECT * FROM `booking`");
         $grand_total = 0;
          
         if(mysqli_num_rows($select_booking) > 0){
            while($fetch_booking = mysqli_fetch_assoc($select_booking)){

         ?>
            
         <tr>
           
            <td><?php echo $fetch_booking['name']; ?></td>
            <td>₱<?php echo number_format($fetch_booking['price']); ?></td>
            <td><img src="photos/<?php echo $fetch_booking['image']; ?>" height="100"></td>
            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_booking['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_booking['quantity']; ?>" >
                  <input type="submit" value="+" name="update_update_btn">
               </form>   
            </td>
            <td>₱<?php echo $sub_total = number_format($fetch_booking['price'] * $fetch_booking['quantity']); ?></td>
            <td><a href="Booking.php?remove=<?php echo $fetch_booking['id']; ?>" onclick="return confirm('remove item from cart?')" class="delete-btn"> <i class="fas fa-trash"></i></a></td>
         </tr>
        <?php
           $grand_total += $fetch_booking['price'] * $fetch_booking['quantity'];     
            }; 
         };
         ?>
         <tr class="table-bottom">
            
            <td></td>
            <td colspan="3">total:</td>
            <td>₱<?php echo number_format($grand_total); ?></td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btn <?= ($grand_total > 1)?'':'disabled'; ?>">procced to checkout</a>
   </div>

</section>

</div>
   
<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>