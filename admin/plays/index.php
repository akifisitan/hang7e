<?php include "../../config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="plays-style.css">
  <title>Plays</title>
</head>

<body class="bg-info">
  <div class="container text-center">
    <div class="row">
      <div class="col">  
        <h3>Plays Relation Table</h3>
        <table class="table">
          <tr><th>PID</th><th>GID</th><th>WINS</th><th>LOSSES</th><th>POINTS</th></tr>
          <?php
          $sql_statement = "SELECT * FROM plays";
          $result = mysqli_query($link, $sql_statement);
          while ($row = mysqli_fetch_assoc($result)) {
            $pid = $row['pid'];
            $gid = $row['gid'];
            $wins = $row['wins'];
            $losses = $row['losses'];
            $points = $row['points'];
          
            echo "<tr><th>" . $pid . "</th><th>" . $gid . "</th><th>" . $wins .
            "</th><th>" . $losses . "</th><th>" . $points . "</th></tr>";
          } ?>
        </table>
        <a class="btn btn-light" href="../index.php">Home</a>
        
      </div>

      <div class="col">
        <h3>Insert into Plays Relation</h3>
        <form method="post" action="insert.php">
          <div class="form-group">
            <label for="pid">Player ID:</label>
            <select class="form-control" id="pid" name="pid">
              <?php
              $sql_statement = "SELECT pid FROM player ORDER BY pid ASC";
              $result = mysqli_query($link, $sql_statement);
              while ($row = mysqli_fetch_assoc($result)) {
                if ($row['pid'] != 1) {
                  $pid = $row['pid'];
                  echo "<option value='$pid'>$pid</option>";
                }
              } ?> 
            </select>
          </div>
          <div class="form-group">
            <label for="gid">Game ID:</label>
            <select class="form-control" id="gid" name="gid">
              <?php
              $sql_statement = "SELECT gid FROM game";
              $result = mysqli_query($link, $sql_statement);

              while ($row = mysqli_fetch_assoc($result)) {
                $gid = $row['gid'];
                echo "<option value='$gid'>$gid</option>";
              } ?>
            </select>
          </div>
          <div class="form-group">
            <label for="wins">Wins:</label>
            <input class="form-control" type="number" min=0 id="wins" name="wins">
          </div>
          <div class="form-group">
            <label for="losses">Losses:</label>
            <input class="form-control" type="number" min=0 id="losses" name="losses">
          </div>
          <div class="form-group">
            <label for="points">Points:</label>
            <input class="form-control" type="number" min=0 id="points" name="points">
          </div>
          <div class="btn">
            <input class="btn btn-success" type="submit" name="insert" value="Insert">
          </div>
        </form>
      </div>

      <div class="col">
        <h3>Delete From Plays Relation</h3>
        <form method="post" action="delete.php">
          <div class="form-group">
            <label for="pid">Player ID:</label>
            <select class="form-control" id="pid" name="pid">
                <?php
                $sql_statement = "SELECT DISTINCT pid FROM plays ORDER BY pid ASC";
                $result = mysqli_query($link, $sql_statement);

                while ($row = mysqli_fetch_assoc($result)) {
                  if ($row['pid'] != 1) {
                $pid = $row['pid'];
                echo "<option value='$pid'>$pid</option>";
                  }
                }
                ?>
            </select> 
            </div>
          <div class="form-group">
            <label for="gid">Game ID:</label>
            <select class="form-control" id="gid" name="gid">
                <?php
                $sql_statement = "SELECT DISTINCT gid FROM plays";
                $result = mysqli_query($link, $sql_statement);

                while ($row = mysqli_fetch_assoc($result)) {
                $gid = $row['gid'];
                echo "<option value='$gid'>$gid</option>";
                }
                ?>
            </select>
          </div>
          <div class="btn">
            <input class="btn btn-danger" type="submit" name="delete" value="Delete">
          </div>
        </form>
      </div>

      <div class="col">
        <h3>Update Existing Plays Relation</h3>
        <form method="post" action="update.php">
        <div class="form-group">
          <label for="pid">Player ID:</label>
            <select class="form-control" id="pid" name="pid">
                <?php
                $sql_statement = "SELECT pid FROM player ORDER BY pid ASC";
                $result = mysqli_query($link, $sql_statement);

                while ($row = mysqli_fetch_assoc($result)) {
                  if ($row['pid'] != 1) {
                    $pid = $row['pid'];
                    echo "<option value='$pid'>$pid</option>";
                  }
                }
                ?>
            </select>
          </div>
          <div class="form-group">
            <label for="gid">Game ID:</label>
            <select class="form-control" id="gid" name="gid">
                <?php
                $sql_statement = "SELECT gid FROM game";
                $result = mysqli_query($link, $sql_statement);

                while ($row = mysqli_fetch_assoc($result)) {
                $gid = $row['gid'];
                echo "<option value='$gid'>$gid</option>";
                }
                ?>
            </select>
          </div>
          <div class="form-group">
            <label for="wins">Wins:</label>
            <input class="form-control" type="number" min=0 id="wins" name="wins">
          </div>
          <div class="form-group">
            <label for="losses">Losses:</label>
            <input class="form-control" type="number" min=0 id="losses" name="losses">
          </div>
          <div class="form-group">
            <label for="points">Points:</label>
            <input class="form-control" type="number" min=0 id="points" name="points">
          </div>
          <div class="btn">
            <input class="btn btn-dark" type="submit" name="update" value="Update">
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
