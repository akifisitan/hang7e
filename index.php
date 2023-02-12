<?php
// Initialize the session
session_start();
// Send to the admin page if the user is admin
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true && $_SESSION["username"] == "admin") 
  header("location: admin/index.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hang7e</title>
    <style>
        body {font: 20px sans-serif; background-color: #3b3b3b;}
        .topnav {background-color: #3b3b3b; overflow: hidden;}
        .topnav a {border-radius: 10px; float: left; color: #f2f2f2; text-align: center; padding: 14px; text-decoration: none; font-size: 16px;}
        .topnav a:hover {color: darkcyan; }
    </style>
</head>

<body>
  <div class="topnav">
    <a style="background-color: black" href="index.php">Home</a>
    <a style="background-color: darkgreen" href="support/index.php">Support</a>
    <a style="background-color: #3b3b86" href="leaderboards.php">Leaderboards</a>
    <?php 
    // Show the games and the logout button if the user is logged in
    if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) : 
    ?>
    <a style="background-color: darkgoldenrod" href="hangman/game.php">Hangman</a>
    <a style="background-color: darkorange" href="word7e/game.php">Word7e</a>
    <a style="background-color: red; float: right" href="logout.php"> Logout</a>
    <a style="color: gold; float: right; font-size: 20px; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;"> <?php echo htmlspecialchars($_SESSION["username"]); ?> </a>
    <?php 
    // Show the login and sign up buttons if the user is not logged in
    else : ?>
    <a style="background-color: darkgreen; float: left" href="login.php"> Welcome to Hang7e</a>
    <a style="background-color: darkmagenta; float: right" href="login.php"> Login</a>
    <a style="background-color: darkblue; float:right" href="register.php" >Sign Up</a>
    <?php endif; 
    ?>
    
  </div>

  <div class="photos">
  <p style="color: darkcyan; font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;">Check out the leaderboards or log in to play!</p>
    <img src="images/hangman.png" alt="hangman" style="width:620px;height:480px;float:left;border-radius: 5%">
    <img src="images/word7e.png" alt="word7e" style="width:620px;height:480px;float:right;border-radius: 5%">
  </div>
  

</body>
</html>

