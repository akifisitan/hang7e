<?php
// Hangman points system (gid = 2)
include "../config.php";
session_start();

if (isset($_POST['win'])) {
    $sql_statement = "SELECT pid FROM player WHERE username = '$_SESSION[username]'";
    $get_id = mysqli_query($link, $sql_statement);
    $user_id = mysqli_fetch_assoc($get_id)['pid'];
    $sql_statement = "UPDATE plays SET points = points + 50, wins = wins + 1
                      WHERE gid = 2 AND pid = $user_id";
    $result = mysqli_query($link, $sql_statement);
    if (mysqli_affected_rows($link) > 0) {
        echo "Points added successfully.";
    } else {
        $sql_statement = "INSERT INTO plays (pid, gid, wins, losses, points) 
                          VALUES ($user_id, 2, 1, 0, 1050)";
        $result = mysqli_query($link, $sql_statement);
        echo "User added to database.";
    }
    
} else if (isset($_POST['loss'])) {
    $sql_statement = "SELECT pid FROM player WHERE username = '$_SESSION[username]'";
    $get_id = mysqli_query($link, $sql_statement);
    $user_id = mysqli_fetch_assoc($get_id)['pid'];
    $sql_statement = "UPDATE plays SET POINTS = points - 50, losses = losses + 1
                      WHERE gid = 2 AND pid = $user_id";
    $result = mysqli_query($link, $sql_statement);
    if (mysqli_affected_rows($link) > 0) {
        echo "Points removed successfully.";
    } else {
        $sql_statement = "INSERT INTO plays (pid, gid, wins, losses, points) 
                          VALUES ($user_id, 2, 0, 1, 950)";
        $result = mysqli_query($link, $sql_statement);
        echo "User added to database.";
    }
}

else {
    echo "You do not have permission to access this site.";
}

?>