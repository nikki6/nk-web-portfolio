<?php 
	include("inc/header.php");
?>

<!-- Slide #1 -->
		<div class = "slide" id = "slide1" data-slide = "1" data-stellar-background-ratio = "0.5">
			<div class = "info">
				<h1 class = "banner">Welcome to the Frederick Women's Rugby Football Club</h1>
				
				
			</div>
		</div>
		<img class = "logo" src="images/logoholder.png">
	<!-- Slide #2 -->
		<div class = "slide" id = "slide2" data-slide = "2" data-stellar-background-ratio = ".5">
			<div class = "info">
				<div class = "row">
					<div class = "gen col-md-7 col-lg-7 col-sm-12 col-xs-12">
						<div class = "row">
							<p>
								Thanks for checking out the Frederick Women's Rugby webpage.
								 The FWRFC was formed in Fall 2004 by a team of fun, enthusiastic women. 
								 We play almost year-round, with a competitive 15-a-side season in the fall, 
								 a "friendly" 15s season in the spring, a competitive summer 7s season AND 
								 trainings to span the winter months. Plus we have social events, trips and 
								 community projects throughout the year.
							</p>
							<a href="http://your4state.com/search-fulltext?&amp;nxd_id=124145">(See a report on our team on WHAG-TV Hagerstown.</a>
							<p>
								It's always a great time for new players to join us! 
								All experience levels are welcome; no previous knowledge of the 
								sport is necessary! Check out the <a href="about.html"><b>About Rugby</b></a>
								 page for a brief introduction to the sport. Also, we now have a blog where we post pictures and other messages. 
								 You can find it at <a href="http://fwrfc.blogspot.com/">http://fwrfc.blogspot.com/</a>
							</p>
							<p></p>
						</div>
						<div class = "row">
							<h2>Practice Information</h2>
							<ul>
								<li>Practices will start in late February early March</li>
							</ul>
						</div>
						<div class = "row">
							<h2>Upcoming Events</h2>
							<ul>
								<li>January 25th - Winter Banquet</li>
								<li>February 6th - Preseason Meeting</li>
							</ul>
						</div>
					</div>
					<div class = "col-md-5 col-lg-5 col-sm-12 col-xs-12">
						<img class = "img-responsive" src = "images/team.png">
					</div>
				</div>
			</div>
		</div>
	<!-- Slide #3 -->
		<div class = "slide" id = "slide3" data-slide = "3" data-stellar-background-ratio = "0.5">
			<div class = "info">
				<h1>Important Information</h1>
				<div class="media">
				  <a class="pull-left" href="#">
				    <img class="media-object" src="..." alt="...">
				  </a>
				  <div class="media-body">
				    <h2>Emergency Info Sheet</h2>
				    <p>Complete and Submit to the <a href="mailto:fwrfc.execsec@yahoo.com">Executive Secretary</a></p>
				  </div>
				</div>
				<div class="media">
				  <a class="pull-left" href="#">
				    <img class="media-object" src="..." alt="...">
				  </a>
				  <div class="media-body">
				    <h2>Get CIPPed</h2>
				    <p>Forward information to the <a href="mailto:fwrfc.execsec@yahoo.com">Executive Secretary</a> after you have registered. Also if 
				    	you need help you can contact the Executive Secretary and she will walk you through it.</p>
				  </div>
				</div>

				<h2>Contact Us</h2>
				<ul>
					<li><a href="mailto:fwrfc.president@yahoo.com?subject=Mail from the FWRFC Website">Lacy Ames, President</a></li>
					<li><a href="mailto:fwrfc.vicepresident@yahoo.com?subject=Mail from the FWRFC Website">Leslie Walsh, Vice President</a></li>
				</ul>

			</div>
		</div>
	<!-- Slide #4 -->
		<div class = "slide" id = "slide4" data-slide = "4" data-stellar-background-ratio = ".5">
			<div class = "row">
				<div class = "info">
					<div class = "contact col-md-6 col-lg-6 col-sm-12 col-xs-12">
						<h1>Contact Us</h1>
						<ul>
							<li>Lacy Ames, President</li>
							<li>Leslie Walsh, Vice President</li>
						</ul>
					</div>
					<div class = "video col-md-6 col-lg-6 col-sm-12 col-xs-12">
						<h1>Rugby 101</h1>
						<p>Check out this awesome video that Washington State Women's Rugby Team made explain the basics on rugby.</p>
						<iframe width="100%" height="40%" src="//www.youtube.com/embed/YVtD0_y2hr0" frameborder="1" allowfullscreen></iframe>
					</div>
				</div>
			</div>
		</div>
	<!-- Slide #5 -->
		<div class = "slide" id = "slide5" data-slide = "5" data-stellar-background-ratio = ".5">
			<div class = "info">
				<h1>Schedule and Maps</h1>
<!-- 				<div class = "container">
 -->					<div class = "row">
						<div class = "col-md-7 col-lg-7 col-sm-12 col-xs-12">
							<ul class="nav nav-tabs nav-justified" id="scheduleTab">
						        <li class="active"><a href="#sectionA">Current</a></li>
						        <li class="dropdown">
						            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Past <b class="caret"></b></a>
						            <ul class="dropdown-menu">
						                <li><a href="#sectionB">Fall 2013</a></li>
						                <li><a href="#sectionC">Spring 2013</a></li>
						                <li><a href="#sectionD">Fall 2012</a></li>
						            </ul>
						        </li>
					    	</ul>
					    	<div class="tab-content">
						        <div id="sectionA" class="tab-pane fade in active">
						        	<h3 class = "title currentSeason">Spring 2014 15s Schedule</h3>
						            <div class="table-responsive">
									  <table class="table">
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


									    <!-- <tr>
									    	<td>March 15th</td>
									    	<td>Highlanders</td>
									    	<td>Walnut Ridge</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>March 22nd</td>
									    	<td>Nova B</td>
									    	<td>Away</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>March 29th</td>
									    	<td>College Invitational</td>
									    	<td>Warner Farm</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>April 5th</td>
									    	<td>South Buffalo Sinners</td>
									    	<td>Home</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>April 12th</td>
									    	<td>Lehigh Valley</td>
									    	<td>Away</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>April 26th</td>
									    	<td>TBD</td>
									    	<td>TBD</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>May 3rd</td>
									    	<td>Harrisburg</td>
									    	<td>Home</td>
									    	<td></td>
									    </tr>
									    <tr>
									    	<td>May 10th</td>
									    	<td>Triebel Cup</td>
									    	<td>Home</td>
									    	<td></td>
									    </tr> -->
									  </table>
									</div>
						        </div>
						        <div id="sectionB" class="tab-pane fade">
						            <h3 class = "title">Fall 2013 15s Schedule</h3>
						            <div class="table-responsive">
						            	<table class="table">
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

										    <!-- <tr>
										    	<td>Sept 7th</td>
										    	<td>Lehigh Valley</td>
										    	<td>Lehigh Valley</td>
										    	<td>Win</td>
										    </tr>
										    <tr>
										    	<td>Sept 14th</td>
										    	<td>NE Philly</td>
										    	<td>Walnut Ridge</td>
										    	<td>Win</td>
										    </tr>
										    <tr>
										    	<td>Sept 21st</td>
										    	<td>Stingers</td>
										    	<td>Stingers/td>
										    	<td>Win</td>
										    </tr>
										    <tr>
										    	<td>October 5th</td>
										    	<td>Scrimmage against All Deaf Women's Team</td>
										    	<td>Home</td>
										    	<td>N/A</td>
										    </tr>
										    <tr>
										    	<td>October 19th</td>
										    	<td>NE Philly</td>
										    	<td>Walnut Ridge</td>
										    	<td>Win</td>
										    </tr>
										    <tr>
										    	<td>October 26th</td>
										    	<td>Lehigh Valley</td>
										    	<td>Walnut Ridge</td>
										    	<td>Win</td>
										    </tr> -->
									  	</table>
						            </div>

						        </div>
						        <div id="sectionC" class="tab-pane fade">
						            <h3 class = "title">Spring 2013 15s Schedule</h3>
						            <div class="table-responsive">
						            <table class="table">
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
									    <!-- <tr>
									    	<td>March 16th</td>
									    	<td>Furies B Side</td>
									    	<td>Walnut Ridge</td>
									    	<td>Win</td>
									    </tr>
									    <tr>
									    	<td>March 23rd</td>
									    	<td>Highlanders</td>
									    	<td>Pittsburg</td>
									    	<td>Win</td>
									    </tr>
									    <tr>
									    	<td>April 6th</td>
									    	<td>Triebel Cup</td>
									    	<td>Severn</td>
									    	<td>Loss</td>
									    </tr>
									    <tr>
									    	<td>April 13th</td>
									    	<td>College Invitational</td>
									    	<td>Walnut Ridge</td>
									    	<td>N/A</td>
									    </tr>
									    <tr>
									    	<td>April 20th</td>
									    	<td>Virginia Beach Tournament</td>
									    	<td>Virginia Beach</td>
									    	<td>Loss</td>
									    </tr>
									    <tr>
									    	<td>April 27th</td>
									    	<td>Johns Hopkins University</td>
									    	<td>Walnut Ridge</td>
									    	<td>Win</td>
									    </tr>
									    <tr>
									    	<td>May 11th</td>
									    	<td>East Penn</td>
									    	<td>Philly</td>
									    	<td>Win</td>
									    </tr>
									     <tr>
									    	<td>May 18th</td>
									    	<td>Lancaster</td>
									    	<td>Walnut Ridge</td>
									    	<td>Loss</td>
									    </tr> -->
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
						<div class = "col-md-4 col-lg-4 col-sm-12 col-xs-12 push-right">
								<div class = "box">
									
									<!-- <iframe width="100%" height="200" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=1133+Rocky+Springs+Road,+Frederick,+MD&amp;aq=0&amp;oq=1133+Rocky&amp;sll=38.804821,-77.236967&amp;sspn=3.946532,4.042969&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=1133+Rocky+Springs+Rd,+Frederick,+Maryland+21702&amp;ll=39.438249,-77.444434&amp;spn=0.00382,0.003948&amp;z=14&amp;output=embed"></iframe>
									<br />
									<iframe width="100%" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=1133+Rocky+Springs+Rd,+Frederick,+MD&amp;aq=0&amp;oq=1133&amp;sll=38.804821,-77.236967&amp;sspn=3.946532,4.042969&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=1133+Rocky+Springs+Rd,+Frederick,+Maryland+21702&amp;ll=39.438249,-77.444434&amp;spn=0.000959,0.000987&amp;z=14&amp;layer=c&amp;cbll=39.438421,-77.445717&amp;panoid=E84JF13GxcZU73UtWr_LjQ&amp;cbp=12,47.45,,0,27.06&amp;output=svembed"></iframe><br /> -->
								</div>
						</div>
					</div>
				</div>
			</div>
<!-- 		</div>
 -->
	<!-- Slide #6 -->
		<div class = "slide" id = "slide6" data-slide = "6" data-stellar-background-ratio = ".5">
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
						  <table class="table table-bordered">
						  	<tr>
						  		<th>Name</th>
						  		<th>aka</th>
						  		<th>Positon</th>
						  		<th>Exec Board</th>
						  	</tr>
						    <tr>
						    	<td>Danielle Jacobs</td>
						    	<td>Klepto</td>
						    	<td>Prop, Hooker, 8-man, Flanker, Flyhalf</td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td>Lacy Ames</td>
						    	<td>Humper</td>
						    	<td>Prop, Hooker</td>
						    	<td>President</td>
						    </tr>
						   	<tr>
						    	<td>Kelly Stiles</td>
						    	<td>Potty Mouth</td>
						    	<td>Lock</td>
						    	<td></td>
						    </tr>
						    <tr>
						    	<td>Leslie Walsh</td>
						    	<td></td>
						    	<td>Prop, Flanker, 8-man, Scrum Half</td>
						    	<td>Vice President</td>
						    </tr>
						  </table>
						</div>
			        </div>
			        <div id="section2" class="tab-pane fade">
			            <div class="table-responsive">
			            	<table class="table table-bordered">
						  	<tr>
						  		<th>Name</th>
						  		<th>aka</th>
						  		<th>Positon</th>
						  		<th>Exec Board</th>
						  	</tr>
						    <tr>
						    	<td>Jessica McBroom</td>
						    	<td>Puss</td>
						    	<td>Flyhalf</td>
						    	<td>Social Chair, Backs Captain</td>
						    </tr>
						    <tr>
						    	<td>Karyn Farrar</td>
						    	<td></td>
						    	<td>Outside Center, Wing</td>
						    	<td></td>
						    </tr>
						   	<tr>
						    	<td>Faye Clayson</td>
						    	<td></td>
						    	<td>Wing</td>
						    	<td></td>
						    </tr>
						  </table>
			            </div>

			        </div>
			        <div id="section3" class="tab-pane fade">
			            <div class="table-responsive">
			            	<table class="table table-bordered">
							  	<tr>
							  		<th>Name</th>
							  		<th>aka</th>
							  		<th>Positon</th>
							  	</tr>
							    <tr>
							    	<td>Amy Morgan</td>
							    	<td>Badonk</td>
							    	<td>Lock</td>
							    </tr>
							    <tr>
							    	<td>Krist Grigg</td>
							    	<td>Tits McGee</td>
							    	<td>Flanker, Scrum Half</td>
							    </tr>
						  	</table>
			        	</div>
			    	</div>
			     	<div id="section4" class="tab-pane fade">
			            <div class="table-responsive">
			            </div>

			        </div>
			    </div>
			</div>
			
		</div>

	<!-- Slide #7 -->
		<div class = "slide" id = "slide7" data-slide = "7" data-stellar-background-ratio = ".5">
			<div class = "info">
				<div class = "container">
					<h1>Slide 5</h1>
					<p>This is the end of the example but it can go on and on and on.</p>
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