<?php
  require_once 'login.php';
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) die("Fatal Error");

  $query  = "UPDATE chess SET moveNumber='0' WHERE gameId='"+msg.gameId+"'";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed error in mysql or code");
?>
