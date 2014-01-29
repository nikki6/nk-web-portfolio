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
						    <tr>
						    	<td>Shauna Johnson</td>
						    	<td></td>
						    	<td>Lock</td>
						    	<td>PR</td>
						    </tr>
						    <tr>
						    	<td>Rebecca Arbuthnot</td>
						    	<td></td>
						    	<td>Lock, Outside Center</td>
						    	<td>Match Sec</td>
						    </tr>
						    <tr>
						    	<td>Shannon Porter</td>
						    	<td></td>
						    	<td>Prop</td>
						    	<td>Secretary</td>
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
						    	<td>Social Chair</td>
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
						    <tr>
						    	<td>Nicole Prorock</td>
						    	<td></td>
						    	<td>Wing, Center</td>
						    	<td>Treasurer</td>
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