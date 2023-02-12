<?php

include "../../config.php";

if (isset($_POST['delete'])) {
  $pid = $_POST['pid'];
  
  $sql_statement = "DELETE FROM player WHERE pid=$pid";
  mysqli_query($link, $sql_statement);
}
header("location: index.php"); 
?>
