<?php
// Redirect to login page if not logged in
session_start();
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true)
    header("location: ../login.php");
else if($_SESSION["username"] != "admin")
    header("location: ../index.php");

?>
<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-style.css">
  </head>
  <body>

<div class="topnav">
    <a style="background-color: black" href="index.php">Home</a>
    <!--Later: <a style="background-color: darkgreen" href="#support">Support</a>-->
    <a style="background-color: #3b3b86" href="../leaderboards.php">Leaderboards</a>
    <?php 
    // Show the games and the logout button if the user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : 
    ?>
    <a style="background-color: darkgoldenrod" href="../hangman/game.php">Hangman</a>
    <a style="background-color: darkorange" href="../word7e/game.php">Word7e</a>
    <a style="background-color: red; float: right" href="../logout.php"> Logout</a>
    <a style="color: gold; float: right; font-size: 20px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <?php echo htmlspecialchars($_SESSION["username"]); ?> </a>
    <a style="background-color: blue; float:right" href="game/index.php">Game</a>
    <a style="background-color: darkslateblue; float:right" href="player/index.php">Player</a>
    <a style="background-color: purple; float:right" href="plays/index.php">Plays</a>
    <a style="color: white; background-color: black; float: right;">Manage Tables:</a>
    <?php 
    // Show the login and sign up buttons if the user is not logged in
    else : ?>
    <a style="background-color: darkmagenta; float: right" href="../login.php"> Login</a>
    <a style="background-color: darkblue; float:right" href="../register.php" >Sign Up</a>
    <?php endif; 
    ?>
    
  </div>
  
  <div>
    <h1 style="margin: 40px; text-align: center; color: white; font-size: 50px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">
    Welcome to the Admin Page!<br>Use the navigation bar above to manage the site.</h1>
    </div>
  
  



  </body>
</html>

