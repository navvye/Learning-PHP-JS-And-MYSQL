<?php
  require_once 'login.php';
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) die("Fatal Error Cannot connect to MYSQL");
?>
