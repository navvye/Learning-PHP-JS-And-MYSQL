<?php
  require_once 'login.php';
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "DROP TABLE chessMoves";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed");
?>
