<?php
include_once 'config.php';

$username = $password = $confirm_password = " ";

$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD']== "POST"){

    if(empty(trim($_POST['username']))){
        $username_err="username cannot be blank";

    }else{
        $sql= "select id from users where username = ?";
        $stmt = mysqli_prepare($conn , $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,'s', $param_username);

            $param_username = trim($_POST['username']);

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)== 1){
                    $username_err = "This username already taken ";

                }else{
                    $username= trim($_POST['username']);
                }

            }else{
                echo "smthing went wrong";
            }
        }
        
    }

     mysqli_stmt_close($stmt);
    


//password
if(empty(trim($_POST['password']))){
    $password_err = "password cannot be blank";
    }elseif(strlen(trim($_POST['password']))<5){
           $password_err = "password should be grater than 5 characters  ";
         
    }elseif(!preg_match("/^[a-zA-Z0-9@\.]*$/", $_POST["password"])){
            $password_err = "Only alphabets, numbers and @ special character allowed.";
    }
    else{
          $password = trim($_POST['password']);

    }

//confirm password


//if no errors
if(empty($username_err) && empty($password_err)&& empty($confirm_password_err)){
    $sql= "insert into users (username , password ) values (?,?);";
    $stmt = mysqli_prepare($conn , $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

       //set parameter
       $param_username= $username;

       $param_password= password_hash($password,PASSWORD_DEFAULT);

       //EXECUTE QUERY
       if(mysqli_stmt_execute($stmt)){

        header("Location: customer.php");
       }else{
           echo "smthing went wrong";
       }
        
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);

}

?>






