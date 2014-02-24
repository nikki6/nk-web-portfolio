<?php 
	
	//$db = new PDO("mysql:host=nkellerwebdesign.com;dbname=nkellerw_rugbyTeam","nkellerw_sql","billabong69");
	//$database = mysql_connect("nkellerwebdesign.com","nkellerw_sql", "billabong69");
	// $mysqli = new mysqli("localhost", "nkellerw_sql", "billabong69", "nkellerw_rugbyTeam");
	// if ($mysqli->connect_errno) {
 //    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	// }
	// echo $mysqli->host_info . "\n";

	$mysqli = mysqli_connect("localhost", "nkellerw_sql", "billabong69", "nkellerw_rugbyTeam");
	if ($mysqli->connect_errno) {
    	echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}

	$result = mysqli_query($mysqli, "SELECT * FROM schedule WHERE isCurrent LIKE 'yes'");
	
	$num = mysqli_num_rows($result);


		while($row = mysqli_fetch_assoc($result)){
			printf("<td><tr>%s</tr><tr>%s</tr><tr>%s</tr><tr>%s</tr></td>",$row['date'], $row['opponent'], $row['location'], $row['score']);
		}


	?>