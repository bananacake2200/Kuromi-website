<?php
session_start();

@include "config.php";


$email = $_SESSION['user_email'];
$name = $_SESSION['user_name'];

if(!isset($email)){
   header('location:../LOGIN.php');
}

if(!isset($name)){
   header('location:../LOGIN.php');
}





if(isset($_POST['update_booked'])){
   $order_id = $_POST['order_id'];
   $update_payment = $_POST['update_payment'];
   mysqli_query($conn, "UPDATE `checkout` SET status = '$update_payment' WHERE id = '$order_id'") or die('query failed');
  echo '<script>
            alert("booking details updated");
            window.location.href = "userorders.php";
        </script>';
}

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   mysqli_query($conn, "DELETE FROM `checkout` WHERE id = '$delete_id'") or die('query failed');
   header('location:orderdetails.php');
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User's Booking Details</title>
   <link rel="stylesheet" href = "index.css">
</head>

<body>
<?php include "header.php";?>
<section class="placed-orders"> 

   <h1 class="title">Booked Details</h1>

   <div class="box-container">

<?php
    
    
      $select_orders = mysqli_query($conn, "SELECT * FROM `checkout` WHERE email = '$email' OR name = '$name' ") or die(mysqli_error($conn));
      if(mysqli_num_rows($select_orders) > 0){
         while($fetch_orders = mysqli_fetch_assoc($select_orders)){

   
      ?>
      <div class="box">     
         <p> name : <span><?php echo $fetch_orders['name']; ?></span> </p>
         <p> number : <span><?php echo $fetch_orders['mobile']; ?></span> </p>
         <p> email : <span><?php echo $fetch_orders['email']; ?></span> </p>
         <p> country & passenger: <span><?php echo $fetch_orders['country']; ?></span> </p>
         <p> date of flight : <span><?php echo $fetch_orders['dateofflight']; ?></span> </p>
         <p> total price : <span>₱<?php echo $fetch_orders['price']; ?></span> </p>
         <p> status : <span><?php echo $fetch_orders['status']; ?></span> </p>
         <form action="" method="post">
         <input type="hidden" name="order_id" value="<?php echo $fetch_orders['id']; ?>">

         </form>
      </div>
      <?php
         }
      }else{
         echo '<p class="empty">no bookings  yet!</p>';
      }
      ?>

</div>
</section>
</body>
</html>