<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["create_ledger"])) {
        $name = $_POST["name"];
        $contact_person = $_POST["contact_person"];
        $address = $_POST["address"];
        $cuntry = $_POST["cuntry"];
        $phone = $_POST["phone"];
        $fax = $_POST["fax"];
        $tin = $_POST["tin"];
        $ecc = $_POST["ecc"];
        $agent = $_POST["agent"];
        $user_id = $_POST["user_id"];

        if (!empty($name) && !empty($contact_person) && !empty($address) && !empty($cuntry) && !empty($phone) && !empty($fax) && !empty($tin) && !empty($ecc) && !empty($agent) && !empty($user_id)) {

            $insert_data = "INSERT INTO `fp_ledger`(`ledger_sno`, `ledger_name`, `ledger_contact_person`, `ledger_address`, `ledger_country`, `ledger_phone`, `ledger_fax`, `ledger_tin`, `ledger_ecc`, `ledger_agent_name`, `ledger_timestamp`, `ledger_user_id`) 
                VALUES (NULL,'$name','$contact_person','$address','$cuntry','$phone','$fax','$tin','$ecc','$agent',current_timestamp(),'$user_id')";

            $sql_insert_con = mysqli_query($con, $insert_data);

            if ($sql_insert_con) {
                echo "Insert Succsessfully";
                header("location: ../");
            } else {
                echo "error =>: " . $sql_insert_con;
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