<?php
include "../connection.php";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$answer = $_POST['answer'];
$date = date('Y-m-d');
if(!$_POST['name'] || !$_POST['message'] || !$_POST['answer'] || !$_POST['email']){
	$response["success"] = 0;
	echo json_encode($response);
}
else{
	if($answer == "7"){
		$response["success"] = 1;
		echo json_encode($response);
		$nameis = $_REQUEST['name'];
		$emailis = $_REQUEST['email'];
		$messageis = $_REQUEST['message'];
		
		array_push($response["Data_SK"], $Data_SK);
	}
		$response["success"] = 1;
		echo json_encode($response);
	}
	else{
		$response["success"] = 0;
		echo json_encode($response);
	}
?>