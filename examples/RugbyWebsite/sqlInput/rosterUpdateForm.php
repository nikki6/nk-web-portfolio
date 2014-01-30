
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
    <h1>Update Roster</h1>
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

        <div class = "row">
          <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <form action="rosterUpdate.php" method = "post">
               <h2> Update an Existing Entry</h2>
               <div class = "form-group">
                <label for = "oldFN">Original First Name</label>
                <input type="text" class="form-control" name="oldFN" maxlength="50" placeholder="Original First Name" value= "<?=$varOrigFirstName;?>">
                <br>
                <label for = "oldLN">Original Last Name</label>
                <input type="text" class="form-control" name="oldLN" maxlength="50" placeholder="Original Last Name" value= "<?=$varOrigLastName;?>">
               </div>
              <div class="form-group">
                <label for="updFN">First Name</label>
                <input type="text" class="form-control" name="updFN" maxlength="50" placeholder="First Name" value= "<?=$varFirstName;?>">
                <br>
                <label for="updLN">Last Name</label>
                <input type="text" class="form-control" name="updLN" maxlength="50" placeholder="Last Name" value= "<?=$varLastName;?>">
                <br>
                <label for="updFN">Nick Name</label>
                <input type="text" class="form-control" name="updNN" maxlength="50" placeholder="Nick Name" value= "<?=$varNickName;?>">
                <br>
                <label for="updPosition">Position</label>
                <input type="text" class="form-control" name="updPosition" maxlength="50" placeholder="Position" value= "<?=$varPositon;?>">
                <br>
                <label for="updEB">Exec Board Position</label>
                <input type="text" class="form-control" name="updEB" maxlength="50" placeholder="E-Board" value= "<?=$varExecBoard;?>">
                <br>
                <label for="updGroup">Group</label>
                <select class="form-control" name = "updGroup" value = "<?=$varGroup;?>">
                  <option value = "" <? if($varUpdateGroup=="") echo (" selected =\"selected\"");?>></option>
                  <option value = "Forward" <? if($varUpdateGroup=="Forward") echo (" selected =\"selected\"");?>>Forward</option>
                  <option value = "Back" <? if($varUpdateGroup=="Back") echo (" selected =\"selected\"");?>>Back</option>
                  <option value = "Forward Back" <? if($varUpdateGroup=="Forward Back") echo (" selected =\"selected\"");?>>Forward Back</option>
                  <option value = "Alumni" <? if($varUpdateGroup=="Alumni") echo (" selected =\"selected\"");?>>Alumni</option>
                  <option value = "Coach" <? if($varUpdateGroup=="Coach") echo (" selected =\"selected\"");?>>Coach</option>
                </select>
                <br>
         
                <button type="submit" class="btn btn-default" name = "formSubmit" value = "Submit">Submit Form</button>
              </div>
            </form>
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