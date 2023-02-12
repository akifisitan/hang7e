<?php
// Admin - Plays Table Delete Operation
include "../../config.php";

if (isset($_POST['delete'])) {
  $pid = $_POST['pid'];
  $gid = $_POST['gid'];
  
  $sql_statement = "DELETE FROM plays WHERE pid=$pid AND gid=$gid";
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
