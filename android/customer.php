<?php
include "../connection.php";
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];
if(!$_POST['name'] || !$_POST['address'] || !$_POST['email'] || !$_POST['telephone']){
	$response["success"] = 0;
	echo json_encode($response);
}
else{
	$response["success"] = 1;
	echo json_encode($response);
	$name = $_POST['name'];
	$address = $_POST['address'];
	$email = $_POST['email'];
	$telephone = $_POST['telephone'];
	$search = "select * from customertbl where email ='$email'";
	$qrycr = mysql_query($search);
	if(mysql_num_rows($qrycr) > 0){
		$query0 = "UPDATE customertbl set name = '$name', address = '$address', telephone = '$telephone' where email = '$email'";
		$result0 = mysql_query($query0);
		if($result0){
			$response["success"] = 1;
			echo json_encode($response);
		}
		else{
			$response["success"] = 1;
			echo json_encode($response);
		}
	}
	else{
		$query1 = "INSERT INTO customertbl set (name,address,email,telephone) VALUES ('$name','$address','$email','$telephone')";
		$result1 = mysql_query($query0);
		if($result1){
			$response["success"] = 1;
			echo json_encode($response);
		}
		else{
			$response["success"] = 0;
			echo json_encode($response);
		}
	}
}
?>
	