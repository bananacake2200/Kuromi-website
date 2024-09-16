<?php

@include 'config.php';

if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_description = $_POST['p_description'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'img/'.$p_image;
 
    // Check if the products already exists
    $check_query = mysqli_prepare($conn, "SELECT COUNT(*) FROM products WHERE name = ?");
    mysqli_stmt_bind_param($check_query, 's', $p_name);
    mysqli_stmt_execute($check_query);
    mysqli_stmt_bind_result($check_query, $count);
    mysqli_stmt_fetch($check_query);

    if($count > 0){
        echo '<script>alert("This Product Already Exists.");
               window.location.href = "new.php";
            </script>';
    } else {
      mysqli_stmt_close($check_query);

      // Insert the country into the database
      $insert_query = mysqli_prepare($conn, "INSERT INTO products (name, price, image, description) VALUES (?, ?, ?, ?)");
      mysqli_stmt_bind_param($insert_query, 'siss', $p_name, $p_price, $p_image, $p_description);

      if(mysqli_stmt_execute($insert_query)){
         move_uploaded_file($p_image_tmp_name, $p_image_folder);
         echo '<script>alert("New Product Added."); 
         window.location.href = "admin.php";
         </script>';
      } else {
         echo '<script>alert("Cannot Add Product."); 
         window.location.href = "admin.php";
         </script>';
      }
   }
}

// out

  
 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($conn, "DELETE FROM `products` WHERE id = $delete_id ") or die('query failed');
    if($delete_query){
       header('location:admin.php');
       $message[] = 'product has been deleted';
    }else{
       header('location:admin.php');
       $message[] = 'product could not be deleted';
    };
 };
?>
 <!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Admin</title>

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

    .add-product-formm{
   max-width: 40rem;
   height: 60rem;
   background-color: white;
   backdrop-filter: blur(20px);
   border: 1px solid;
   border-radius: .5rem;
   padding:2rem;
   margin:0 auto;
   margin-top: 2rem;
}

.add-product-formm h3{
   font-size: 2rem;
   margin-bottom: 1rem;
   color:pink;
   text-transform: uppercase;
   text-align: center;
}

.add-product-formm .boxx{
   text-transform: none;
   padding:1rem 1rem;
   font-size: 1.5rem;
   color:black;
   border-radius: .5rem;
   border: 1px solid black;
   background-color: whitesmoke;
   margin:1rem 0;
   width: 100%;
}
.btnn{
   display: block;
   width: 100%;
   text-align: center;
   color:black;
   font-size: 1.4rem;
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
.images{
    position: center;
    padding-left: 140px;
}

   </style>
   </head>
<body>
<div class="container">

<section>

<form action="" method="post" class="add-product-formm" enctype="multipart/form-data">
   <h3><i class="fa-solid fa-apple-whole"></i> | add product</h3>
   <input type="text" name="p_name" placeholder="product name" class="boxx" required>
   <input type="text" name="p_description" placeholder="product description" class="boxx" required>
   <input type="number" name="p_price" min="0" placeholder="product price" class="boxx" required>
   <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="boxx" required>
   <input type="submit" value="Add" name="add_product" class="btnn">
   <a href="admin.php" class="btnn"> Cancel</a>

   <div class="images">
            <img src="img/Gif.gif" width="200" height="200"></img>
    </div>
</form>

</section>
<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `products` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="img/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_p_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="text" class="box" required name="update_p_description" value="<?php echo $fetch_edit['description']; ?>">
      <input type="number" min="0" class="box" required name="update_p_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="file" class="box" required name="update_p_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the product" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>


</html>