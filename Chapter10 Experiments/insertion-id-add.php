<?php
  require_once 'login.php';
  $conn = new mysqli($hostname, $username, $password, $database);
  if ($conn->connect_error) die("Fatal Error");
  
  $query  = "INSERT INTO chess(san,fen,gameId,color,piece,fromSquare,toSquare) VALUES(e4, 'rnbqkbnr/pppppppp/8/8/4P3/8/PPPP1P1P/RNBQKBNR w KQkq', '77', 'w','p','e2','e4')";
  $result = $conn->query($query);
  if (!$result) die ("Database access failed cannot connect to MySQL");

?>
