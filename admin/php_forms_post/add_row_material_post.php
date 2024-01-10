<?php
session_start();
include ("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
    if($user_name == true){
        // Add Users In Database
        if(isset($_POST["save_row_material"])){
            $name = $_POST["stock_group"];
            $material = $_POST["material"];
            $unit = $_POST["unit"];
            $rate = $_POST["rate"];
            $packsize = $_POST["packsize"];
            $users_id = $_POST["user_id"];

            if (!empty($name) && !empty($material) && !empty($unit) && !empty($users_id)) {
                $insert_data = "INSERT INTO `stock_item`(`stock_item_sno`, `stock_item_group_id`, `stock_item_name`, `stock_item_unit_id`, `stock_item_rate_id`, `stock_item_qty_id`, `stock_item_timestamp`, `stock_item_users_id`) 
                VALUES (NULL,'$name','$material','$unit','$rate','$packsize',current_timestamp(),'$users_id')";
    
                $sql_con = mysqli_query($con, $insert_data);
    
                if ($sql_con) {
                    echo "Insert Succsessfully";
                    header("location: ../");
                } else {
                    echo "error =>: " . $sql_insert_con;
                }
            } else {
                header("location: ../");
                // echo "Error";
            }

        }else{
            echo "error => : " . $user_name;
        }
    }else{
        header("location : ../../");
    }
?>