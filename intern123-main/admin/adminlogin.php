<?php 
 session_start();

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>LOGIN AS ADMIN</title>

    <<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Custom styles for this template -->
    <link href="css/admin.css" rel="stylesheet">

    <script src="js/adminlogin.js"></script>
  </head>

  <body class="text-center">
    <form class="form-signin" id="adminlogin" name="adminlogin" method="POST" action="adminlogin.php">
      
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" name="admin_email" id="admin_email" class="form-control" placeholder="Email address" required autofocus>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" name="admin_pass" id="admin_pass" class="form-control" placeholder="Password" required>
      <div class="checkbox mb-3">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <input class="btn btn-lg btn-primary btn-block" name="submit" id="submit" type="submit"></input>
      
    </form>
  </body>
</html>


<?php   

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