

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>header</title>

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

</head>
<body>
   

<header class="header">

<div class="flex">

   <a href="#" class="logo">Wanderlust</a>

   <nav class="navbar" id="topHeader">
     <a href="../HOMEPAGE.php">Home</a> 
      <a href="../ABOUT.php">About</a>
      <a href="COUNTRY.php">Countries</a>
      <a href="Booking.php">bookings</a>
      <a href="userorders.php">details</a>
      <a href="logout.php" onclick="return confirm('Are you sure you want to logout?')">Logout</a>
   </nav>

   <?php
   
   $select_rows = mysqli_query($conn, "SELECT * FROM `booking`") or die('query failed');
   $row_count = mysqli_num_rows($select_rows);

   ?>

  

   

</div>

</header>



</body>
</html>