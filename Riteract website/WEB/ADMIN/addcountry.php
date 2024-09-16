<?php
include 'config.php';

// adding
if(isset($_POST['add_country'])){
    $c_name = $_POST['cname'];
    $c_price = $_POST['cprice'];
    $desc = $_POST['cdescription'];
    $c_image = $_FILES['cimage']['name'];
    $c_image_tmp_name = $_FILES['cimage']['tmp_name'];
    $c_image_folder = 'photos/'.$c_image;

      // Check if the country already exists
      $check_query = mysqli_prepare($conn, "SELECT COUNT(*) FROM `countries` WHERE name = ?");
      mysqli_stmt_bind_param($check_query, 's', $c_name);
      mysqli_stmt_execute($check_query);
      mysqli_stmt_bind_result($check_query, $count);
      mysqli_stmt_fetch($check_query);

      if($count > 0){
         echo '<script>alert("This Country Already Exists.");
                  window.location.href = "addcountry.php";
               </script>';
      } else {
         mysqli_stmt_close($check_query);

         // Insert the country into the database
         $insert_query = mysqli_prepare($conn, "INSERT INTO `countries` (name, price, image, description) VALUES (?, ?, ?, ?)");
         mysqli_stmt_bind_param($insert_query, 'siss', $c_name, $c_price, $c_image, $desc);

         if(mysqli_stmt_execute($insert_query)){
            move_uploaded_file($c_image_tmp_name, $c_image_folder);
            echo '<script>alert("New Country Added."); 
            window.location.href = "admin.php";
            </script>';
         } else {
            echo '<script>alert("Cannot Add Country."); 
            window.location.href = "admin.php";
            </script>';
         }
      }
      

    mysqli_stmt_close($check_query);
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD COUNTRY</title>
    <link rel="stylesheet" href="style.css">

</head>
<?php include 'adminheader.php'; ?>

<body>

<section>




<form action="" method="post" class="add-country-form" enctype="multipart/form-data">
   <h3>add a new country</h3>
   <input type="text" name="cname" placeholder="enter country name" class="box" required>
   <input type="number" name="cprice" min="0" placeholder="enter country price" class="box" required>
   <input type="file" name="cimage" accept="image/png, image/jpg, image/jpeg" class="box" required>
   <input type="text" name="cdescription" placeholder="enter country description" class="box" required>
   <input type="submit" value="add country" name="add_country" class="btn">
   <a href="admin.php" class="countrylink">countries added</a>
</form>

</section>

</body>
</html>