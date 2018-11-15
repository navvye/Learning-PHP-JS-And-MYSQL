<?php // query.php
  require_once 'login.php';
  $conn = new mysqli($hn, $un, $pw, $db);
  if ($conn->connect_error) die("Fatal Error");
$createTable = "CREATE TABLE `chess`.`chessData` ( `moveNumber` INT(3) NOT NULL , `san` CHAR(4) NOT NULL , `fen` CHAR(100) NOT NULL , `gameId` CHAR(3) NOT NULL , `fromSquare` CHAR(2) NOT NULL , `toSquare` CHAR(2) NOT NULL , `color` CHAR(1) NOT NULL , `piece` CHAR(1) NOT NULL ) ENGINE = InnoDB;";
  $query  = "SELECT * FROM classics";
  $result = $conn->query($query,$createTable);
  if (!$result) die("Fatal Error");

  $rows = $result->num_rows;

  for ($j = 0 ; $j < $rows ; ++$j)
  {
    $result->data_seek($j);
    echo 'moveNumber: '   . htmlspecialchars($result->fetch_assoc()['moveNumber'])   . '<br>';
    $result->data_seek($j);
    echo 'san: '    . htmlspecialchars($result->fetch_assoc()['san'])    . '<br>';
    $result->data_seek($j);
    echo 'fen: ' . htmlspecialchars($result->fetch_assoc()['fen']) . '<br>';
    $result->data_seek($j);
    echo 'gameId: '     . htmlspecialchars($result->fetch_assoc()['gameId'])     . '<br>';
    $result->data_seek($j);
    echo 'color: '     . htmlspecialchars($result->fetch_assoc()['color'])     . '<br><br>';
  }

 
?>
