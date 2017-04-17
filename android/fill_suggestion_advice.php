<?php
	include "../connection.php";
	
	$nama=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];
 	$answer=$_POST['answer'];
	
	$date=date('Y-m-d');
		
	if(!$_POST['name'] || !$_POST['message'] || !$_POST['answer'] || !$_POST['email']){
		$response["success"] = 0;
     	echo json_encode($response); 	
	}else{
		if ($answer=="7"){
			
			$response["success"] = 1;
     		echo json_encode($response); 
			
			$nameis=$_REQUEST['name'];
			$emailis=$_REQUEST['email'];
			$messageis=$_REQUEST['message'];
			
			$query = "INSERT INTO suggestion_advicetbl (name , email, date, message) VALUES ('$nameis','$emailis','$date','$messageis')";
			$result = mysql_query($query);
			if ($result) {
				$query1 ="select id from suggestion_advicetbl order by id DESC limit 1";
				$output=mysql_query($query1);
				$data=mysql_fetch_array($output);
				$id_message=$data['id'];
				$mail_to="muhammad.ismail@gmail.com";				
				$mail_subject="Comment Book for ".$namais." (Mobile Phone Android)";
				$mail_body ="FillComment Book".$namais." is like this :\n\n";
				$mail_body.="Name       : ".$namais."\n";
				$mail_body.="Date    : ".MalaysiaDate($date)."\n";
				$mail_body.="Email      : ".$emailis."\n";
				$mail_body.="Comment   : \n";
				$mail_body.=$messageis."\n\n";
				$send = mail($mail_to,$mail_subject,$mail_body, "From: $emailis");
				if ($send) {
					$response["success"] = 1;
					echo json_encode($response); 
				}else{
					$response["success"] = 1;
					echo json_encode($response); 
				}
			}else{
				$response["success"] = 0;
				echo json_encode($response); 
			}
		}else{
			$response["success"] = 0;
			echo json_encode($response); 
		}
	}
?>