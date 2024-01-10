<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["save_process"])) {
        $name = $_POST["name"];
        $user_id = $_POST["user_id"];
        if (!empty($name) && !empty($user_id)) {
            $insert_data = "INSERT INTO `process`(`process_sno`, `process_name`, `process_timestamp`, `process_users_id`) VALUES(NULL, '$name', current_timestamp(), '$user_id')";

            $sql_con = mysqli_query($con, $insert_data);
            if ($sql_con) {
                echo "Insert Succsessfully";
                header("location: ../");
            } else {
                echo "error =>: " . $sql_insert_user;
            }
        } else {
            header("location: ../");
        }

    } else {
        echo "error => : " . $user_name;
    }
} else {
    header("location : ../../");
}
?>