<?php
include'header.php';

if(isset($_POST['submit'])){
    include_once'dbh.php';

    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    if(empty($user_id) || empty($password)){
        header("Location: ../SignIn.php?SignIn=You left a field empty");
                exit();
    } else{
        $sql = "SELECT* FROM users WHERE userName ='$user_id' OR email = '$user_id'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
    if($resultCheck <1){
        header("Location: ../SignIn.php?SignIn=error");
        exit();
            }else{ 
               if($row = mysqli_fetch_assoc($result)){
                    $unHarsedPassword = password_verify($password, $row['user_password'] );
                    if($unHarsedPassword == false){
                        header("Location: ../signIn.php?SignIn=error");
                        exit();
                   }
                   elseif($unHarsedPassword == true){
                    $_SESSION['userName'] = $row['userName'];
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['first_name'] = $row['first_name'];
                    $_SESSION['last_name'] = $row['last_name'];
                    header("Location: ../index.php?SignIn=success");
                        exit();
                   }

        }
    }

} } else{
    header("Location: ../SignIn.php?SignIn=failed");
    echo "An error occured pls re-submit";
    exit();}