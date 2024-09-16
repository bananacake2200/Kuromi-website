<?php

@include 'config.php';

if(isset($_POST['add_product'])){
   $p_name = $_POST['p_name'];
   $p_description = $_POST['p_description'];
   $p_price = $_POST['p_price'];
   $p_image = $_FILES['p_image']['name'];
   $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
   $p_image_folder = 'img/'.$p_image;

   $check_query = mysqli_query($conn, "SELECT * FROM `products` WHERE name = '$p_name'");
    if (mysqli_num_rows($check_query) > 0) {
        $message[] = 'Product already exists';

        // Display JavaScript alert for the user
        echo '<script>alert("Product already exists");</script>';
    } else {
   $insert_query = mysqli_query($conn, "INSERT INTO `products`(name, description, price, image) VALUES('$p_name','$p_description', '$p_price', '$p_image')") or die('query failed');
    }
   if($insert_query){
      move_uploaded_file($p_image_tmp_name, $p_image_folder);
      $message[] = 'product add succesfully';

      if (isset($_POST['cancel_product'])) {
         // Redirect to admin.php
         header('Location: admin.php');
         exit();
     }
   
   }else{
      $message[] = 'could not add the product';
   }
};

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

if(isset($_POST['update_product'])){
   $update_p_id = $_POST['update_p_id'];
   $update_p_name = $_POST['update_p_name'];
   $update_p_description = $_POST['update_p_description'];
   $update_p_price = $_POST['update_p_price'];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'img/'.$update_p_image;

   $update_query = mysqli_query($conn, "UPDATE `products` SET name = '$update_p_name', description = '$update_p_description', price = '$update_p_price', image = '$update_p_image' WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_p_image_tmp_name, $update_p_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }

}

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
      
      header{
    position: center;
    top: 0;
    left: 0;
    width: 100%;
    background: url(img/pastel.jpg);
    box-shadow: 0 1px 4px hsla(0, 0%, 98%, 0.1);
    z-index: 100;
    border-bottom: 4px solid pink;
    padding-left: 4%;
    font-size: 1rem;
}
.logo {
            width: 200px;
            height: 100px;
            position: relative;
            left: 40%;
            top: 40px;
            padding-bottom: 20px;
        }
        .logo2{
            position: absolute;
            left: 3.5%;
            border: 2px solid whitesmoke;
            border-radius: 100px;
            margin:15px;
           
        }
        .admin{
         font-size: 2rem;
         position:relative;
         left: 0%;
         
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
            background-image: url('img/cute.jpg');
            
      }

      .display-product-tablee table{
   width: 90%;
   text-align: center;
   border: 1px solid black;
   margin-left: 5%;
   background-color: white;
   margin-bottom: 5%;
   margin-top: 5%;
}

.display-product-tablee table thead th{
   padding:1rem;
   font-size: 1.5rem;
   background-color: pink;
   color:black;
   border-radius: 5px;
  
}

.display-product-tablee table td{
   padding:0.5rem;
   font-size: 1.5rem;
   color:var(--black);
   border: 1px solid black;
   border-radius: 5px;
}

.display-product-tablee table td:first-child{
   padding:0;
}

.display-product-tablee table tr:nth-child(even){
   background-color: var(--bg-color);

}

.display-product-tablee .empty{
   margin-bottom: 2rem;
   text-align: center;
   background-color: var(--bg-color);
   color:var(--black);
   font-size: 1rem;
   padding: 1rem;
}
.delete-btn {
   color: white ;
   background-color: black;
   padding: 0.1rem;
}
.delete-btn:hover{
   background-color: pink;
   color: black;
}
.option-btn {
   color: white;
   background-color: black;
   padding: 0.1rem;

}
.option-btn:hover{
   background-color: pink;
   color: black;
}
.con{
   background-color: pink;
   border:1px solid pink;
   font-size: 1.5rem;
   padding-left: 10%;
   font-weight: 600;
   
}
nav{
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 10px 0;
    padding-right: 10%;
   
   }
   nav a{
      color: black;
   }
   nav a:hover {
      transform:scale(1.2);
   }
   
   .edit-form-container{
   position: center;
   top:0; left:0;
   z-index: 1000;
  backdrop-filter: blur(35px);
   padding:0.5rem;
   display: none;
   align-items: center;
   justify-content: center;
   min-height: 80vh;
   width: 40%;
   border: 1px solid black;
   margin-left: 30%;
}

.edit-form-container form{
   width: 40rem;
   border-radius: .5rem;
   background-color: var(--white);
   text-align: center;
   padding:1rem;
}

.edit-form-container form .box{
   width: 100%;
   background-color: pink;
   border-radius: .5rem;
   margin:1rem 0;
   font-size: 1.3rem;
   color:black;
   padding:0.5rem 0.5rem;
   text-transform: none;
}


   </style>

</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<header>
<h1><img src="img/bele.png" class="logo">
         <img src="img/bleh.jpg" width="90" height="90" class="logo2"></h1>
   <h1 class="admin">Admin</h1>
</header>

<div class="con">
   <nav>
   <a href="new.php">Update list</a>
   <a href="products.php">Go to Products</a>
   <a href="admin_orders.php">view Order</a>
   </nav>
</div>
<section class="display-product-tablee">

   <table>

      <thead>
         <th>Product</th>
         <th>Name</th>
         <th>Description</th>
         <th>Total Price</th>
         <th>Action</th>
      </thead>

      <tbody>
         <?php
         
            $select_products = mysqli_query($conn, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
               while($row = mysqli_fetch_assoc($select_products)){
         ?>

         <tr>
            <td><img src="img/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td>₱<?php echo $row['price']; ?></td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fa-solid fa-trash-can"></i></i></a>
               <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fa-solid fa-user-pen"></i></a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

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
      <input type="submit" value="update the product" name="update_product" class="option-btn">
      <a href="admin.php" value="cancel" id="close-edit" class="option-btn">cancel</a>
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>















<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>