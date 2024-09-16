<?php
session_start();

include("loginConnection.php");


if (isset($_POST['submit'])) {
    $email = $_POST['loginEmail'];
    $pwd = $_POST['loginPass'];
    $type = $_POST['user_type'];

    

if(empty($_POST['loginPass']) && (empty($_POST['loginEmail'])))
{
    echo'  <script>
                alert("Insert EMAIL/PASSWORD");
                window.location.href = "LOGIN.php";
            </script> ';
}
elseif(empty($_POST['loginPass']))
{
    echo'  <script>
                alert("Insert PASSWORD");
                window.location.href = "LOGIN.php";
            </script> ';
}
elseif(empty($_POST['loginEmail']))
{
    echo'  <script>
                alert("Insert EMAIL");
                window.location.href = "LOGIN.php";
           </script> ';
}






        $select_users = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$email' AND pwd = '$pwd' AND user_type = '$type'") or die(mysqli_error($conn));
        if(mysqli_num_rows($select_users) > 0){
           
           $row = mysqli_fetch_assoc($select_users);
     
           if($row['user_type'] == 'admin'){
     
              $_SESSION['admin_name'] = $row['name'];
              $_SESSION['admin_email'] = $row['email'];
              $_SESSION['admin_id'] = $row['id'];
              echo'  <script>
                            alert("you are signing in as ' . $email . '");
                            window.location.href = "ADMIN/admin.php";
                     </script> ';
           }elseif($row['user_type'] == 'user'){
     
              $_SESSION['user_name'] = $row['name'];
              $_SESSION['user_email'] = $row['email'];
              $_SESSION['user_id'] = $row['id'];
              echo'  <script>
                            alert("you are signing in as ' . $email . '");
                            window.location.href = "ADMIN/COUNTRY.php";
                    </script> ';
     
           }else{
            echo'  <script>
                    alert("No USER Found" );
                    window.location.href = "LOGIN.php";
                  </script> ';
           }
     
        }else{
            echo'  <script>
                        alert("Incorrect Email/Password or User Type" );
                        window.location.href = "LOGIN.php";
                    </script> ';
        }
     
         


}

$stmt->close();



?>
