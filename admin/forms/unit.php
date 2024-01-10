<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if($user_name == true) {
    // Get Data in Database
    $validate = "SELECT * FROM `users` WHERE users_username='$user_name'";
    $show_query_data = mysqli_query($con, $validate);
    if($row = mysqli_fetch_assoc($show_query_data)) {
        $user_id = $row["users_sno"];
    } else {
        header("location : ../");
    }
} else {
    header("location : ../../");
}
?>
<div class="unit-container" id="close">
    <div class="header-top">
        <p>Unit Master</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Units Masters</h2>
    <div class="form-container">
        <div class="user-form">
            <form action="php_forms_post/add_unit_post.php" method="post">
                <div class="group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name">
                </div>
                <div class="group">
                    <label for="sno">S. no.</label>
                    <input type="text" name="sno" id="sno">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                </div>
                <div class="group">
                    <input type="submit" value="Add New">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Save" name="save_units">
                </div>
            </form>
        </div>
        <div class="table-container-user">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>Name</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
                $unit_data = "SELECT * FROM `unit`";
                $show_unit_data = mysqli_query($con, $unit_data);
                $sno = 0;
                while($row = mysqli_fetch_assoc($show_unit_data)) {
                    $sno = $sno + 1;
                    echo "<div class='head-table-tbody'>
              <p class='child-1'>".$sno."</p>
              <p>".$row['unit_name']."</p>
            </div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>