<?php
// Admin - Plays Table Insert Operation
include "../../config.php";

if (isset($_POST['insert'])) {
  $pid = $_POST['pid'];
  $gid = $_POST['gid'];
  $wins = $_POST['wins'];
  $losses = $_POST['losses'];
  $points = $_POST['points'];
  
  $sql_statement = "INSERT INTO plays (pid, gid, wins, losses, points)
                    VALUES ($pid, $gid, $wins, $losses, $points)";
  $control_sql_statement = "SELECT * FROM plays WHERE pid=$pid AND gid=$gid";
  if (mysqli_num_rows(mysqli_query($link, $control_sql_statement)) > 0) {
    echo "Error: Duplicate entry for pid=$pid and gid=$gid";
  }
  else {
    mysqli_query($link, $sql_statement);
  }
} 
header("location: index.php");
?>
