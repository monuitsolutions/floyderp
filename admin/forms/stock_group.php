<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if($user_name == true) {
    $validate = "SELECT * FROM `users` WHERE users_username='$user_name'";

    $show_query_data = mysqli_query($con, $validate);
    if($row = mysqli_fetch_assoc($show_query_data)) {
        $user_id = $row["users_sno"];
        $sql_validate_data = "SELECT * FROM `stock_group`";
        $show_query_data = mysqli_query($con, $sql_validate_data);
        while($stock_group_row = mysqli_fetch_assoc($show_query_data)) {
            $stock_group_sno = $stock_group_row["stock_group_sno"]+1;
        }
    }
} else {
    header("location : ../../");
}

?>
<div class="head-container" id="close">
    <div class="header-top">
        <p>Stock Group Master</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Stock Group Masters</h2>
    <div class="form-container">
        <div class="user-form">
            <form action="php_forms_post/add_stock_group_post.php" method="post">
                <div class="group">
                    <label for="sno">S. no.</label>
                    <input type="text" name="sno" id="sno" disabled value="<?php echo $stock_group_sno; ?>">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                </div>
                <div class="group">
                    <label for="heading">Stock Group Name</label>
                    <input type="text" name="name" id="heading">
                </div>
                <div class="group">
                    <label for="type">Type</label>
                    <select name="type" id="type">
                        <option value="">select</option>
                        <!-- fetch table querys in database -->
                        <?php
                        $select_stock_group_data = "SELECT * FROM `add_group`";
                        $show_stock_group_data = mysqli_query($con, $select_stock_group_data);
                        while($row = mysqli_fetch_assoc($show_stock_group_data)) {
                            echo "<option value=".$row['group_sno'].">".$row['group_name']."</option>";
                        }
                        ?>
                    </select>
                </div>
                <div class="group">
                    <input type="submit" value="Add New">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Save" name="save_stock_group">
                </div>
            </form>
        </div>
        <div class="table-container-user">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>Stock Group</p>
                <p>User</p>
                <p>Type</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
                $stock_group = "SELECT stock_group.stock_group_name, users.users_name, add_group.group_name FROM stock_group INNER JOIN users ON stock_group.stock_group_users_id = users.users_sno INNER JOIN add_group ON stock_group.stock_group_group_id = add_group.group_sno";

                $show_stock_group = mysqli_query($con, $stock_group);
                if(mysqli_num_rows($show_stock_group)) {
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($show_stock_group)) {
                        $sno = $sno + 1;
                        echo "<div class='head-table-tbody'>";
                        echo "<p class='child-1'>".$sno."</p>";
                        echo "<p>".$row['stock_group_name']."</p>";
                        echo "<p>".$row['users_name']."</p>";
                        echo "<p>".$row['group_name']."</p>";
                        echo "</div>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>