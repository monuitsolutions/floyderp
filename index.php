<?php
  include "server_php/users_login.php";
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Erp Login</title>
  <link href="css/utility.css" rel="stylesheet" type="text/css" />
  <link href="css/login.css" rel="stylesheet" type="text/css" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet" />
</head>

<body>
  <div class="login">
    <div class="login-container">
      <h2>Erp Login</h2>
      <hr />
      <form method="post">
        <div class="group">
          <i class="fa-solid fa-user fa-2xl" style="color: #904bac;"></i>
          <input class="border-left" type="text" name="username" placeholder="Enter User Id" id="userId">
        </div>
        <div class="group">
          <i class="fa-solid fa-lock fa-2xl" style="color: #904bac;"></i>
          <input class="border-left" type="password" name="password" placeholder="Enter User Password" id="password">
        </div>
        <div class="group none">
          <input type="" name="" value="" disabled>
          <input type="submit" name="login" value="Login">
        </div>
      </form>
    </div>
  </div>
  <script src="script.js"></script>
</body>

</html>