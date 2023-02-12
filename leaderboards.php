<?php

include "config.php";
// Initialize the session
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="leaderboards-style.css">
    <title>Leaderboards</title>
</head>

<body>
<div class="topnav">
    <a style="background-color: black" href="index.php">Home</a>
    <!--Later: <a style="background-color: darkgreen" href="#support">Support</a>-->
    <a style="background-color: #3b3b86" href="leaderboards.php">Leaderboards</a>
    <?php 
    // Show the games and the logout button if the user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : ?>
    <a style="background-color: darkgoldenrod" href="hangman/game.php">Hangman</a>
    <a style="background-color: darkorange" href="word7e/game.php">Word7e</a>
    <a style="background-color: red; float: right" href="logout.php"> Logout</a>
    <?php 
    // Show the login and sign up buttons if the user is not logged in
    else : ?>
    <a style="background-color: darkmagenta; float: right" href="login.php"> Login</a>
    <a class="dark" style="background-color: darkblue; float:right" href="register.php" >Sign Up</a>
    <?php endif; 
    ?>
  </div>
  <div class="row">
    <div class="column">
      <table class="word7e">
        <h1>Word7e</h1>
        <tr><th>ALIAS</th><th>POINTS</th><th>WINS</th><th>LOSSES</th></tr>
        <?php
        $sql_statement = "SELECT username, alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=1) 
                            ORDER BY points DESC, wins DESC, losses, alias";
        $result = mysqli_query($link, $sql_statement);
        while($row = mysqli_fetch_assoc($result)) {
          if ($row['username'] != "admin") {
            $alias = $row['alias'];
            $points = $row['points'];
            $wins = $row['wins'];
            $losses = $row['losses'];
            if (isset($_SESSION["username"]) && $row['username'] == $_SESSION['username']) {
              echo "<tr style='color: darkcyan; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;'><td>" . $alias . "</td><td>" . $points . "</td><td>" . $wins . "</td><td>"
                . $losses . "</td></tr>";
            }
            else {
              echo "<tr><td>" . $alias . "</td><td>" . $points . "</td><td>" . $wins . "</td><td>"
                . $losses . "</td></tr>";
            }
          }
        }
        ?>
      </table>
    </div>
    <div class="column">
      <table class="hangman">
        <h1>Hangman</h1>
        <tr><th>ALIAS</th><th>POINTS</th><th>WINS</th><th>LOSSES</th></tr>

        <?php
        $sql_statement = "SELECT username, alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=2) 
                            ORDER BY points DESC, wins DESC, losses, alias";
        $result = mysqli_query($link, $sql_statement);
        while($row = mysqli_fetch_assoc($result)) {
          if ($row['username'] != "admin") {
            $alias = $row['alias'];
            $points = $row['points'];
            $wins = $row['wins'];
            $losses = $row['losses'];
            if (isset($_SESSION["username"]) && $row['username'] == $_SESSION['username']) {
              echo "<tr style='color: darkcyan; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;'><td>" . $alias . "</td><td>" . $points . "</td><td>" . $wins . "</td><td>"
                . $losses . "</td></tr>";
            }
            else {
              echo "<tr><td>" . $alias . "</td><td>" . $points . "</td><td>" . $wins . "</td><td>"
                . $losses . "</td></tr>";
            }
          }
        }
        ?>
      </table>
    </div>
  </div>
</body>
</html>
