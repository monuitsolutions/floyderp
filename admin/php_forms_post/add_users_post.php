<?php
session_start();
include "../../server_php/server.php";
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["add_users"])) {
        $user = $_POST["users"];
        $password = $_POST["password"];
        $group = $_POST["group"];
        $users_id = $_POST["users_id"];
        if (!empty($user) && !empty($password) && !empty($group)) {
            $insert_data = "INSERT INTO `users`(`users_sno`, `users_username`, `users_password`, `users_group_name`, `users_users_id`,`users_timestamp`) VALUES(NULL, '$user',
    '$password', '$group', '$users_id', current_timestamp())";
            $sql_insert_user = mysqli_query($con, $insert_data);
            if ($sql_insert_user) {
                echo "Insert Succsessfully";
                header("location: ../");
            } else {
                echo "error =>: " . $sql_insert_user;
            }
        } else {
            header("location: ../");
        }
    } else {
        // echo "error => : " . $user_name;
    }
} else {
    header("location : ../../");
}
?>