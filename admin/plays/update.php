<?php
// Admin - Plays Table Update Operation
include "../../config.php";

if (isset($_POST['update'])) {
  $pid = $_POST['pid'];
  $gid = $_POST['gid'];
  $wins = $_POST['wins'];
  $losses = $_POST['losses'];
  $points = $_POST['points'];
  
  $sql_statement = "UPDATE plays 
                    SET pid=$pid, gid=$gid, wins=$wins, losses=$losses, points=$points
                    WHERE pid=$pid AND gid=$gid";
  $control_sql_statement = "SELECT * FROM plays WHERE pid=$pid AND gid=$gid";
  if (mysqli_num_rows(mysqli_query($link, $control_sql_statement)) == 0) {
    echo "Error: No entry for pid=$pid and gid=$gid";
  }
  else {
    mysqli_query($link, $sql_statement);
  }
} 
header("location: index.php");
?>

