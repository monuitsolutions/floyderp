<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if($user_name == true) {
    $validate = "SELECT * FROM `users` WHERE users_username='$user_name'";

    $show_query_data = mysqli_query($con, $validate);
    if($row = mysqli_fetch_assoc($show_query_data)) {
        $user_id = $row["users_sno"];
    }
} else {
    header("location : ../../");
}

?>
<div class="head-container" id="close">
    <div class="header-top">
        <p>Karigor/Employee Master</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Karigor/Employee Masters</h2>
    <div class="form-container">
        <div class="user-form">
            <form action="php_forms_post/add_employee_post.php" method="post">
                <div class="group">
                    <label for="sno">S. no.</label>
                    <input type="text" name="sno" id="sno">
                    <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                </div>
                <div class="group">
                    <label for="employeeName">Employee Name</label>
                    <input type="text" name="employee_name" id="employeeName">
                </div>
                <div class="group">
                    <label for="employeePhone">Employee Phone</label>
                    <input type="text" name="employee_phone" id="employeePhone">
                </div>
                <div class="group">
                    <label for="employeeAddress">Employee Address</label>
                    <input type="text" name="employee_address" id="employeeAddress">
                </div>
                <div class="group">
                    <label for="employeeEmail">Employee Email</label>
                    <input type="email" name="employee_email" id="employeeEmail">
                </div>
                <div class="group">
                    <label for="employeeFather">Employee Father</label>
                    <input type="text" name="employee_father" id="employeeFather">
                </div>
                <div class="group">
                    <label for="post">Post</label>
                    <select name="employee_post" id="post">
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
                    <label for="employeePan">Employee Pan No.</label>
                    <input type="text" name="employee_pan" id="employeePan">
                </div>
                <div class="group">
                    <input type="submit" value="Add New">
                    <input type="submit" value="Edit">
                    <input type="submit" value="Save" name="save_employee">
                </div>
            </form>
        </div>
        <div class="table-container-user">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>Employee Name</p>
                <p>Employee Phone</p>
                <p>Employee Post</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
                $stock_group = "SELECT * FROM employee INNER JOIN add_group ON employee.employee_post = add_group.group_sno";

                $show_stock_group = mysqli_query($con, $stock_group);
                if(mysqli_num_rows($show_stock_group)) {
                    $sno = 0;
                    while($row = mysqli_fetch_assoc($show_stock_group)) {
                        $sno = $sno + 1;
                        echo "<div class='head-table-tbody'>";
                        echo "<p class='child-1'>".$sno."</p>";
                        echo "<p>".$row['employee_name']."</p>";
                        echo "<p>".$row['employee_phone']."</p>";
                        echo "<p>".$row['group_name']."</p>";
                        echo "</div>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>