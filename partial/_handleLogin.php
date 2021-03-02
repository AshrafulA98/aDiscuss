<?php
$showError = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $email = $_POST['loginEmail'];
    $pass = $_POST['loginPass'];

    $sql = "select * from `users` where user_email='$email'";
    $result = mysqli_query($conn, $sql);
    $numRows = mysqli_num_rows($result);
    if($numRows==1 ){
        $row = mysqli_fetch_assoc($result);
        if(password_verify($pass, $row['password'])){
            // another way to get the username
            // $sql2 = "SELECT user_name FROM `users` WHERE user_email= '$email'";
            // $result2 = mysqli_query($conn, $sql2);
            // $row2 = mysqli_fetch_assoc($result2);
            // $name = $row2['user_name'];
            session_start();          
            $_SESSION['loggedin'] = true;
            $_SESSION['useremail'] = $email;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['userename'] = $row['user_name'];
            // echo "logged in ".$email;
            header("Location: /forum/index.php?logginsuccess=true");
            exit();

        }
        else{
            header("Location: /forum/?logginsuccess=false&&error=false");
        }
    }
    header("Location: /forum/?invalid=true");

}
?>