<html>
<?php

$manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

  
      
      $username  = $_GET['username'];
      //$password = $_POST['password'];

      
         
           $delRec       = new MongoDB\Driver\BulkWrite;
           #$delRec->insert(['username' =>$username, 'password'=>$password]);
           $delRec->delete(['username' =>$username], ['limit' => 1]);
          
           $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);
         
             $result       = $manager->executeBulkWrite('intern_db.login_data', $delRec, $writeConcern);
       echo "records deleted successfully";
       echo"<a href='mongodbdisplay.php'> CLICK TO CHECK DB</a>";
                  
  ?>
</html>

