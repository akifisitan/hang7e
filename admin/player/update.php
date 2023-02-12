<?php

include "../../config.php";

if (isset($_POST['update'])) {
  $username = $_POST['username'];
  $alias = $_POST['alias'];
  $password = trim($_POST['password']);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);
  $pid = $_POST['pid'];

  $sql_statement = "UPDATE player 
                    SET username='$username', password='$hashed_password', alias='$alias' 
                    WHERE pid=$pid";
  mysqli_query($link, $sql_statement);
}
header("location: index.php");
?>
