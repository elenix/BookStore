<?php
	include "../connection.php";
	
	$email=$_POST['email'];	
	
	$result = mysql_query("SELECT * FROM sale_transactiontbl where email='$email' and status='1'") or die(mysql_error());
		if (mysql_num_rows($result) > 0) {
			$query = "UPDATE sale_transactiontbl set status = '0' where email='$email'";
			$result2 = mysql_query($query);
				
			$response["success"] = 1;
			echo json_encode($response); 
		}
?>