
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FWRFC</title>
  <meta name="description" content="Frederick Women's Rugby Football Club">
  <meta name="author" content="Nicole Keller">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Questrial' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../css/reset.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../css/bootstrap-theme.css">
  <link rel="stylesheet" type="text/css" href="../css/form.css">
  
  <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>

<body>
  <div class = "container">
    <h1>New Player Entry</h1>
    <a href="rosterUpdateForm.php">Update an Existing Entry Here</a>
    <div class = "row">
      <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
        <form action="rosterInput.php" method = "post">
           <h2> New Entry</h2>
          <div class="form-group">
            <label for="formFN">First Name</label>
            <input type="text" class="form-control" name="formFN" maxlength="50" placeholder="First Name" value= "<?=$varFirstName;?>">
            <br>
            <label for="formLN">Last Name</label>
            <input type="text" class="form-control" name="formLN" maxlength="50" placeholder="Last Name" value= "<?=$varLastName;?>">
            <br>
            <label for="formFN">Nick Name</label>
            <input type="text" class="form-control" name="formNN" maxlength="50" placeholder="Nick Name" value= "<?=$varNickName;?>">
            <br>
            <label for="formPosition">Position</label>
            <input type="text" class="form-control" name="formPosition" maxlength="50" placeholder="Position" value= "<?=$varPositon;?>">
            <br>
            <label for="formEB">Exec Board Position</label>
            <input type="text" class="form-control" name="formEB" maxlength="50" placeholder="E-Board" value= "<?=$varExecBoard;?>">
            <br>
            <label for="formGroup">Group</label>
            <select class="form-control" name = "formGroup" value = "<?=$varGroup;?>">
              <option value = "Forward" <? if($varGroup=="Forward") echo (" selected =\"selected\"");?>>Forward</option>
              <option value = "Back" <? if($varGroup=="Back") echo (" selected =\"selected\"");?>>Back</option>
              <option value = "Forward Back" <? if($varGroup=="Forward Back") echo (" selected =\"selected\"");?>>Forward Back</option>
              <option value = "Forward Back" <? if($varGroup=="Forward Back") echo (" selected =\"selected\"");?>>Alumni</option>
              <option value = "Forward Back" <? if($varGroup=="Forward Back") echo (" selected =\"selected\"");?>>Coach</option>
            </select>
            <br>
     
            <button type="submit" class="btn btn-default" name = "formSubmit" value = "Submit">Submit Form</button>
          </div>
        </form>
      </div>
    </div>
        <div class = "row">
          <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <table class = "table table-bordered">
              <tr>
                <th>Name</th>
                <th>Nickname</th>
                <th>Position</th>
                <th>Exec Board</th>
              </tr>
            <?php   

              $mysqli = mysqli_connect("localhost", "root", "root", "Team_Schedule");
              // Handles if the connection fails
              if ($mysqli->connect_errno) {
                  echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
              }
              // This is the query
              $result = mysqli_query($mysqli, "SELECT * FROM roster");
              // This creates the while loop that iterates through the database and prints the data
                while($row = mysqli_fetch_assoc($result)){
                  //This formats the results into a table. 
                  printf("<tr><td>%s %s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['FirstName'], $row['LastName'], $row['NickName'], $row['Position'], $row['Execboard']);
                }

              //Closes the connection
              $mysqli ->close();
            ?>
            </table>
          </div>
        </div>
    </div>
  

 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script> 
</body>

</html>