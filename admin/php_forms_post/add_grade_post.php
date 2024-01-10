<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["add_grade"])) {
        $name = $_POST["name"];
        $user_id = $_POST["user_id"];
        if (!empty($name) && !empty($user_id)) {
            $insert_data = "INSERT INTO `grade`(`grade_sno`, `grade_name`, `grade_timestamp`, `grade_users_id`) VALUES(NULL, '$name', current_timestamp(), '$user_id')";
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
        echo "error => : " . $user_name;
    }
} else {
    header("location : ../../");
}
?>