<?php
session_start();
include ("server.php");
header('Location: ../');
session_destroy();
?>