const showReports = document.getElementById("showReports");

// Adding Users in fill form
function addUsers() {
  console.log("click add Users");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/users.php", true);
  xhttp.send();
}

// // Adding Groups in fill form
function addGroup() {
  // console.log("click add Users");
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/group.php", true);
  xhttp.send();
}

// Adding Party buyers
function partyMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "forms/party_buyer.php", true);
  xhttp.send();
}

// Adding Suppliers
function supplierMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/supplier.php", true);
  xhttp.send();
}

// Adding Head Master
function headMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/stock_group.php", true);
  xhttp.send();
}

// Adding Units
function unitMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/unit.php", true);
  xhttp.send();
}

// Adding Material Master
function materialMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/row_material.php", true);
  xhttp.send();
}

// Adding Machine Master
function machineMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/machine.php", true);
  xhttp.send();
}

// Adding Grade Master
function gradeMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/grade.php", true);
  xhttp.send();
}

// Adding Article Master
function articleMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/article.php", true);
  xhttp.send();
}

// Adding Process Master
function processMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/process.php", true);
  xhttp.send();
}

// Adding I/C Master
function icMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/ic.php", true);
  xhttp.send();
}

// Adding Karigar Master
function karigarMaster() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/karigar.php", true);
  xhttp.send();
}

// Adding Orders Master
function addOrders() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/add_orders.php", true);
  xhttp.send();
}

// Editing Orders Master
function editOrders() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("showReports").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "forms/edit_orders.php", true);
  xhttp.send();
}
