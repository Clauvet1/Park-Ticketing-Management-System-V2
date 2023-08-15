<?php

if(isset($_POST['submit'])){
    include_once'dbh.php';

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_id = $_POST['user_id'];

    if(empty('$fname')|| empty('$lname') || empty('$email') || empty('$password') || empty('$user_id')){
        header("Location: ../SignUp.php?SignUp=You left a field empty");
                exit();
    }else{
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                header("Location: ../SignUp.php?SignUp=Invalid inputs email");
                exit();
            }
            else{
                $sql= "SELECT* FROM users WHERE username=$user_id";
                $result = mysqli_query($conn, $sql);
                $resultCheck = mysqli_num_rows($result);

                if($resultCheck >0){
                    header("Location: ../SignUp.php?SignUp=User alread exists");
                    exit();
                }else{
            $hashedPwd = password_hash($password, PASSWORD_DEFAULT);
     $sql = "INSERT INTO users (first_name, last_name, email, user_password, userName)
            VALUES ('$fname', '$lname', '$email', '$hashedPwd', '$user_id');";
    mysqli_query($conn, $sql);
    header("Location: ../signIn.php?SignUp=success");
    exit();   
}}}}else{
    echo "An error occured pls re-submit";
    exit();    
}