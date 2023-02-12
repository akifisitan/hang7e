<?php

include "../../config.php";

if (isset($_POST['insert'])) {
  $username = $_POST['username'];
  $alias = $_POST['alias'];
  $password = trim($_POST["password"]);
  $hashed_password = password_hash($password, PASSWORD_DEFAULT);

  $sql_statement = "INSERT INTO player (`username`, `password`, `alias`)
                    VALUES ('$username', '$hashed_password', '$alias')";
  mysqli_query($link, $sql_statement);
}
header("location: index.php");
?>
