<?php
include_once '../config.php';
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

$fullname=$branch=$username = $password = $confirm_password = " ";

$fullname_err=$branch_err=$username_err = $password_err = $confirm_password_err = "";

if($_SERVER['REQUEST_METHOD']== "POST"){

    if(empty(trim($_POST['username1']))){
        $username_err="username cannot be blank";

    }else{
        $sql= "select id from teachers where username1 = ?";
        $stmt = mysqli_prepare($conn , $sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,'s', $param_username);

            $param_username = trim($_POST['username1']);

            if(mysqli_stmt_execute($stmt)){

                mysqli_stmt_store_result($stmt);
                if(mysqli_stmt_num_rows($stmt)== 1){
                    $username_err = "This username already taken ";

                }else{
                    $username= trim($_POST['username1']);
                }

            }else{
                echo "smthing went wrong";
            }
        }
          



    }

     mysqli_stmt_close($stmt);

// //fullname
// if(empty(trim($_POST['fullname']))){
//     $fullname_err = "Please enter your fullname";
// }elseif(!preg_match("/^[a-zA-Z\.]*$/",$_POST['fullname'])){
//     $fullname_err = "Please enter valid inputs";
// }else{
//     $fullname = test_input($_POST["fullname"]);
//     $fullname = filter_var($_POST["fullname"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// }

// //branch
// if(empty(trim($_POST['branch']))){
//     $branch_err = "Please enter your fullname";
// }elseif(!preg_match("/^[a-zA-Z\.]*$/",$_POST['branch'])){
//     $branch_err = "Please enter valid inputs";
// }else{
//     $branch = test_input($_POST["branch"]);
//     $branch = filter_var($_POST["branch"], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
// }

    


//password
if(empty(trim($_POST['password']))){
    $password_err = "password cannot be blank";
    }elseif(strlen(trim($_POST['password']))<5){
           $password_err = "password should be grater than 5 characters  ";
         
    }else{
          $password = trim($_POST['password']);

    }

// //confirm password
// if(trim($_POST['password']) != trim($_POST['confirm_password'])){
//     $confirm_password_err = "password doesent match ";

// }

//if no errors
if(empty($username_err) && empty($password_err)&& empty($confirm_password_err)){
    $sql= "insert into teachers (username1 , password ) values (?,?);";
    $stmt = mysqli_prepare($conn , $sql);
    if($stmt){
        mysqli_stmt_bind_param($stmt, "ss", $param_username, $param_password);

       //set parameter
       $param_username= $username;

       $param_password= password_hash($password,PASSWORD_DEFAULT);

       //EXECUTE QUERY
       if(mysqli_stmt_execute($stmt)){

        header("Location: jobgiver.php");
       }else{
           echo "smthing went wrong";
       }
        
    }
    mysqli_stmt_close($stmt);
}
mysqli_close($conn);

}

?>
