<?php
session_start();
include("../../server_php/server.php");
$user_name = $_SESSION["users_username"];
if ($user_name == true) {
  $users_data = "SELECT * FROM `users` WHERE users_username='$user_name'";

  $show_users_data = mysqli_query($con, $users_data);
  if(mysqli_num_rows($show_users_data) > 0) {
    if ($row = mysqli_fetch_assoc($show_users_data)) {
      $user_id = $row["users_sno"];
      $sql_validate_data = "SELECT * FROM `fp_ledger`";
      $show_query_data = mysqli_query($con, $sql_validate_data);
      while($ledger_row = mysqli_fetch_assoc($show_query_data)) {
          $ledger_sno = $ledger_row["ledger_sno"]+1;
      }
      
    } else {
      echo "Record not Avalible";
    }
  }else{
    echo "Record not found";
  }
} else {
  header("location : ../../");
}

?>
<div class="partybuyer-container" id="close">
  <div class="header-top">
    <p>Customer/Buyer Master</p>
    <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
        style="color: #fff"></i></span>
  </div>
  <h2>Customer/Buyer Master</h2>
  <div class="form-container">
    <div class="user-form">
      <form action="php_forms_post/add_party_buyer.php" method="post">
        <div class="group">
          <label for="sno">S. no.</label>
          <input type="text" id="sno" disabled value="<?php echo $ledger_sno; ?>" />
        </div>
        <div class="group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" />
        </div>
        <div class="group">
          <label for="contactPerson">Contact Person</label>
          <input type="text" name="contact_person" id="contactPerson" />
        </div>
        <div class="group">
          <label for="address">Address</label>
          <textarea name="address" id="address" rows="2"></textarea>
        </div>
        <div class="group">
          <label for="cuntry">Cuntry</label>
          <input type="text" name="cuntry" id="cuntry" />
        </div>
        <div class="group">
          <label for="phone">Phone</label>
          <input type="text" name="phone" id="phone" />
        </div>
        <div class="group">
          <label for="fax">Fax</label>
          <input type="text" name="fax" id="fax" />
        </div>
        <div class="group">
          <label for="tin">Tin No.</label>
          <input type="text" name="tin" id="tin" />
        </div>
        <div class="group">
          <label for="ecc">Ecc. No.</label>
          <input type="text" name="ecc" id="ecc" />
        </div>
        <div class="group">
          <label for="agent">Agent Name</label>
          <input type="text" name="agent" id="agent" />
        </div>
        <!-- <div class="group"> -->
        <!-- <label for="agent">Agent Name</label> -->
        <input type="hidden" name="user_id" value="<?php echo $user_id; ?>" />
        <!-- </div> -->
        <div class="group">
          <input type="submit" value="Add New" />
          <input type="submit" value="Edit" />
          <input type="submit" value="Save" name="create_ledger" />
        </div>
      </form>
    </div>
    <div class="table-container-user">
      <div class="head-table-thead">
        <p>Sno</p>
        <p>Party Name</p>
        <p>Address</p>
        <p>Country</p>
      </div>
      <div class="table-container">
        <!-- fetch table querys in database -->
        <?php
        $select_ledger_data = "SELECT * FROM `fp_ledger`";
        $show_ledger_data = mysqli_query($con, $select_ledger_data);
        if(mysqli_num_rows($show_ledger_data) > 0){
          $sno = 0;
          while ($row = mysqli_fetch_assoc($show_ledger_data)) {
            $sno = $sno + 1;
            echo "<div class='head-table-tbody'>
                <p class='child-1'>" . $sno . "</p>
                <p>" . $row['ledger_name'] . "</p>
                <p>" . $row['ledger_address'] . "</p>
                <p>" . $row['ledger_country'] . "</p>
              </div>";
          }
        }else{
          echo "No Record Found";
        }

        ?>
      </div>
    </div>
  </div>
</div>