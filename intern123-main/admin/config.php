<?php
// connect to the database
$conn = mysqli_connect('remotemysql.com', 'UfLOaliJqO', '4PlQ2COs67', "UfLOaliJqO");
// check connection
if(!$conn){
echo 'Connection error: '. mysqli_connect_error();
}
?>
