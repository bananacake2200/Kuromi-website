


<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $country_name = $_POST['country_name'];
   $country_price = $_POST['country_price'];
   $country_image = $_POST['country_image'];
   $country_desc = $_POST['country_desc'];
   $person_quantity = 1;

   $select_booking = mysqli_query($conn, "SELECT * FROM `booking` WHERE name = '$country_name'");

   if(mysqli_num_rows($select_booking) > 0){
     echo '<script>
               alert("this country is already at the booking page");
               event.preventDefault();
            </script>';
   }else{
      $insert_country = mysqli_query($conn, "INSERT INTO `booking`(name, price, image, quantity) VALUES('$country_name', '$country_price', '$country_image', '$person_quantity')");

      echo '<script>
      alert("Country added at the summary");
      event.preventDefault();
   </script>';
   }

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>COUNTRIES</title>

   
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   
   <link rel="stylesheet" href="style.css">
</head>
<style>
      .footerContainer{
         width:100%;
         height: 130px;
           padding: 10px 30px 10px;
         background-color:#110e0e;
           
        } 
        .icons{
            display: flex;
            justify-content: center;
          
        }
        .icons a {
          padding: 10px;
          margin: 10px;
          border-radius: 100px;
          color: black;
          background-color: rgb(252, 252, 252);
        }
        .icons a i{
            font-size: 1em;
            
        } 
        .icons a:hover {
            background-color: rgb(167, 166, 165);
            transition: 0.5s;
        }
        
       .footerNav{
        margin: 30px 0;;
       }
       .footerNav #ulpage{
        display: flex;
        justify-content: center;
        list-style: none;

       }
       .footerNav #ulpage .footerpage a{
        color: antiquewhite;
        margin: 20px;
        text-decoration: none;
        list-style: none;
        opacity: 0.7;
       }
       .footerNav #ulpage .footerpage a:hover{
        color: burlywood;
       }
       .footerbot{
        background-color: #000000;
        padding: 10px;
        text-align: center;
       }
       .footerbot p{
        color: white;
        font-family: monospace;
       }
       .designer{
        text-transform: capitalize;
        font-weight: bolder;
        padding: 0px 5px;
       }

</style>
<body>
   

<?php include 'header.php'; ?>

<div class="container">

<section class="places">


   <h1 class="heading">Book Now!</h1>

   
   <br><br><br><br>  <br><br><br>
   <div class="box-container">

      <?php
      
      $select_countries= mysqli_query($conn, "SELECT * FROM `countries`");
      if(mysqli_num_rows($select_countries) > 0){
         while($fetch_country = mysqli_fetch_assoc($select_countries)){
      ?>

        <form action="" method="post">
            <div class="box">
           
                <img src="photos/<?php echo $fetch_country['image']; ?>" >
                <input type="hidden" name="country_image" value="<?php echo $fetch_country['image']; ?>">
                <input type="submit" class="btn"  onclick="showAlert()"  value="BOOK" name="add_to_cart">

         <div class="card">
                <h3><?php echo $fetch_country['name']; ?></h3>
                <div class="price">₱<?php echo $fetch_country['price']; ?></div>
             
                <input type="hidden" name="country_name" value="<?php echo $fetch_country['name']; ?>">
                <input type="hidden" name="country_price" value="<?php echo $fetch_country['price']; ?>">
                <input type="hidden" name="country_desc" value="<?php echo $fetch_country['description']; ?>">
                <p>Good for 1 person only</p>
                <p><?php echo $fetch_country['description']; ?></p>
                
                
            </div> <!--card end div-->
         
            </div><!--box end div-->
        </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>
<footer>
            <div class="footerContainer">
                <div class="icons">
                    <a href="https://www.facebook.com/?stype=lo&deoia=1&jlou=AfeWLKP1bhBXgmbHpzC-Jz1zJwT69oyLTNDaIJoFnPOr94ZT7rbNIxUHb-YlAVk7YVyWVkcmR8MjO2pbXEd7ikPGo4MpJV-iPaRLJTmzl5QCaQ&smuh=21900&lh=Ac8Y7YFEAZNG6cGo3gQ"><i class="fa-brands fa-facebook"></i></a>

                    <a href="https://twitter.com/"><i class="fa-brands fa-twitter"></i></a>

                    <a href="https://www.instagram.com/?hl=en"><i class="fa-brands fa-instagram"></i></a>

                    <a href="https://www.youtube.com/"><i class="fa-brands fa-youtube"></i></a>

                    <a href="https://www.tiktok.com/"><i class="fa-brands fa-tiktok"></i></a>
                  
                </div>
                <div class="footerNav">                       
                        <ul id="ulpage">
                            <li class="footerpage"><a href="https://maps.app.goo.gl/5bdZDa9K3e3QV1Gf7">Main Branch</a></li>
                            <li class="footerpage"><a href="https://www.rappler.com/">News</a></li>
                            <li class="footerpage"><a href="https://www.cnnphilippines.com/latest">Article</a></li>
                            <li class="footerpage"><a href="../HOMEPAGE.php">Home</a></li>
                            <li class="footerpage"><a href="ABOUT.php">About</a></li>
                            <li class="footerpage"><a href="COUNTRY.php">Countries</a></li>
                            <li class="footerpage"><a href="../CONTACT.php">Contact</a></li>

                        </ul>
                </div>
            </div>
            <div class="footerbot">
                <p>Copyright &copy;2001; Designed by <span class="designer">Kelvin Soliman</span></p>
            </div>
</footer>

<!-- custom js file link  -->
<script src="script.js"></script>
<script>



function showAlert()
{     
   var result = confirm('Are you sure you want to book this country?');
   if(result == false)
   {
      event.preventDefault();
   }
}



</script>
</body>
</html>