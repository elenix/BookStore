<?php
include "../connection.php";
$code = $_POST['code'];
$email = $_POST['email'];
$date = date("Y-m-d");
$total = str_replace(".","",$_POST['total']);
$date = date('Y-m-d');

if(!$_POST['code']){
	$response["success"] = 1;
	echo json_encode($response);
}
else{
	$result0 = mysql_query("SELECT * FROM customertbl where email = '$email'") or die(mysql_error());
	if(mysql_num_rows($result0) > 0){
		$result1 = mysql_query("SELECT * FROM sale_transactiontbl where email = '$email' and status ='1' ") or die(mysql_error());
		if(mysql_num_rows($result1) <= 0) {
			$query0 = "INSERT INTO sale_transactiontbl (date, email, total, status) VALUES ('$date','$email','$total','1')";
			$result2 = mysql_query($query0);
		}
		$result3 = mysql_query("SELECT * FROM sale_transactiontbl where email = '$email' and status ='1' ") or die(mysql_error());
		$row = mysql_fetch_array($result3);
		$query1 = "INSERT INTO detail_sale_transactiontbl (id, book_code, price, total, sub_total) VALUES ('".$row['id']."','$code','$1','$total')";
		$result4 = mysql_query($query1);
		$response["success"] = 1;
		echo json_encode($response);
	}
	else{
		$response["success"] = 0;
		echo json_encode($response);
	}
}
?>