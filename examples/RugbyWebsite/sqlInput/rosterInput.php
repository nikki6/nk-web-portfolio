<?php
	if($_POST['formSubmit'] == "Submit"){
		$varOption = $_POST['formOption'];
		$varFirstName = $_POST['formFN'];
		$varLastName = $_POST['formLN'];
		$varNickName = $_POST['formNN'];
		$varPosition = $_POST['formPosition'];
		$varExecBoard = $_POST['formEB'];
		$varGroup = $_POST['formGroup'];
			
		
			$db = mysqli_connect("localhost","root","root", "Team_Schedule");
			if(mysqli_connect_errno()){
				 //echo "error in connecting". mysqli_connect_errno();
				 exit();
			}else{
				//echo "Connection was a success!";
			

				$sql = "INSERT INTO roster VALUES ('".$varLastName . "', '" .$varFirstName . "', '" .
						$varNickName . "', '" .$varPosition . "', '" .$varExecBoard . "', '" .$varGroup. "')";
				mysqli_query($db, $sql);

				mysqli_close($db);
			}
			
	}

	
	header("Location: rosterForm.php");
	exit();
?>