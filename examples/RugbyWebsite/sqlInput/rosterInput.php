<?php
	if($_POST['formSubmit'] == "Submit"){
		// $varFirstName = mysql_real_escape_string($_POST['formFN']);
		// $varLastName = mysql_real_escape_string($_POST['formLN']);
		// $varNickName = mysql_real_escape_string($_POST['formNN']);
		// $varPosition = mysql_real_escape_string($_POST['formPosition']);
		// $varExecBoard = mysql_real_escape_string($_POST['formEB']);
		// $varGroup = mysql_real_escape_string($_POST['formGroup']);
			

		// $varFirstName = htmlspecialchars_decode($varFirstName);
		// $varLastName = htmlspecialchars_decode($varLastName);
		// $varNickName = htmlspecialchars_decode($varNickName);
		// $varPosition = htmlspecialchars_decode($varPosition);
		// $varExecBoard = htmlspecialchars_decode($varExecBoard);
		// $varGroup = htmlspecialchars_decode($varGroup);

		$varFirstName = $_POST['formFN'];
		$varLastName = $_POST['formLN'];
		$varNickName = $_POST['formNN'];
		$varPosition = $_POST['formPosition'];
		$varExecBoard = $_POST['formEB'];
		$varGroup = $_POST['formGroup'];
			
			include_once("security/psl-config.php");
			$db = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
			if(mysqli_connect_errno()){
				 //echo "error in connecting". mysqli_connect_errno();
				 exit();
			}else{
				//echo "Connection was a success!";
			

				$sql = "INSERT INTO roster VALUES ('" .$varLastName . "', '".$varFirstName ."', '" .
						$varNickName . "', '" .$varPosition . "', '" .$varExecBoard . "', '" .$varGroup. "')";
				mysqli_query($db, $sql);

				mysqli_close($db);
			}
			
	}

	
	header("Location: index.php");
	exit();
?>