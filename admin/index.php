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
  ?>

  <!DOCTYPE html>

  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin</title>
    <link href="../css/utility.css" rel="stylesheet" type="text/css" />
    <link href="../css/login.css" rel="stylesheet" type="text/css" />
    <link href="../css/index.css" rel="stylesheet" type="text/css" />
    <link href="../css/adduser.css" rel="stylesheet" type="text/css" />
    <link href="../css/party-buyermaster.css" rel="stylesheet" type="text/css" />
    <link href="../css/suppliermaster.css" rel="stylesheet" type="text/css" />
    <link href="../css/headmaster.css" rel="stylesheet" type="text/css" />
    <link href="../css/unitmaster.css" rel="stylesheet" type="text/css" />
    <link href="../css/material.css" rel="stylesheet" type="text/css" />
    <link href="../css/grade.css" rel="stylesheet" type="text/css" />
    <link href="../css/article.css" rel="stylesheet" type="text/css" />
    <link href="../css/dragItem.css" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
    <link rel="shortcut icon" href="logo/logo.jpg" type="image/x-icon">
  </head>

  <body>
    <section class="navbar">
      <nav>
        <ul class="list">
          <li class="list-item">
            <a class="item" href="javascript:void(0)">File</a>
            <ul>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="addUsers()">Add User</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="addGroup()">Add Group</a>
              </li>
              <li><a class="item2" href="../server_php/logout.php">Log-Out</a></li>
              <hr />
              <li><a class="item2" href="../server_php/logout.php">Exit</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Master Module</a>
            <ul>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="partyMaster()">Party/Buyer Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="supplierMaster()">Supplier Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="headMaster()">Description/Head Master</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="unitMaster()">Unit Master</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="materialMaster()">Row Material Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="machineMaster()">Machine Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="gradeMaster()">Grade Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="articleMaster()">Article Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="processMaster()">Process Master</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)" onclick="icMaster()">I/C Master</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)" onclick="karigarMaster()">Karigar/Employee Master</a>
              </li>
              <hr />
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Recepies Module</a>
            <ul>
              <li><a class="item2" href="javascript:void(0)">Grade Technical Sheet</a></li>
              <li><a class="item2" href="javascript:void(0)">Grade Result</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Order Module</a>
            <ul>
              <li><a class="item2" href="javascript:void(0)">Adding/Removing Order</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Editing Order</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Cancel Order</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Close Order</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Planning Module</a>
            <ul>
              <li>
                <a class="item2" href="javascript:void(0)">Approved Order for production</a>
              </li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Issue Demand Note</a></li>
              <li>
                <a class="item2" href="javascript:void(0)">Update Stock Against Demand Note</a>
              </li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Purchase Order Module</a>
            <ul>
              <li><a class="item2" href="javascript:void(0)">Purchase Order(Open/Direct)</a></li>
              <li><a class="item2" href="javascript:void(0)">Purchase Order(Srn)</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Cancel Purchase Order</a></li>
              <li><a class="item2" href="javascript:void(0)">Close Purchase Order</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Store Module</a>
            <ul>
              <li>
                <a class="item2" href="javascript:void(0)">Store Receipt Note(W/o Order)</a>
              </li>
              <li><a class="item2" href="javascript:void(0)">Receipt Purchase Order(Srn)</a></li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)">Material Issue Note(Open/Direct)</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)">Material Issue Note(Semi/Direct)</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)">Material Issue Note(Gate Pass)</a>
              </li>
              <hr />
              <li>
                <a class="item2" href="javascript:void(0)">Edit/Remove Store Receive Note</a>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)">Edit/Remove Store Issue Note</a>
              </li>
              <hr />
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Production Module</a>
            <ul>
              <li><a class="item2" href="javascript:void(0)">Receive Demand Note</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Finish Goods Entry</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Transfer Finish Goods</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Invoicing Module</a>
            <ul>
              <li><a class="item2" href="javascript:void(0)">Issue Material Invoice</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Issue Commercial Invoice</a></li>
              <hr />
              <li><a class="item2" href="javascript:void(0)">Issue Direct Sale</a></li>
            </ul>
          </li>
          <li class="list-item">
            <a class="item" href="javascript:void(0)">Reports</a>
            <ul class="list2">
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Master Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Party Report</a></li>
                  <li><a href="javascript:void(0)">Supplier Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Description Report</a></li>
                  <li><a href="javascript:void(0)">Material Report</a></li>
                  <li><a href="javascript:void(0)">Unit</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Grade Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Article Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Process Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Incharge Report</a></li>
                  <li><a href="javascript:void(0)">Karigar/Employe Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Grade Technical Report</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Order Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Order Report</a></li>
                  <li><a href="javascript:void(0)">Print Material Requirement</a></li>
                  <li><a href="javascript:void(0)">Print Order in Hand</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Purchase Order Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Purchase Order</a></li>
                  <li><a href="javascript:void(0)">Print Purchase Order Status</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Store Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Issue Report</a></li>
                  <li><a href="javascript:void(0)">Print Receipt Report</a></li>
                  <li><a href="javascript:void(0)">Print Daily Issue/Receive</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Print Stock Report</a></li>
                  <li><a href="javascript:void(0)">Print Stock Ledger Report</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Finish Goods Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Issue Report</a></li>
                  <li><a href="javascript:void(0)">Print Direct Issue Report</a></li>
                  <li><a href="javascript:void(0)">Print Receive Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Print Finished Goods</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Production Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Demand Notes</a></li>
                  <li><a href="javascript:void(0)">Demand Note Issue Report</a></li>
                  <li><a href="javascript:void(0)">Demand Note Receive Report</a></li>
                  <hr />
                  <li><a href="javascript:void(0)">Demand Note Status</a></li>
                  <li><a href="javascript:void(0)">Show Finish Goods in Stock</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Invoicing Reports</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Print Invoice</a></li>
                  <li><a href="javascript:void(0)">Print Invoice Report</a></li>
                </ul>
              </li>
              <li>
                <a class="item2" href="javascript:void(0)"><i class="fa-solid fa-chevron-left"
                    style="color: javascript:void(0)ffffff"></i>
                  Mis Module</a>
                <ul class="list3">
                  <li><a href="javascript:void(0)">Production Pipeline Reports</a></li>
                  <li><a href="javascript:void(0)">Mis Reports</a></li>
                  <li><a href="javascript:void(0)">Print QT Report</a></li>
                </ul>
              </li>
            </ul>
          </li>
        </ul>
        <li class="list-item logout">
          <a class="item" href="../server_php/logout.php">Log-Out</a>
        </li>
      </nav>
    </section>
    <section class="main-container" id="showReports">
      <!-- <button type="button" onclick="loadXMLDoc()">Change Content</button> -->


      <div class="users">
        <input type="text" value="<?php echo $name; ?>" disabled />
        <input type="text" value="<?php echo $user_name; ?>" disabled />
        <div class="" id="showDateTime">Date</div>
        <!-- <input type="text" id="showDateTime"> -->
      </div>
    </section>
  </body>
  <script src="javascript/showreport.js"></script>
  <script src="javascript/currentDateTime.js"></script>
  <script src="javascript/users.js"></script>

  </html>
  <?php
} else {
  header("location : ../../");
}
?>