<?php
	include('inc/header.php');
?>
	<div class = "roster">
		<div class = "container">
			<div class = "info">
				<h1 data-stellar-background-ratio = "0.5">Roster</h1>
				<ul class="nav nav-tabs nav-justified" id="rosterTab">
			        <li class="active"><a href="#section1">Forwards</a></li>
			        <li><a href="#section2">Backs</a></li>
			        <li><a href="#section3">Alumni</a></li>
			        <li><a href="#section4">Coaches</a></li>
		    	</ul>
			    <div class="tab-content">
			        <div id="section1" class="tab-pane fade in active">
			            <div class="table-responsive">
						 <table class = "table table-bordered">
		              <tr>
		                <th>Name</th>
		                <th>Nickname</th>
		                <th>Position</th>
		                <th>Exec Board</th>
		              </tr>
		            <?php   
		          	  include_once("sqlInput/security/psl-config.php");
		              $mysqli = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
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
	</div>
		 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>	

    <script type="text/javascript">
    $(window).stellar();
    </script>

    <script type="text/javascript">
    	$('#scheduleTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		});

    	$('#rosterTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		});
    </script>
    <script type="text/javascript">
  //   	$('#rosterTab a').click(function (e) {
		//   e.preventDefault();
		//   $(this).tab('show');
		// });

    </script>
</body>

</html>