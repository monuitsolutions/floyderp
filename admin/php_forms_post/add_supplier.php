<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
    // Add Users In Database
    if (isset($_POST["save_supplier"])) {
        $name = $_POST["name"];
        $contact_person = $_POST["contact_person"];
        $address = $_POST["address"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $phone = $_POST["phno"];
        $fax = $_POST["fax"];
        $email = $_POST["mail"];
        $tin = $_POST["tin"];
        $ecc = $_POST["ecc"];
        $user_id = $_POST["user_id"];

        if (!empty($name) && !empty($contact_person) && !empty($address) && !empty($city) && !empty($phone) && !empty($fax) && !empty($email) && !empty($tin) && !empty($ecc) && !empty($user_id)) {

            $insert_data = "INSERT INTO `fp_ledger`(`ledger_sno`, `ledger_name`, `ledger_contact_person`, `ledger_address`, `ledger_city`, `ledger_state`, `ledger_phone`, `ledger_fax`, `ledger_email`, `ledger_tin`, `ledger_ecc`, `ledger_timestamp`, `ledger_user_id`) 
                VALUES (NULL,'$name','$contact_person','$address','$city','$state','$phone','$fax','$email','$tin','$ecc', current_timestamp(),'$user_id')";

            $sql_con = mysqli_query($con, $insert_data);

            if ($sql_con) {
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