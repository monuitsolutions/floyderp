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
<div class="edit-orders-container" id="close">
    <div class="header-top">
        <p>Edit Orders</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Edit Orders</h2>
    <div class="form-container">
        <div class="user-form">
            <form action="php_forms_post/add_orders_post.php" method="post">
                <div class="row-group">
                    <div class="group">
                        <label for="sno">S. no.</label>
                        <input type="text" name="sno" id="sno" disabled value="<?php echo $sno; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                    </div>
                    <div class="group">
                        <label for="cName">Comppany Name</label>
                        <select name="c_name" id="cName">
                            <option value="<?php echo $c_sno_value ?>"><?php echo !empty($c_name); ?></option>
                            <!-- fetch table querys in database -->
                            <?php
                            $fp_ledger = "SELECT * FROM `fp_ledger`";
                            $fp_ledger_data = mysqli_query($con, $fp_ledger);
                            while($fp_ledger_row = mysqli_fetch_assoc($fp_ledger_data)) {
                                echo "<option value=".$fp_ledger_row['ledger_sno'].">".$fp_ledger_row['ledger_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="row-group">
                    <div class="group">
                        <label for="po">P.O No.</label>
                        <input type="text" name="po_no" id="po" value="<?php echo !empty($po_no); ?>">
                    </div>
                    <div class="group">
                        <label for="poDate">P.O Date</label>
                        <input type="text" name="po_date" id="poDate" value="<?php echo !empty($po_date); ?>">
                    </div>
                </div>
                <div class="row-group">
                    <div class="group">
                        <label for="articleName">Article Name</label>
                        <input type="text" name="article_name" id="articleName" value="<?php echo !empty($article); ?>">
                    </div>
                    <div class="group">
                        <label for="qty">Qty</label>
                        <input type="text" name="qty" id="qty" value="<?php echo !empty($qty); ?>">
                    </div>
                </div>
                <div class="row-group">
                    <div class="group">
                        <label for="dDate">Delivery Date</label>
                        <input type="text" name="delivery_date" id="dDate" value="<?php echo !empty($d_date); ?>">
                    </div>
                    <div class="group">
                        <input type="button" value="Edit Order" name="">
                        <input type="submit" value="Save" name="edit_orders">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>