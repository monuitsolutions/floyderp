<?php
session_start();
include("../server_php/server.php");
$users_username = $_SESSION["users_username"];

if($users_username == true) {
  $validate_users = "SELECT * FROM `users` WHERE users_username='$users_username'";
  $conn_query = mysqli_query($con, $validate_users);
  if(mysqli_num_rows($conn_query) > 0) {
    
    if($row = mysqli_fetch_assoc($conn_query)) {
      $name = $row["users_name"];
      $user_name = $row["users_username"];
    } else {
      header("location : ../index.php");
    }
  } else {
    echo "User Name and Password is Wrong";
    header("location : ../index.php");
  }
} else {
    header("location : ../../");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <?php
  include "head.php";
?>
</head>

<body>
    <section class="navbar">
        <?php
  include "header.php";
?>
    </section>
    <section class="main-container" id="showReports">
        
    </section>

    <div class="users">
        <?php
  include "buttom_user_data.php";
?>
    </div>
</body>
<script src="javascript/showreport.js"></script>
<!-- <script src="javascript/currentDateTime.js"></script> -->
</html>