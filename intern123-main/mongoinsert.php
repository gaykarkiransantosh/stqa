<html>
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  
      
      $username  = $_POST['username'];
      $password = $_POST['password'];

      
         
           $insRec       = new MongoDB\Driver\BulkWrite;
           $insRec->insert(['username' =>$username, 'password'=>$password]);
          
           $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
         
             $result       = $manager->executeBulkWrite('intern_db.login_data', $insRec, $writeConcern);
       echo "records inserted successfully";
       echo"<a href='mongodbdisplay.php'> CLICK TO CHECK DB</a>";
                  
  ?>
</html>
