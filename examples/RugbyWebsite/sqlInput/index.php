<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>FWRFC</title>
  <meta name="description" content="FWRFC Roster Input Form">
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

		<h1>Roster Input Form</h1>
		<div class = "rosterForm">
			<ul class="nav nav-tabs nav-justified" id="rosterTab">
				<li class="active"><a href="#section1" data-toggle="tab">New Player</a></li>
				<li><a href="#section2" data-toggle="tab">Update Players</a></li> 
			</ul>
			<div class="tab-content">
				<div id="section1" class="tab-pane fade in active">
					<h3>New Player Form</h3>
					<?php include("rosterForm.php"); ?>
				</div>

				<div id ="section2" class="tab-pane fade">
					<h3>Update Player Form</h3>
					<?php include("rosterUpdateForm.php"); ?>
				</div>
			</div>
		</div>

		<div class = "rosterTable">
			<h2>Roster Table</h2>
			<?php include("rosterTable.php"); ?>
		</div>
	</div>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery.js"></script>

    <script src="../js/bootstrap.min.js"></script> 

    <script type="text/javascript">
    	$('#rosterTab a').click(function (e) {
		  e.preventDefault();
		  $(this).tab('show');
		});
	</script>
</body>

</html>