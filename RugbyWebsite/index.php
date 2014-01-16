<?php 
	include("inc/header.php");
?>

<!-- Slide #1 -->
		<div class = "slide" id = "slide1" data-slide = "1" data-stellar-background-ratio = "0.5">
			<div class = "info">
				<h1>Welcome to the Frederick Women's Rugby Football Club</h1>
				
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
		</div>
	<!-- Slide #2 -->
		<div class = "slide" id = "slide2" data-slide = "2" data-stellar-background-ratio = ".5">
			<div class = "info">
				<h1 data-stellar-background-ratio = "0.3">Slide 2</h1>
				<ul class="nav nav-tabs" id="myTab">
		        <li class="active"><a href="#sectionA">Section A</a></li>
		        <li><a href="#sectionB">Section B</a></li>
		        <li class="dropdown">
		            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Dropdown <b class="caret"></b></a>
		            <ul class="dropdown-menu">
		                <li><a href="#dropdown1">Dropdown1</a></li>
		                <li><a href="#dropdown2">Dropdown2</a></li>
		            </ul>
		        </li>
		    </ul>
		    <div class="tab-content">
		        <div id="sectionA" class="tab-pane fade in active">
		            <h3>Section A</h3>
		            <p>Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui. Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth.</p>
		        </div>
		        <div id="sectionB" class="tab-pane fade">
		            <h3>Section B</h3>
		            <p>Vestibulum nec erat eu nulla rhoncus fringilla ut non neque. Vivamus nibh urna, ornare id gravida ut, mollis a magna. Aliquam porttitor condimentum nisi, eu viverra ipsum porta ut. Nam hendrerit bibendum turpis, sed molestie mi fermentum id. Aenean volutpat velit sem. Sed consequat ante in rutrum convallis. Nunc facilisis leo at faucibus adipiscing.</p>
		        </div>
		        <div id="dropdown1" class="tab-pane fade">
		            <h3>Dropdown 1</h3>
		            <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
		        </div>
		        <div id="dropdown2" class="tab-pane fade">
		            <h3>Dropdown 2</h3>
		            <p>Donec vel placerat quam, ut euismod risus. Sed a mi suscipit, elementum sem a, hendrerit velit. Donec at erat magna. Sed dignissim orci nec eleifend egestas. Donec eget mi consequat massa vestibulum laoreet. Mauris et ultrices nulla, malesuada volutpat ante. Fusce ut orci lorem. Donec molestie libero in tempus imperdiet. Cum sociis natoque penatibus et magnis dis parturient.</p>
		        </div>
		    </div>
			</div>
		</div>
	<!-- Slide #3 -->
		<div class = "slide" id = "slide3" data-slide = "3" data-stellar-background-ratio = "0.5">
			<div class = "info">
				<h1>Slide 3</h1>
				<h2>This website uses Parallax.</h2>
				<p>Pitchfork McSweeney's master cleanse, DIY tousled irony leggings gastropub Banksy. Sriracha kale chips tattooed, single-origin coffee literally VHS pop-up farm-to-table raw denim kitsch swag seitan Helvetica gluten-free. Irony Odd Future keytar, Terry Richardson cliche craft beer actually small batch occupy Wes Anderson. </p>
			</div>
		</div>
	<!-- Slide #4 -->
		<div class = "slide" id = "slide4" data-slide = "4" data-stellar-background-ratio = ".5">
			<div class = "info">
				<h1>Slide 4</h1>
				<p>This is the end of the example but it can go on and on and on.</p>
				<h3><a href = "../example.php">Back</a></h3>
			</div>
			
		</div>

		
	 <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>	

    <script type="text/javascript">
    $(window).stellar();
    </script>

    <script type="text/javascript">
    	$('#myTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		});

    </script>
</body>

</html>