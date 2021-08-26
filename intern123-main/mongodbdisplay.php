<!DOCTYPE html>
<html>
<head>
  <title>MONGO DISPLAY</title>
</head>
<body>
<?php
$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");
$message ='';

$filter = [];
$options = [
    'sort' => ['_id' => -1],
];
$query = new MongoDB\Driver\Query($filter, $options);
$cursor = $manager->executeQuery('intern_db.login_data', $query);

?>
<table class='table table-bordered'>
   <thead>
      <tr>
            <th>#</th>
            <th>Username</th>
            <th>Password</th>
            <th>Update</th>
            <th>Delete</th>
      </tr>
  
   </thead>
    <?php 
    $i =1; 
    foreach ($cursor as $document) {   ?>
      <tr>
      <td><?php echo $i; ?></td>
      <td><?php echo $document->username;  ?></td>
      <td><?php echo $document->password;  ?></td>        
      <td><?php echo"<a href='mongo_updt_form.php?username=$document->username'> UPDATE PASSWORD</a>";?></td>
      <td><?php echo"<a href='mongodelete.php?username=$document->username'> DELETE RECORD</a>";?></td>

      </tr>
     <?php $i++;  
  } 
  ?>
</table>
<?php echo"<br>";?>
<?php echo"<a href='mongo_login.php'> CLICK TO ADD MORE USERS</a>";?>
</body>
</html>
