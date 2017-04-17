<?php 
	include "../connection.php";
	$response = array();
	$result = mysql_query("SELECT * FROM suggestion_advicetbl ORDER BY id desc LIMIT 0,25") or die(mysql_error());
	
	if (mysql_num_rows($result) > 0) {
		$response["Data_SK"] = array();
		
		while ($row = mysql_fetch_array($result)) {
			$Data_SK = array();
			$Data_SK["name"] = $row["name"];
			$Data_SK["date"] =  substr($row['date'],8,2)."-".substr($row['date'],5,2)."-". substr($row['date'],0,4); 
			$Data_SK["email"] = $row["email"];
			$Data_SK["message"] = $row["message"];		
			
			array_push($response["Data_SK"], $Data_SK);
		}

		$response["success"] = 1;
		echo json_encode($respon);
	} else {
		$respon["success"] = 0;
		echo json_encode($respon);
	}
?>
