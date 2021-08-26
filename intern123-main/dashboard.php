<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<style>
div {
    width:600px;
    height:400px;
    margin:100px auto;
    padding: 10px;
    border: 5px solid gray;
}
.error {color: #FF0000;}
</style>
</head>
<body>
<div>
<?php 
$username = $_POST['username'];
$_SESSION['username'] = $username;
/*$sess_id = session_id();
$sess_name = session_name();
echo "Session name: $sess_name"; echo"<br>";
echo "Session id: $sess_id";
echo"<br>";*/
echo "Welcome back " .$_SESSION['username']. " new interships are waiting for you!";
setcookie('username',$username,time() + (86400 * 30) ,"/");
?>
<center>Select the options for customised results:</center>
<form  method="POST" action="pg2.php">
  <label for="gender">Category:</label><br>
  <input type="radio" name="cat" id="cat" value="one"> Python Programmer
  <input type="radio" name="cat" id="cat" value="two"> Content Writing
  <input type="radio" name="cat" id="cat" value="three"> PR
  <input type="radio" name="cat" id="cat" value="four"> Web Programmer
  <br>
  <span class="error">*</span><br>

  <input type="submit" value="submit" name="submit" id="submit">
</form>
<?php
#setcookie($username,$id,time() + (86400 * 30) ,"/");
/*if(count($_COOKIE)>0){
    echo "Cookies are enabled"; echo"<br>";
} else{
    echo "Cookies are disabled"; echo "<br>";
}
if(!isset($_COOKIE[$sess_name])){
    echo "Session named". $sess_name ." not set!";echo "<br>";
} else{
    echo "Session ". $sess_name ." is set";echo "<br>";
}
if(!isset($_COOKIE['username'])){
    echo "Cookie named". $username ." not set!";echo "<br>";
} else{
    echo "Cookie named ". $username ." is set";echo "<br>";
}*/
?>
<!--<form method="POST" action="delcookie.php">
<input type="hidden" value=name="username" id="username">
<input type="submit" value="delete" name="delete" id="delete">-->
</form>
</div>
</body>
</html>
