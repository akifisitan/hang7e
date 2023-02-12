<?php include "../../config.php"?>

<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="player-style.css">
  <title>Player</title>
</head>

<body class="bg-info">
  <div class="container text-center">
    <div class="row">
      <div class="col">
        <h3>Player Table</h3>
        <table class="table">
          <tr><th>PLAYER ID</th><th>USERNAME</th><th>ALIAS</th></tr>
          <?php
          $sql_statement = "SELECT * FROM player";
          $result = mysqli_query($link, $sql_statement);
          while ($row = mysqli_fetch_assoc($result)) {
            if ($row['pid'] != 1) {
              $pid = $row['pid'];
              $username = $row['username'];
              $alias = $row['alias'];
              echo "<tr><th>" . $pid . "</th><th>" . $username . "</th><th>" . $alias . "</th></tr>";
            }
          }
          ?>
        </table>
        <a class="btn btn-light" href="../index.php">Home</a>
      </div>

      <div class="col">
        <h3>Insert Players</h3>
        <form method="post" action="insert.php">
          <div class="form-group">
            <label for="username">Username:</label><br>
            <input class="form-control" type="text" minlength="3" maxlength="20" required id="username" name="username"><br>
          </div>
          <div class="form-group">
            <label for="password">Password:</label><br>
            <input class="form-control" type="text" minlength= 3 maxlength=8 required id="password" name="password"><br>
          </div>
          <div class="form-group">
            <label for="alias">Alias:</label><br>
            <input class="form-control" type="text" minlength= 3 maxlength=20 required id="alias" name="alias"><br>
          </div>
          <div class="btn">
            <input class="btn btn-success" type="submit" name="insert" value="Insert">
          </div>
        </form>
      </div>

      <div class="col">
        <h3>Delete Players</h3>
        <form method="post" action="delete.php">
        <div class="form-group">
          <label for="pid">Player ID:</label><br>
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
        <div class="btn">
          <input class="btn btn-danger" type="submit" name="delete" value="Delete">
        </div>
        </form>
      </div>

      <div class="col">
        <h3>Update Players</h3>
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
          <label for="username">Username:</label>
          <input class="form-control" type="text" minlength= 3 maxlength=20 required id="username" name="username"><br>
        </div>
        <div class="form-group">  
          <label for="password">Password:</label>
          <input class="form-control" type="text" minlength=3 maxlength=8 required id="password" name="password"><br>
        </div>
        <div class="form-group">  
          <label for="alias">Alias:</label>
          <input class="form-control" type="text" minlength= 3 maxlength=20 required id="alias" name="alias"><br>
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
