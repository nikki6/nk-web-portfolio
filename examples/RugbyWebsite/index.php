<?php 
	include("inc/header.php");
?>

<!-- Slide #1 -->
		<div class = "slide" id = "slide1" data-slide = "1" data-stellar-background-ratio = "0.5">
			<div class = "info">
				<h1 class = "banner1">Welcome to the Frederick Women's Rugby Football Club</h1>
				
				
			</div>
		</div>
<!-- 		<img class = "logo" src="images/logoholder.png">
 -->	<!-- Slide #2 -->
		<div class = "slide" id = "slide2" >
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
							<p>
								It's always a great time for new players to join us! 
								All experience levels are welcome; no previous knowledge of the 
								sport is necessary! Check out the <a href="about.html"><b>About Rugby</b></a>
								 page for a brief introduction to the sport. 
							</p>
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
						<div class = "row">
							<div class = "teampic col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<img class = "img-responsive" src = "images/team.png">
							</div>
						</div>
						<div class = "row">
							<div class = "social col-md-12 col-lg-12 col-sm-12 col-xs-12">
								<ul class = "list list-inline">
									<li><a href="https://www.facebook.com/FWRFC‎"><img class = "socialMedia img-responsive" src = "images/social_media/Facebook-icon.png"></a></li>
									<li><a href="http://fwrfc.blogspot.com"><img class = "socialMedia img-responsive" src = "images/social_media/Blogger-icon.png"></a></li>
<!-- 									<li><a href="#"><img class = "socialMedia img-responsive" src = "images/social_media/Youtube-Old-icon.png"></a></li>
 -->									<li><a href="https://twitter.com/FWRFC‎"><img class = "socialMedia img-responsive" src = "images/social_media/Twitter-icon.png"></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!-- Slide #3 -->
		<div class = "slide" id = "slide3"  data-stellar-background-ratio = "0.5">
			<div class = "info">
<<<<<<< HEAD
				<h1>Slide 4</h1>
				<p>This is the end of the example but it can go on and on and on.</p>
			</div>
			
		</div>
	<!-- Slide #5 -->
		<div class = "slide" id = "slide5" data-slide = "5" data-stellar-background-ratio = ".5">
			<div class = "info">
				<h1>Schedule and Maps</h1>
<!-- 				<div class = "container">
 -->					<div class = "row">
						<div class = "col-md-5 col-lg-5 col-sm-12 col-xs-12">
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
									  		$host = "www.nkellerwebdesign.com";
									  		$user = "nkellerw_public";
									  		$pw = "billabong17";
						            		//$db = new PDO('mysql:host=$host;dbname=nkellerw_rugbyTeam' $user, $pw);

						            		$result = mysql_query("SELECT * FROM schedule WHERE isCurrent LIKE 'yes'");

						            		$num = mysql_num_rows($result);

						            		$i = 0;

						            		while ($i < $num) {
						            			printf("<tr><td> %s </td><td> %s </td><td> %s </td><td> %s </td></tr>");
						            			mysql_result($result, $i, 'date'); mysql_result($result, $i, 'opponent'); mysql_result($result, $i, 'location'); mysql_result($result, $i, 'score');
						            			$i++;
						            		}
						            	?>
									    <tr>
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
									    </tr>
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
										    <tr>
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
										    </tr>
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
									    <tr>
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
									    </tr>
									  </table>
						        	</div>
						    	</div>
						        <div id="sectionD" class="tab-pane fade">
						            <h3 class = "title">Fall 2012 15s Schedule</h3>
						            <div class="table-responsive">
						            </div>

						        </div>
						    </div>
=======
				<h1>Important Information</h1>
				<div class = "row">
					<div class = "col-md-7 col-lg-7 col-sm-12">
						<div class="media">
						  <a class="pull-left" href="docs/emergencyform.pdf">
						    <img class="media-object img-responsive" src="images/text_document.png" alt="document">
						  </a>
						  <div class="media-body">
						    <h2>Emergency Info Sheet</h2>
						    <p>Complete and Submit to the <a href="mailto:fwrfc.execsec@yahoo.com">Executive Secretary</a></p>
						  </div>
>>>>>>> a324875cf66cc77889728c56449c8ff7d7cf8ed9
						</div>
						<div class="media">
						  <a class="pull-left" href="https://platform.allplayers.com/g/frederick_women_s_rugby_football_club-17320_2013/register?destination=https%3A%2F%2Fplatform.allplayers.com%2Fg%2Fusarugby_2013%2Fregister&from=110e430f-017c-11e3-9d8d-22000a929134">
						    <img class="media-object img-responsive" src="images/usarugby1.png" alt="usarugby">
						  </a>
						  <div class="media-body">
						    <h2>Get CIPPed</h2>
						    <p>Forward information to the <a href="mailto:fwrfc.execsec@yahoo.com">Executive Secretary</a> after you have registered. Also if 
						    	you need help you can contact the Executive Secretary and she will walk you through it.</p>
						  </div>
						</div>
					</div>
					<div class = "contact col-md-4 col-lg-4 col-sm-12">
						<h2>Contact Us</h2>
						<ul class="list">
							<li><a href="mailto:fwrfc.president@yahoo.com?subject=Mail from the FWRFC Website">Lacy Ames, President</a></li>
							<li><a href="mailto:fwrfc.vicepresident@yahoo.com?subject=Mail from the FWRFC Website">Leslie Walsh, Vice President</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	<!-- Slide #4 -->
		<div class = "slide" id = "slide4" data-slide = "4" data-stellar-background-ratio = ".5">
			<div class = "row">
				<div class = "info">
					<div class = "video col-md-12 col-lg-12 col-sm-12 col-xs-12">
						<h1>Rugby 101</h1>
						<p>Check out this awesome video that Washington State Women's Rugby Team made explain the basics on rugby.</p>
						<iframe class = "video" width="50%" height="auto" src="//www.youtube.com/embed/YVtD0_y2hr0" frameborder="1" allowfullscreen></iframe>
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