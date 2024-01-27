<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["add_orders"])) {
        $company_name = $_POST["c_name"];
        $po_no = $_POST["po_no"];
        $po_date = $_POST["po_date"];
        $article_name = $_POST["article_name"];
        $qty = $_POST["qty"];
        $delivery_date = $_POST["delivery_date"];
        if (!empty($company_name) && !empty($po_date) && !empty($article_name)) {
            $insert_data = "INSERT INTO `add_orders`(`orders_sno`, `company_name_id`, `po_no`, `po_date`, `article_name_id`, `order_qty`, `delivery_date`, `timestamp`) VALUES ( NULL,'$company_name','$po_no','$po_date','$article_name','$qty', '$delivery_date', current_timestamp())";

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