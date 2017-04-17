<?php 
	include "../connection.php";

	$response = array();
	
	$email = $_POST['email'];	
		
	$result = mysql_query("SELECT * FROM sale_transactiontbl where email='$email' and status='1'") or die(mysql_error());
	
	if (mysql_num_rows($result) > 0) {
		$response["Data_TB"] = array();
		
		while ($row = mysql_fetch_array($result)) {
			$Data_TB = array();
			$Data_TB["id"] = $row["id"];
			$Data_TB["email"] = $row["email"];
			$Data_TB["total"] = number_format($row["total"], 0, ',','.');		
			
			array_push($respon["Data_TB"], $Data_TB);
		}

		$respon["success"] = 1;
		echo json_encode($respon);
	} else {
		$respon["success"] = 0;
		echo json_encode($respon);
	}
?>
