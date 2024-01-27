<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if($user_name == true) {
    $users_data = "SELECT * FROM `users` WHERE users_username='$user_name'";
    $unit = "SELECT * FROM `unit`";
    $stock_group = "SELECT * FROM `stock_group`";
    $show_users_data = mysqli_query($con, $users_data);
    if($row = mysqli_fetch_assoc($show_users_data)) {
        $user_id = $row["users_sno"];
        $sql_validate_data = "SELECT * FROM `stock_item`";
        $show_query_data = mysqli_query($con, $sql_validate_data);
        while($stock_item_row = mysqli_fetch_assoc($show_query_data)) {
            $stock_item_sno = $stock_item_row["stock_item_sno"]+1;
        }
    }
    // fetch table querys in database
    // stock_item.stock_item_name, unit.unit_name, stock_group.stock_group_name 
    $sql_data = "SELECT stock_item.stock_item_name, unit.unit_sno, unit.unit_name, stock_group.stock_group_sno, stock_group.stock_group_name FROM stock_item INNER JOIN unit ON stock_item.stock_item_unit_id = unit.unit_sno INNER JOIN stock_group ON stock_item.stock_item_group_id = stock_group.stock_group_sno";

} else {
    header("location : ../../");
}

?>
<div class="material-container" id="close">
    <div class="header-top">
        <p>Material Master</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Material Masters</h2>
    <div class="form-right-container">
        <div class="form-container">
            <div class="user-form">
                <form action="php_forms_post/add_row_material_post.php" method="post">
                    <div class="group">
                        <label for="sno">S. no.</label>
                        <input type="text" name="sno" id="sno" disabled value="<?php echo $stock_item_sno; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                    </div>
                    <div class="group">
                        <label for="stockGroup">Group/Head</label>
                        <select name="stock_group" id="stockGroup">
                            <option value="">Select Group</option>
                            <!-- fetch table querys in database -->
                            <?php
                            $show_group_data = mysqli_query($con, $stock_group);
                            while($stock_group_row = mysqli_fetch_assoc($show_group_data)) {
                                echo "<option value=".$stock_group_row['stock_group_sno'].">".$stock_group_row['stock_group_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="material">Material</label>
                        <input type="text" name="material" id="material">
                    </div>
                    <div class="group">
                        <label for="unit">Unit</label>
                        <select name="unit" id="unit">
                            <!-- fetch table querys in database -->
                            <?php
                            $show_unit_data = mysqli_query($con, $unit);
                            while($unit_row = mysqli_fetch_assoc($show_unit_data)) {
                                echo "<option value=".$unit_row['unit_sno'].">".$unit_row['unit_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="rate">Rate</label>
                        <input type="text" name="rate" id="rate">
                    </div>
                    <div class="group">
                        <label for="packSize">Pack Size</label>
                        <input type="text" name="packsize" id="packSize">
                    </div>
                    <div class="group">
                        <input type="submit" value="Add New">
                        <input type="submit" value="Edit">
                        <input type="submit" value="Save" name="save_row_material">
                    </div>
                </form>
            </div>
            <div class="table-container-user">
                <div class="head-table-thead">
                    <p>Sno</p>
                    <p>Material</p>
                    <p>Unit</p>
                    <p>Stock Group</p>
                </div>
                <div class="table-container">
                    <!-- fetch table querys in database -->
                    <?php
                    $show_data = mysqli_query($con, $sql_data);
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($show_data)) {
                        $sno = $sno + 1;
                        echo "<div class='head-table-tbody'>
                          <p class='child-1'>".$sno."</p>
                          <p>".$row['stock_item_name']."</p>
                          <p>".$row['unit_name']."</p>
                          <p>".$row['stock_group_name']."</p>
                        </div>";
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="head-groups">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>Group/Heading</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
                $show_data = mysqli_query($con, $sql_data);
                $sno = 0;
                while($row = mysqli_fetch_assoc($show_data)) {
                    $sno = $sno + 1;
                    echo "<div class='head-table-tbody'>
                          <p class='child-1'>".$sno."</p>
                          <p>".$row['stock_group_name']."</p>
                        </div>";
                }
                ?>
            </div>
        </div>
    </div>