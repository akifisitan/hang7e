<?php
// DOES NOT WORK YET
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
  <title>Filter</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
  <style>
    .form-control {width: 200px;}
    .container {margin-top: 30px;}
  </style>
</head>

<body class="bg-info">
<div class="container">
  <div class="row">
    <div class="col">
      <h1>Filter Players</h1>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
        <div class="form-group">
          <label for="game">Game:</label>
          <select class="form-control" id="game" name="game">
            <option value="hangman">Hangman</option>
            <option value="word7e">Word7e</option>
          </select>
        </div>  
        <div class="form-group">
          <label for="filter">Filter by:</label>
          <select class="form-control" id="filter" name="filter">
            <option value="alias">Alias</option>
            <option value="points">Points</option>
            <option value="wins">Wins</option>
            <option value="losses">Losses</option>
          </select>
        </div>
        <div class="form-group">
          <label for="filtervalue">Filter type:</label>
          <select class="form-control" id="filtervalue" name="filtervalue">
            <!-- options will be added here by JavaScript -->
            <option value="startswith">Starts with</option>
          </select>
        </div>
        <div class="form-group">
          <label for="value">Value:</label>
          <input type="text" maxlength="1" class="form-control" required id="value" name="value" placeholder="Enter a letter">
        </div>    
        <div class="form-group">
          <br>
          <button type="submit" class="btn btn-dark">Submit</button>
        </div>
        <div class="form-group">
          <br>
          <a href="index.php" class="btn btn-danger">Home</a>
        </div>
      </form>
    </div>



    <?php
    include "../config.php";

    if (isset($_POST['game'])) {
      echo "<div class='col'>
              <table class='table'>";

      if ($_POST['game'] == 'hangman') {
        echo "<h1 align='center'>Hangman</h1>
        <tr><th>ALIAS</th><th>POINTS</th><th>WINS</th><th>LOSSES</th></tr>";
        $filter = $_POST['filter'];
        if ($filter == 'alias') {
          $value = $_POST['value'];
          $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=1) AND $filter LIKE '$value%'
                            ORDER BY points DESC, wins DESC, losses, alias";
        } 
        else if ($filter == 'points') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=1) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=1) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
        else if ($filter == 'wins') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=1) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=1) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
        else if ($filter == 'losses') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=1) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=1) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
      }
      
      else {
        echo "<h1 align='center'>Word7e</h1>
        <tr><th>ALIAS</th><th>POINTS</th><th>WINS</th><th>LOSSES</th></tr>";
        $filter = $_POST['filter'];
        if ($filter == 'alias') {
          $value = $_POST['value'];
          $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=2) AND $filter LIKE '$value%'
                            ORDER BY points DESC, wins DESC, losses, alias";
        } 
        else if ($filter == 'points') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=2) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=2) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
        else if ($filter == 'wins') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=2) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=2) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
        else if ($filter == 'losses') {
          $filtervalue = $_POST['filtervalue'];
          $value = $_POST['value'];
          if ($filtervalue == 'morethan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                            WHERE (s.pid = p.pid) AND (gid=2) AND $filter > $value
                            ORDER BY points DESC, wins DESC, losses, alias";
          } 
          else if ($filtervalue == 'lessthan') {
            $sql_statement = "SELECT alias, points, wins, losses FROM player p, plays s 
                              WHERE (s.pid = p.pid) AND (gid=2) AND $filter < $value
                              ORDER BY points DESC, wins DESC, losses, alias";
          }
        }
      }

      
      $result = mysqli_query($link, $sql_statement);
      while($row = mysqli_fetch_assoc($result)) {
        
        $alias = $row['alias'];
        $points = $row['points'];
        $wins = $row['wins'];
        $losses = $row['losses'];
        echo "<tr><td>" . $alias . "</td><td>" . $points . "</td><td>" . $wins . "</td><td>"
          . $losses . "</td></tr>";
        
        
      }


      if (mysqli_num_rows($result) == 0)
        echo "<tr><td colspan='4'>No results found</td></tr>";
      else 
        echo "</table></div>";
    }
    ?>

    
    
    


  </div>
</body>

<script>
  // get the filter dropdown element
  const filterDropdown = document.getElementById('filter');

  // get the filter value dropdown element
  const filterValueDropdown = document.getElementById('filtervalue');

  // add an event listener to the filter dropdown
  filterDropdown.addEventListener('change', (event) => {
    // get the selected value
    const selectedValue = event.target.value;

    // clear the options in the filter value dropdown
    filterValueDropdown.innerHTML = '';

    // add new options based on the selected value
    if (selectedValue === 'alias') {
      filterValueDropdown.innerHTML = `
        <option value="startswith">Starts with</option>
      `;
    } else if (selectedValue === 'points') {
      filterValueDropdown.innerHTML = `
        <option value="morethan">More than</option>
        <option value="lessthan">Less than</option>
      `;
    } else if (selectedValue === 'wins') {
      filterValueDropdown.innerHTML = `
        <option value="morethan">More than</option>
        <option value="lessthan">Less than</option>
      `;
    } else if (selectedValue === 'losses') {
      filterValueDropdown.innerHTML = `
        <option value="morethan">More than</option>
        <option value="lessthan">Less than</option>
      `;
    }
  });
  
  const valueInput = document.getElementById('value');
  filterDropdown.addEventListener('change', (event) => {
    // get the selected value
    const selectedValue = event.target.value;

    // clear the options in the filter value dropdown
    valueInput.innerHTML = '';
    
    if (selectedValue === 'alias') {
        valueInput.type = "text";
        valueInput.maxLength = "1";
        valueInput.placeholder = "Enter a letter";
    } else if (selectedValue === 'points') {
        valueInput.type = "number";
        valueInput.min = "0";
        valueInput.placeholder = "Enter a number";
    } else if (selectedValue === 'wins') {
        valueInput.type = "number";
        valueInput.min = "0";
        valueInput.placeholder = "Enter a number";
    } else if (selectedValue === 'losses') {
        valueInput.type = "number";
        valueInput.min = "0";
        valueInput.placeholder = "Enter a number";
    }
  
  });
</script>



</html>

