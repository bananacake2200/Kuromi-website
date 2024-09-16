<?php

@include 'config.php';
// adding

//delete
if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `countries` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      echo '<script>alert("Country Deleted!") 
            window.location.href = "admin.php";
            ;</script>';
   }else{
     
      echo '<script>alert("Cannot Delete Country!");
      window.location.href = "admin.php";
               </script>';
   };
};

// update
if(isset($_POST['update_country'])){
   $update_c_id = $_POST['update_c_id'];
   $update_c_name = $_POST['update_c_name'];
   $update_c_price = $_POST['update_c_price'];
   $update_desc = $_POST['update_c_desc'];
   $update_c_image = $_FILES['update_c_image']['name'];
   $update_c_image_tmp_name = $_FILES['update_c_image']['tmp_name'];
   $update_c_image_folder = 'photos/'.$update_c_image;

   $update_query = mysqli_query($conn, "UPDATE `countries` SET name = '$update_c_name', price = '$update_c_price', image = '$update_c_image', description = '$update_desc' WHERE id = '$update_c_id'");

   if($update_query){
      move_uploaded_file($update_c_image_tmp_name, $update_c_image_folder);
      echo '<script>alert("Country Updated!");
      window.location.href = "admin.php";
               </script>';
   }else{
      exit(mysqli_error($conn));
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   

<?php include 'adminheader.php'; ?>

<div class="container">

<section class="display-country-table">

   <table>

      <thead>
        
         <th>Country name</th>
         <th>Country price</th>
         <th>Country image</th>
         <th>Country description</th>
         <th>delete/edit</th>
         <th><a href="addcountry.php" class="countrylink"><i class="fa-solid fa-circle-plus">Add</i></a></th>
      </thead>

      <tbody>
         <?php
         
            $select_country = mysqli_query($conn, "SELECT * FROM `countries`");
            if(mysqli_num_rows($select_country) > 0){
               while($row = mysqli_fetch_assoc($select_country)){
         ?>

         <tr>
            <td><?php echo $row['name']; ?></td>
            <td>₱<?php echo $row['price']; ?></td>
            <td><img src="photos/<?php echo $row['image']; ?>" height="100" alt=""></td>
            <td><?php echo $row['description']; ?></td>
            <td>
               <a href="admin.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i></a>
               <a href="admin.php?edit=<?php echo $row['id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> </a>

             
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no country added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

<!--update-->
   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `countries` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="photos/<?php echo $fetch_edit['image']; ?>" height="200" alt="">
      <input type="hidden" name="update_c_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="text" class="box" required name="update_c_name" value="<?php echo $fetch_edit['name']; ?>">
      <input type="number" min="0" class="box" required name="update_c_price" value="<?php echo $fetch_edit['price']; ?>">
      <input type="text" class="box" required name="update_c_desc" value="<?php echo $fetch_edit['description']; ?>">
      <input type="file" class="box" required name="update_c_image" accept="image/png, image/jpg, image/jpeg">
      <input type="submit" value="update the country" name="update_country" class="btn">
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





<!-- custom js file link  -->
<script src="script.js"></script>

</body>
</html>