<?php include "../../config.php"?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="game-style.css">
    <title>Game</title>
  </head>

  <body class="bg-info">
    <div class="container text-center">
      <div class="row">
        <div class="col">
          <h3>Game Table</h3>
          <table class="table">
            <tr><th>GAME ID</th><th>GAME NAME</th></tr>
            <?php
            $sql_statement = "SELECT * FROM game";
            $result = mysqli_query($link, $sql_statement);

            while ($row = mysqli_fetch_assoc($result)) {
              $gid = $row['gid'];
              $gname = $row['gname'];
              echo "<tr><th>" . $gid . "</th><th>" . $gname . "</th></tr>";
            }
            ?>
          </table>
          <a class="btn btn-light" href="../index.php">Home</a>
        </div>
      </div>
    </div>
  </body>



</html>
