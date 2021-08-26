<?php
session_start();

$username=$pass=$cpass="";

$nameErr=$passErr=$cpassErr="";

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
include_once 'config.php';
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
      }elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["password"])){
        $passErr = "Check Password Input";
  
      }else{
        $pass = test_input($_POST["password"]);
        $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      }
      if(empty(trim($_POST["cpass"]))){
        $cpassErr ="Confirm Password Required";
      }elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["cpass"])){
        $cpassErr = "Check Password Input";
  
      }
      elseif($_POST["cpass"] != $_POST["password"]){
        $cpassErr = "Confirmed password is not the same. Please try again";
  
      }else{
        $cpass = test_input($_POST["cpass"]);
        $cpass = filter_var($_POST["cpass"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      }
      
      if(empty($nameErr)&&empty($passErr)&&empty($cpassErr)){
          $sql = "UPDATE login_data SET userpass=? WHERE username=?";
          $stmt = mysqli_prepare($conn,$sql);
          if($stmt){
            mysqli_stmt_bind_param($stmt, "ss", $param_password,$param_username);
    
          //set parameter
          $param_username= $username;
            echo "Here";
          $param_password= $pass;
    
          //EXECUTE QUERY
          if(mysqli_stmt_execute($stmt)){
              header("Location: login.php");
            }
          else{
              echo "INVALID QUERY! Error in update";
            }
            
        }
          mysqli_stmt_close($stmt);
      }
  }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Forgot Password</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

  <div class="wrapper">
        <h1>LOGIN</h1><br>
        <center><H3>New User?<a href="signin1.php" onmouseover="style.color='red'" onmouseout="style.color='black'" > CLICK TO SIGN IN </a></H3></center><br>
        <div id="error_message"></div>
        <form action="" method="POST" >
            <label for="username">Username:</label><br>
            <div class="input_field">
            <input type="text" name="username" id="username" placeholder="USERNAME">
            <div class="error_message">* <?php echo $nameErr;?></div>
            </div><br>
            <label for="password">Password:</label><br>
            <div class="input_field">
            <input type="password" name="password" id="password" placeholder="PASSWORD">
            <div class="error_message">* <?php echo $passErr;?></div>
            </div><br>
            <label for="cpass">Confirm Password:</label><br>
            <div class="input_field">
            <input type="password" name="cpass" id="cpass" placeholder="CONFIRM PASSWORD">
            <div class="error_message">* <?php echo $cpassErr;?></div>
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'" name="new-pass" id="new-pass" >Update Password</button> 
            </div>
        </form>
    </div>
</body>
</html>