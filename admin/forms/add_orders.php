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
        $sql_validate_data = "SELECT * FROM `add_orders`";
        $show_query_data = mysqli_query($con, $sql_validate_data);
        while($orders_row = mysqli_fetch_assoc($show_query_data)) {
            $orders_sno = $orders_row["orders_sno"]+1;
        }
    } else {
        header("location : ../");
    }
} else {
    header("location : ../../");
}
?>
<div class="add-orders-container" id="close">
    <div class="header-top">
        <p>Add Orders Master</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff;"></i></span>
    </div>
    <h2>Add Orders Master</h2>
    <div class="form-container">
        <div class="user-form">
            <form action="php_forms_post/add_orders_post.php" method="post">
                <div class="row-group">
                    <div class="group">
                        <label for="sno">S. no.</label>
                        <input type="text" name="sno" id="sno" disabled value="<?php echo $orders_sno; ?>">
                        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
                    </div>
                    <div class="group">
                        <label for="cName">Comppany Name</label>
                        <select name="c_name" id="cName">
                            <option value="">Select Company</option>
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
                        <input type="text" name="po_no" id="po">
                    </div>
                    <div class="group">
                        <label for="poDate">P.O Date</label>
                        <input type="date" name="po_date" id="poDate">
                    </div>
                </div>
                <div class="row-group">
                    <div class="group">
                        <label for="articleName">Article Name</label>
                        <select name="article_name" id="articleName">
                            <option value="">Select Article</option>
                            <!-- fetch table querys in database -->
                            <?php
                            $item = "SELECT * FROM `order_item`";
                            $item_data = mysqli_query($con, $item);
                            while($item_row = mysqli_fetch_assoc($item_data)) {
                                echo "<option value=".$item_row['item_sno'].">".$item_row['item_name']."</option>";
                            }
                            ?>
                        </select>
                    </div>
                    <div class="group">
                        <label for="qty">Qty</label>
                        <input type="text" name="qty" id="qty">
                    </div>
                </div>
                <div class="row-group">
                    <div class="group">
                        <label for="dDate">Delivery Date</label>
                        <input type="date" name="delivery_date" id="dDate">
                    </div>
                    <div class="group">
                        <input type="submit" value="Save" name="add_orders">
                    </div>
                </div>
            </form>
        </div>
        <div class="table-container-user">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>Article Name</p>
                <p>Qty</p>
                <p>Company Name</p>
                <p>Po No.</p>
                <p>Po Date</p>
                <p>Delivery Date</p>
                <p>Edits</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
                // order_item.item_name, qty.qty, fp_ledger.ledger_name, add_orders.po_no, add_orders.po_date, add_orders.delivery_date_id
                $order_data = "SELECT * FROM add_orders INNER JOIN order_item ON order_item.item_sno = add_orders.article_name_id INNER JOIN fp_ledger ON fp_ledger.ledger_sno = add_orders.company_name_id";
                $show_data = mysqli_query($con, $order_data);
                $sno = 0;
                while($row = mysqli_fetch_assoc($show_data)) {
                    $sno = $sno + 1;
                    echo "<div class='head-table-tbody'>
              <p class='child-1'>".$sno."</p>
              <p>".$row['item_name']."</p>
              <p>".$row['order_qty']."</p>
              <p>".$row['ledger_name']."</p>
              <p>".$row['po_no']."</p>
              <p>".$row['po_date']."</p>
              <p>".$row['delivery_date']."</p>
              <p class='btn-icon'><a href=href='".$_SERVER['PHP_SELF'].'?id='.$row[0]'."><i class='fa-solid fa-square-pen fa-xl'></i></a></p>
              </div>";
            }
            ?>
            <!-- // ---- new
                    $html .= '<a href="'.$_SERVER['PHP_SELF'].'?id='.$row[0].'">Vote Up</a>';               
                    //------- -->
            <!-- <p class='btn-icon'><a href='edit_orders.php?'><i class='fa-solid fa-square-pen fa-xl'></i></a></p> -->
            </div>
        </div>
    </div>
</div>