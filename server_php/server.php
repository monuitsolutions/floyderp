<?php
$con = new mysqli("localhost","root","","fp_erp");

if(!$con){
    die("Connaction Error : " . mysqli_error($con));
}else{
    // echo "Server connected ";
}
?>