<html>
<?php
    $manager = new MongoDB\Driver\Manager("mongodb://localhost:27017");

    //$bulk = new MongoDBDriverBulkWrite;

    $username  = $_GET['username'];
    $password = $_POST['password'];

    $updateRec       = new MongoDB\Driver\BulkWrite;

    $updateRec->update(['username' =>$username], ['$set' => ['password'=>$password]]);

    #$manager = new MongoDBDriverManager('mongodb://localhost:27017');

    $writeConcern = new MongoDB\Driver\WriteConcern(MongoDB\Driver\WriteConcern::MAJORITY, 1000);

    $result = $manager->executeBulkWrite('intern_db.login_data', $updateRec,$writeConcern);

    echo "records updated successfully";
    echo"<a href='mongodbdisplay.php'> CLICK TO CHECK DB</a>";

?>
</html>