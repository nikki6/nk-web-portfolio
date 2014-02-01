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