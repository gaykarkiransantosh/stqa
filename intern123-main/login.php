<?php
#session_start();

if(isset($_SESSION['username'])){

  header("Location: index.php");
  exit;
}

include_once 'config.php';
$username=$pass="";

$nameErr=$passErr=$LoginErr="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if($_SERVER['REQUEST_METHOD']== 'POST'){
     
    if (empty(trim($_POST["username"]))) {
        $nameErr = "Name is required";
      
      }
      elseif(!preg_match("/^[a-zA-Z0-9\.]*$/", $_POST["username"])){
          $nameErr = "Only alphabets, numbers are allowed";
      }
      else {
        $username = test_input($_POST["username"]);
        $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      }

      if(empty(trim($_POST["password"]))){
        $passErr ="Password Required";
      }
      elseif(!preg_match("/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/",$_POST['password'])){
        $passErr = "Correct format password with atleast one capital letter,number and consisting of atleast 8 characters is required";
      } 
      /*elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["password"])){
        $passErr = "Check Password Input";
  
      }*/else{
        $pass = test_input($_POST["password"]);
        $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      } 
      if(empty($nameErr)&&empty($passErr)){
        #header('Location: index.php?username='.$username);
        #$sql = "select id ,username, password from users where username = ? ";
        
        $sql = "SELECT user_id ,username, userpass,user_type FROM login_data WHERE username=?"; 
    
        $stmt =  mysqli_prepare($conn,$sql);
  
        mysqli_stmt_bind_param($stmt, "s" , $param_username);
        $param_username = $username;
        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt)==1){
            mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password,$user_type);
            if(mysqli_stmt_fetch($stmt)){
              if($pass == $hashed_password){
                //allow to login
                session_start();
                $_SESSION["id"]= $id;
                $_SESSION["username"] = $username;
                $_SESSION["loggedin"]= true; 
                //redirect
                if($user_type == "student"){
                  header("Location:../student/studentdashboard.php?username=".$username);
                }else{
                  header("Location:../teacher/teacherdashboard.php?username=".$username);
                }
                
              }
            }
          } 
          else{
            $LoginErr = "You are a new user! Sign In to get started";
          }
        }
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>LOGIN</title>

  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="scripts.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="signin1.css">
  <link rel="stylesheet" type="text/css" href="newteachersignin.css">
</head>
<body >

  <div class="wrapper" style="background-color: aliceblue;">
        <h1 style="color:black"><b>Login<b></h1>
        <center><h3 class="text-center">New User?<a href="signin1.php" onmouseover="style.color='green'" onmouseout="style.color='black'" > CLICK TO SIGN IN </a></h3></center><hr>
   
        <div id="error_message"><?php echo $LoginErr;?></div>


        <form action="" method="POST" class="form1">
        <div class="form-group ">
            <div class="input_field">
                <label for="username">Username<span class="error">*  <?php echo $nameErr;?></label>
                <br>
                <input type="text" class="form-control" name="username" id="username" placeholder="USERNAME">
            </div>
</div>
<div class="form-group ">
            <div class="input_field">
                <label for="password">Password<span class="error">*  <?php echo $passErr;?></label>
                <br>
                <input type="password" class="form-control" name="password" id="password" placeholder="PASSWORD" >
            </div>
            </div>
         <br>
                <button type="submit" class="b1 btn btn-primary"  onmouseout="style.color='black'"> LOGIN</button> 
           
                <button type="submit" class="btn btn-warning" onmouseover="style.color='red'" onmouseout="style.color='black'" ><a href="forgotpass.php">Forgot Password</a></button> 

        </form>
    </div>
</body>
</html>
