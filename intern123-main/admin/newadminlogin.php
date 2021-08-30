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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

  <link rel="stylesheet" type="text/css" href="newteachersignin.css">
</head>
<body style="background-color: #bf55ec;">

  <div class="wrapper" style="background-color:aliceblue;">
  <br>
        <h1 style="color:black"><b>LOGIN</b></h1><hr>
        <div id="error_message"></div>


        <form action="" method="POST" class="form1">
<div class="form-group">
            <div class="input_field">
                <label for="admin_email">Email ID<span class="error">* </label>
                <br>
                <input type="text" class="form-control" name="admin_email" id="admin_email" placeholder="EMAIL ID">
            </div>
            </div>
            <div class="form-group">
            <div class="input_field">
                <label for="admin_pass">Password<span class="error">*  </label>
                <br>
                <input type="password" class="form-control" name="admin_pass" id="admin_pass" placeholder="PASSWORD" >
            </div>
            </div>
            <div class="row">
                <div class="col-md-3 offset-md-2">
                <button type="submit" class="btn btn-primary" name="submit" id="submit"  onmouseout="style.color='black'"> LOGIN</button> 
</div>
<div class="col">
                <button type="submit" class="btn btn-warning" onmouseout="style.color='black'" ><a href="forgotpass.php">Forgot Password</a></button> 
</div></div>
        </form>
    </div>
</body>
</html>