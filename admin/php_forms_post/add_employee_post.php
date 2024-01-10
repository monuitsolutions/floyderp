<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["save_employee"])) {
        $name = $_POST["employee_name"];
        $phone = $_POST["employee_phone"];
        $address = $_POST["employee_address"];
        $email = $_POST["employee_email"];
        $father = $_POST["employee_father"];
        $post = $_POST["employee_post"];
        $pan = $_POST["employee_pan"];
        $users_id = $_POST["user_id"];
        if (!empty($name) && !empty($phone) && !empty($address) && !empty($email) && !empty($father) && !empty($post) && !empty($pan) && !empty($users_id)) {
            $insert_data = "INSERT INTO `employee`(`employee_sno`, `employee_name`, `employee_phone`, `employee_address`, `employee_email`, `employee_father`, `employee_post`, `employee_pan_no`, `employee_timestamp`, `employee_users_id`) VALUES(NULL,'$name','$phone','$address','$email','$father','$post','$pan',current_timestamp(),'$users_id')";

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