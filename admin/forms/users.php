<?php
session_start();
include "../../server_php/server.php";
// include "../php_forms_post/add_users_post.php";
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

<div class="adduser-container" id="close">
    <div class="header-top" id="close">
        <p>Adding/Modifying Users</p>
        <span onclick="document.getElementById('close').style.display = 'none'"><i class="fa-solid fa-xmark"
                style="color: #fff"></i></span>
    </div>
    <h2>Adding/Modifying Users</h2>
    <div class="form-container">
        <div class="table-container-user">
            <div class="head-table-thead">
                <p>Sno</p>
                <p>User Name</p>
                <p>Group Name</p>
            </div>
            <div class="table-container">
                <!-- fetch table querys in database -->
                <?php
        // Get Data in Database
        $user_data = "SELECT * FROM `users`";
        $show_user_data = mysqli_query($con, $user_data);
        $sno = 0;
        while($row = mysqli_fetch_assoc($show_user_data)) {
          $sno = $sno + 1;
          echo "<div class='head-table-tbody'>
              <p class='child-1'>".$sno."</p>
              <p>".$row['users_username']."</p>
              <p>".$row['users_group_name']."</p>
            </div>";
        }
        ?>
            </div>
        </div>
        <div class="user-form">
            <fieldset>
                <legend>Adding User</legend>
                <form action="php_forms_post/add_users_post.php" method="post" id="usersForm">
                    <div class="group">
                        <label for="user">User Name</label>
                        <input type="text" name="users" id="user" />
                        <input type="hidden" name="users_id" value="<?php echo $user_id; ?>" />
                    </div>
                    <div class="group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" />
                    </div>
                    <div class="group">
                        <label for="confirm">Confirm</label>
                        <input type="text" name="confirm" id="confirm" />
                    </div>
                    <div class="group">
                        <label for="group">Group</label>
                        <select name="group" id="group">
                            <option value="">Select</option>
                            <option value="Administrator">Administrator</option>
                            <option value="Admin">Admin</option>
                            <option value="User">User</option>
                        </select>
                    </div>
                    <div class="group">
                        <input type="submit" value="Add User" name="add_users" />
                        <!-- <button type="button" class="btn btn-primary" name="add_users">Add User</button> -->
                        <a class="btn" id="" href="#">Close</a>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>
</div>