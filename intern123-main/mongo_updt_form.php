<?php
#session_start();

/*if(isset($_SESSION['username'])){

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
      }elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["password"])){
        $passErr = "Check Password Input";
  
      }else{
        $pass = test_input($_POST["password"]);
        $pass = filter_var($_POST["password"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
      } 
      if(empty($nameErr)&&empty($passErr)){
        #header('Location: index.php?username='.$username);
        #$sql = "select id ,username, password from users where username = ? ";
        $sql = "SELECT user_id ,username, userpass FROM login_data WHERE username=?"; 
    
        $stmt =  mysqli_prepare($conn,$sql);
  
        mysqli_stmt_bind_param($stmt, "s" , $param_username);
        $param_username = $username;
        if(mysqli_stmt_execute($stmt)){
          mysqli_stmt_store_result($stmt);
          if(mysqli_stmt_num_rows($stmt)==1){
            mysqli_stmt_bind_result($stmt,$id,$username,$hashed_password);
            if(mysqli_stmt_fetch($stmt)){
              if($pass == $hashed_password){
                //allow to login
                session_start();
                $_SESSION["id"]= $id;
                $_SESSION["loggedin"]= true; 
                //redirect
                header("Location:mongoinsert.php");
              }
            }
          } 
          else{
            $LoginErr = "You are a new user! Sign In to get started";
          }
        }
      }
  }*/
?>

<!DOCTYPE html>
<html>
<head>
  <title>UPDATE</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <script type="text/javascript" src="scripts.js"></script>
</head>
<body>

  <div class="wrapper">
        <h1>Update Login credentials</h1><br>
        <?php $username  = $_GET['username'];?>

        <form action="mongoupdate.php?username=<?php echo $username;?>" method="POST" >
            <div class="input_field">
                <label for="username">Old Username<span class="error">*</label>
                <br>
                <input type="text" name="username" id="username" placeholder=<?php echo $username;?> disabled>
            </div>
            <br>

            <div class="input_field">
                <label for="password">New Password<span class="error">*</label>
                <br>
                <input type="password" name="password" id="password" placeholder="PASSWORD" >
            </div>
            <br>
            <div class="btn">
                <button type="submit" onmouseover="style.color='red'" onmouseout="style.color='black'">Update</button> 
            </div>
            <br>
        </form>
    </div>
</body>
</html>