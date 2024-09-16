<header class="header">

   <div class="flex">

      <a href="admin.php" class="logo"><img src="img/bleh.jpg" width="40" height="40" class="logo2"></a>

      <nav class="nav">
         <a href="homepage.php">Home</a>
         <a href="gallery.php">Gallery</a>
         <a href="products.php">Products</a>
         <a href="about.php">About</a>
         <a href="contact.php">Contact</a>
         <a href="cart.php" i class="fa-solid fa-cart-plus"></a>

      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

      <a href="cart.php" class="cart"><span><?php echo $row_count; ?></span> </a>

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>