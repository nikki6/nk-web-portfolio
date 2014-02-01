<?php
	
	if($_POST['formSubmit'] == "Submit"){
		$varOrigFirstName = $_POST['oldFN'];
		$varOrigLastName = $_POST['oldLN'];
		$varUpdFirstName = $_POST['updFN'];
		$varUpdLastName = $_POST['updLN'];
		$varUpdNickName = $_POST['updNN'];
		$varUpdPosition = $_POST['updPosition'];
		$varUpdExecBoard = $_POST['updEB'];
		$varUpdGroup = $_POST['updGroup'];

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