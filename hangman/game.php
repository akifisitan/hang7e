<?php
// Redirect to login page if not logged in
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    header("location: ../login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hangman</title>
    <link rel="stylesheet" href="hangman-style.css" />
  </head>
  <!-- Top Navigation Bar -->
  <div class="topnav">
    <a style="background-color: black" href="../index.php">Home</a>
    <!--Will add later: <a style="background-color: darkgreen" href="#support">Support</a>-->
    <a style="background-color: #3b3b86" href="../leaderboards.php">Leaderboards</a>
    <a style="background-color: darkorange" href="../word7e/game.php">Word7e</a>
    <a style="background-color: red; float: right" href="../logout.php"> Logout</a>
    <a style="color: gold; float: right; font-size: 20px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <?php echo htmlspecialchars($_SESSION["username"]); ?> </a>
  </div>
  
  <body>
    <div class="container">
      <div id="options-container"></div>
      <div id="letter-container" class="letter-container hide"></div>
      <div id="user-input-section"></div>
      <canvas id="canvas"></canvas>
      <div id="new-game-container" class="new-game-popup hide">
        <div id="result-text"></div>
        <button id="new-game-button">New Game</button>
      </div>
    </div>
    <script src="script.js"></script>
  </body>
</html>