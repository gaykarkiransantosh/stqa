<?php   
session_start();
include("config.php");

if(isset($_POST['submit'])){
     $email = $_POST['admin_email'];
     $pass = $_POST['admin_pass'];

     $query = mysqli_query($conn,"select * from admin_login where admin_email='$email' and admin_pass = '$pass'");
     if($query){
     if(mysqli_num_rows($query)>0){

         $_SESSION['admin_email'] = $email;
         header('location:customer.php');
     } else{
         echo "<script> alert('Try Again')</scrpit>"; 
     }
    }
}

?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN AS ADMIN</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

  <div class="wrapper">
        <h1>LOGIN</h1><br>
        <div id="error_message"></div>


        <form action="" method="POST" >
            <div class="input_field">
                <label for="admin_email">Email ID<span class="error">* </label>
                <br>
                <input type="text" name="admin_email" id="admin_email" placeholder="EMAIL ID">
            </div>
            <br>

            <div class="input_field">
                <label for="admin_pass">Password<span class="error">*  </label>
                <br>
                <input type="password" name="admin_pass" id="admin_pass" placeholder="PASSWORD" >
            </div>
            <br>
            <div class="btn">
                <button type="submit" name="submit" id="submit" onmouseover="style.color='red'" onmouseout="style.color='black'"> LOGIN</button> 
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'" ><a href="forgotpass.php">Forgot Password</a></button> 
            </div>
        </form>
    </div>
</body>
</html>