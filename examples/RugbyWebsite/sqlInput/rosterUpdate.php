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


		$sql = "UPDATE roster SET ";
		if ((!$varOrigFirstName == "")&&(!$varOrigLastName == "")) {
		
			if (!$varUpdLastName == "") {
				$sql = $sql."LastName = '".$varUpdLastName."',";
			}else{
			}
			if (!$varUpdFirstName == "") {
				$sql = $sql." FirstName = '".$varUpdFirstName."' ,";
			}else{
			}
			if (!$varUpdNickName == "") {
				$sql = $sql." NickName = '".$varUpdNickName."' ,";
			}else{
			}
			if (!$varUpdPosition == "") {
				$sql = $sql." Positon = '".$varUpdPosition."',";
			}else{
			}
			if (!$varUpdExecBoard== "") {
				$sql = $sql." FirstName = '".$varUpdExecBoard."',";
			}else{
			}
			if (!$varUpdGroup == "") {
				$sql = $sql." PosGroup = '".$varUpdGroup."'";
			}else{
			}
			$sql = $sql." WHERE FirstName = '".$varOrigFirstName."'AND Lastname = '".$varOrigLastName."'";

			$db = mysqli_connect("localhost","root","root", "Team_Schedule");
			if(mysqli_connect_errno()){
				 echo "error in connecting". mysqli_connect_errno();
				 exit();
			}else{
				mysqli_query($db, $sql);
				mysql_close($db);
			}
		}

		}else{
			echo "You need to put both an original first name and an original last name.";
		}


		// $db = mysqli_connect("localhost","root","root", "Team_Schedule");
		// 	if(mysqli_connect_errno()){
		// 		 echo "error in connecting". mysqli_connect_errno();
		// 		 exit();
		// 	}else{
		// 		mysqli_query($db, $sql);
		// 		mysql_close($db);
	
		// }
	header("Location: rosterForm.php");
	exit();


?>