<?php
	
	if($_POST['formSubmit'] == "Submit"){
		$varOrigFirstName = mysql_real_escape_string($_POST['oldFN']);
		$varOrigLastName = mysql_real_escape_string($_POST['oldLN']);
		$varUpdFirstName = mysql_real_escape_string($_POST['updFN']);
		$varUpdLastName = mysql_real_escape_string($_POST['updLN']);
		$varUpdNickName = mysql_real_escape_string($_POST['updNN']);
		$varUpdPosition = mysql_real_escape_string($_POST['updPosition']);
		$varUpdExecBoard = mysql_real_escape_string($_POST['updEB']);
		$varUpdGroup = mysql_real_escape_string($_POST['updGroup']);

		$varOrigFirstName = htmlspecialchars_decode($varOrigFirstName);
		$varOrigLastName = htmlspecialchars_decode($varOrigLastName);
		$varUpdFirstName = htmlspecialchars_decode($varUpdFirstName);
		$varUpdLastName = htmlspecialchars_decode($varUpdLastName);
		$varUpdNickName = htmlspecialchars_decode($varUpdNickName);
		$varUpdPosition = htmlspecialchars_decode($varUpdPosition);
		$varUpdExecBoard = htmlspecialchars_decode($varUpdExecBoard);
		$varUpdGroup = htmlspecialchars_decode($varUpdGroup);


		$query = array();

		$sql = "UPDATE roster SET";

		//This is where all the text inputs are checked to see if they need to be added to the 
		//sql query.
		if ((!$varOrigFirstName == "")&&(!$varOrigLastName == "")) {
		
			if (!$varUpdLastName == "") {
				$query[] = "LastName = '".$varUpdLastName."'";
			}

			if (!$varUpdFirstName == "") {
				$query[] = "FirstName = '".$varUpdFirstName."' ";
			}

			if (!$varUpdNickName == "") {
				$query[] = "NickName = '".$varUpdNickName."' ";
			}

			if (!$varUpdPosition == "") {
				$query[] = "Position = '".$varUpdPosition."'";
			}

			if (!$varUpdExecBoard== "") {
				$query[] = "Execboard = '".$varUpdExecBoard."'";
			}

			if (!$varUpdGroup == "Select") {
				$query[] = "PosGroup = '".$varUpdGroup."'";
			}
		}
		
		}else{
			echo "You need to put both an original first name and an original last name.";
		}
		//This is where the commas are handled.
		$num = count($query);
		$i = 1;
		while ($i < $num){
			$sql = $sql." ".$query[$i-1].", ";
			$i++;
		}
		$last = $num - 1;
		$sql = $sql." ".$query[$last]." ";
		

		$sql = $sql." WHERE FirstName = '".$varOrigFirstName."' AND LastName = '".$varOrigLastName."'";
		include_once("security/psl-config.php");
		$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
		if(mysqli_connect_errno()){
			 echo "error in connecting". mysqli_connect_errno();
			 exit();
		}else{
			mysqli_query($db, $sql);
			//echo "Connection was successful";
			mysql_close($db);
		}
	
	header("Location: index.php");
	exit();

?>