<?php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error Sometimes things dont work ");

  $query = "CREATE TABLE chessData (
    number INT NOT NULL AUTO_INCREMENT,
    san CHAR(4) NOT NULL,
    fen VARCHAR(32) NOT NULL,
    gameId INT(2) NOT NULL,
    PRIMARY KEY (id)
  )";

  $result = $conn->query($query);
  if (!$result) die ("Database access failed check Mysql connection.");
?>
