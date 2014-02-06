<?php
	include('inc/header.php');
?>
<div class  = "schednmaps">
	<div class = "container">
		<div class = "info schedule">
			<h1>Schedule and Maps</h1>
			<div class = "row">
				<div class = "col-md-12 col-lg-12 col-sm-12 col-xs-12">
					<ul class="nav nav-tabs nav-justified" id="scheduleTab">
				        <li class="active"><a href="#sectionA">Current</a></li>
				        <li class="dropdown">
				            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Past <b class="caret"></b></a>
				            <ul class="dropdown-menu">
				                <li><a href="#sectionB">Fall 2013</a></li>
				                <li><a href="#sectionC">Spring 2013</a></li>
<!-- 				                <li><a href="#sectionD">Fall 2012</a></li>
 -->				        </ul>
				        </li>
			    	</ul>
	    		<div class="tab-content">
			        <div id="sectionA" class="tab-pane fade in active">
			        	<h3 class = "title currentSeason">Spring 2014 15s Schedule</h3>
			            <div class="table-responsive">
						  <table class="table table-bordered">
						  	<tr>
						  		<th>Date</th>
						  		<th>Opposition</th>
						  		<th>Venue</th>
						  		<th>Score</th>
						  	</tr>

						  	<?php 	

								$mysqli = mysqli_connect("localhost", "nkellerw_sql", "billabong69", "nkellerw_rugbyTeam");
								// Handles if the connection fails
								if ($mysqli->connect_errno) {
							    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
								}
								// This is the query
								$result = mysqli_query($mysqli, "SELECT *, DATE_FORMAT(date, '%M %e, %Y') as formatted_date FROM schedule WHERE isCurrent LIKE 'yes'");
								// This creates the while loop that iterates through the database and prints the data
									while($row = mysqli_fetch_assoc($result)){
										//Changes the way that the score is displayed from NULL to N/A
										if($row['score'] == NULL){
											$score = 'N/A';
										}
										//else{
										// 	$score = $row['score'];
										// }
										//This formats the results into a table. 
										printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['formatted_date'], $row['opponent'], $row['location'], $score);
									}

								//Closes the connection
								$mysqli ->close();
							?>


						    
						  </table>
						</div>
			        </div>
			        <div id="sectionB" class="tab-pane fade">
			            <h3 class = "title">Fall 2013 15s Schedule</h3>
			            <div class="table-responsive">
			            	<table class="table table-bordered">
							  	<tr>
							  		<th>Date</th>
							  		<th>Opposition</th>
							  		<th>Venue</th>
							  		<th>Score</th>
							  	</tr>
							  	<?php 	

								$mysqli = mysqli_connect("localhost", "nkellerw_sql", "billabong69", "nkellerw_rugbyTeam");
								// Handles if the connection fails
								if ($mysqli->connect_errno) {
							    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
								}
								// This is the query
								$result = mysqli_query($mysqli, "SELECT *, DATE_FORMAT(date, '%M %e, %Y') as formatted_date FROM schedule WHERE isCurrent LIKE 'no' AND date BETWEEN '2013/09/06' AND '2013/10/26' ");
								// This creates the while loop that iterates through the database and prints the data
									while($row = mysqli_fetch_assoc($result)){
										//Changes the way that the score is displayed from NULL to N/A
										// if($row['score'] == 'NULL'){
										// 	$score = 'N/A';
										// }
										//else{
										// 	$score = $row['score'];
										// }
										//This formats the results into a table. 
										printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['formatted_date'], $row['opponent'], $row['location'], $row['score']);
									}

								//Closes the connection
								$mysqli ->close();
							?>
						  	</table>
			            </div>

			        </div>
			        <div id="sectionC" class="tab-pane fade">
			            <h3 class = "title">Spring 2013 15s Schedule</h3>
			            <div class="table-responsive">
			            <table class="table table-bordered">
						  	<tr>
						  		<th>Date</th>
						  		<th>Opposition</th>
						  		<th>Venue</th>
						  		<th>Score</th>
						  	</tr>
						  	<?php 	

								$mysqli = mysqli_connect("localhost", "nkellerw_sql", "billabong69", "nkellerw_rugbyTeam");
								// Handles if the connection fails
								if ($mysqli->connect_errno) {
							    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
								}
								// This is the query
								$result = mysqli_query($mysqli, "SELECT *, DATE_FORMAT(date, '%M %e, %Y') as formatted_date FROM schedule WHERE isCurrent LIKE 'no' AND date BETWEEN '2013/03/16' AND '2013/05/18' ");
								// This creates the while loop that iterates through the database and prints the data
									while($row = mysqli_fetch_assoc($result)){
										//Changes the way that the score is displayed from NULL to N/A
										// if($row['score'] == 'NULL'){
										// 	$score = 'N/A';
										// }
										//else{
										// 	$score = $row['score'];
										// }
										//This formats the results into a table. 
										printf("<tr><td>%s</td><td>%s</td><td>%s</td><td>%s</td></tr>",$row['formatted_date'], $row['opponent'], $row['location'], $row['score']);
									}

								//Closes the connection
								$mysqli ->close();
							?>
						  </table>
			        	</div>
			    	</div>
			        <div id="sectionD" class="tab-pane fade">
			            <h3 class = "title">Fall 2012 15s Schedule</h3>
			            <div class="table-responsive">
			            </div>

			        </div>
			    </div>
			</div>
		</div>
		<div class = "row">
			<div class = "col-md-12 col-lg-12 col-sm-12 col-xs-12 push-right">
					<div class = "box">
						
						<iframe width="100%" height="auto" frameborder="6" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1133+Rocky+Springs+Road,+Frederick,+MD&amp;aq=0&amp;oq=1133+Rocky&amp;sll=38.804821,-77.236967&amp;sspn=3.946532,4.042969&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=1133+Rocky+Springs+Rd,+Frederick,+Maryland+21702&amp;ll=39.438249,-77.444434&amp;spn=0.00382,0.003948&amp;z=14&amp;output=embed"></iframe>
						<br />
					</div>
			</div>
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