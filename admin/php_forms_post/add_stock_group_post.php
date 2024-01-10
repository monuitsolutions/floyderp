<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["save_stock_group"])) {
        $name = $_POST["name"];
        $users_id = $_POST["user_id"];
        $type = $_POST["type"];
        if (!empty($name) && !empty($users_id) && !empty($type)) {
            $insert_data = "INSERT INTO `stock_group`(`stock_group_sno`, `stock_group_name`, `stock_group_timestamp`, `stock_group_users_id`, `stock_group_group_id`) VALUES(NULL, '$name', current_timestamp(), '$users_id', '$type')";

            $sql_con = mysqli_query($con, $insert_data);
            if ($sql_con == true) {
                echo "Insert Succsessfully";
                header("location: ../");
            } else {
                echo "error =>: " . $sql_con;
            }
        } else {
            header("location: ../");
        }
    }
} else {
    header("location : ../../");
}
?>