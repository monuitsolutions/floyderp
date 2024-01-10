<?php
include "server.php";
session_start();
if(isset($_POST["login"])){

    $users_username = $_POST["username"];
    $password = $_POST["password"];

    if(!empty($users_username) || !$users_username == "" || !$users_username == " " && !empty($password) || !$password == "" || !$password == " "){
        $erp_users = "SELECT * FROM `users` WHERE users_username='$users_username' AND users_password='$password'";
        $users = mysqli_query($con, $erp_users);

        if(mysqli_num_rows($users) > 0){
            // echo "My Numbers ".$count_users;
            if($users == 1){
                $_SESSION['users_username'] = $users_username;
                header("Location: admin");
            }else{
                echo "User name and password database not Avalible";
            }
        }else{
            echo "User name and password database Mismatch";
        }
    }else{
        echo "User name and password wrong";
    }
}
?>
