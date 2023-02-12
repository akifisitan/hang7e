<?php
// Redirect to login page if not logged in
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    header("location: ../login.php");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Word7e</title>
    <link rel="stylesheet" href="word7e-style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  </head>
  <!-- Top Navigation Bar -->
  <div class="topnav">
    <a style="background-color: black" href="../index.php">Home</a>
    <!--Will add later: <a style="background-color: darkgreen" href="#support">Support</a>-->
    <a style="background-color: #3b3b86" href="../leaderboards.php">Leaderboards</a>
    <a style="background-color: darkgoldenrod" href="../hangman/game.php">Hangman</a>
    <a style="background-color: red; float: right; " href="../logout.php"> Logout</a>
    <a style="color: gold; float: right; font-size: 20px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <?php echo htmlspecialchars($_SESSION["username"]); ?> </a>
  </div>
  <body>
    <div id="game-board">
    <!--Game Board gets rendered here-->    
    </div>
    <div id="keyboard-cont">
      <div class="first-row">
          <button class="keyboard-button">q</button>
          <button class="keyboard-button">w</button>
          <button class="keyboard-button">e</button>
          <button class="keyboard-button">r</button>
          <button class="keyboard-button">t</button>
          <button class="keyboard-button">y</button>
          <button class="keyboard-button">u</button>
          <button class="keyboard-button">i</button>
          <button class="keyboard-button">o</button>
          <button class="keyboard-button">p</button>
      </div>
      <div class="second-row">
          <button class="keyboard-button">a</button>
          <button class="keyboard-button">s</button>
          <button class="keyboard-button">d</button>
          <button class="keyboard-button">f</button>
          <button class="keyboard-button">g</button>
          <button class="keyboard-button">h</button>
          <button class="keyboard-button">j</button>
          <button class="keyboard-button">k</button>
          <button class="keyboard-button">l</button>
      </div>
      <div class="third-row">
          <button class="keyboard-button">Del</button>
          <button class="keyboard-button">z</button>
          <button class="keyboard-button">x</button>
          <button class="keyboard-button">c</button>
          <button class="keyboard-button">v</button>
          <button class="keyboard-button">b</button>
          <button class="keyboard-button">n</button>
          <button class="keyboard-button">m</button>
          <button class="keyboard-button">Enter</button>
      </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="script.js" type="module"></script>
  </body>
</html>