<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $user_name = $_POST['username'];
    $user_email = $_POST['signupEmail'];
    $pass = $_POST['signupPass'];
    $cPass = $_POST['cPassword'];

    // Check whether this user_email is exists or not
    $existSql = "select * from `users` where user_email='$user_email'";
    $result = mysqli_query($conn, $existSql);
    $numRows = mysqli_num_rows($result);

    if($numRows > 0){
        $showError = "username already exists";
    }

    else{
        if($pass == $cPass){
            $hash = password_hash($pass, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` (`user_name`, `user_email`, `password`) VALUES ('$user_name','$user_email', '$hash')";
            $result2 = mysqli_query($conn, $sql); 
            if($result2){
                $showAlert = true;
                header("Location: /forum/index.php?signupsuccess=true");
                exit();
            }
        }
        else{
            $showError = "password does not matched";
        }
    }
    header("Location: /forum/index.php?signupsuccess=false&&error=$showError");
}
?>