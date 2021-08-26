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
$type = $_POST['cat'];
$_SESSION['cat'] = $type;
if($type == "one"){
    $option = "Python Programmer";
}  
else if($type == "two"){
    $option = "Content Writing";
} 
else if($type == "three"){
    $option = "PR";
}
else if($type == "four"){
    $option = "Web Programmer";
}
echo $_SESSION['username']. " you selected ".$option." options. Your results are:";
?>
<a href ="logout.php">Logout from the current session.</a>
</form>
</div>
</body>
</html>
