<?php
include "connection.php";
$response = array();
$result = mysql_query("select * from booktbl where category_code = 'K-0' ORDER BY id desc") or die(mysql_error());
if(mysql_num_rows($result) >0){
	$response["Data_BK"] = array();
	while($row = mysql_fetch_array($result)){
		$Data_BK = array();
		$Data_BK["cover"] = $row['cover'];
		
		if(strlen($row['book_title']) > 45){
			$title = "".substr($row['book_title'],0,45)."...";
		}
		else{
			$title = $row['book_title'];
		}
		$Data_BK["title"] = $title;
		$Data_BK["author"] = $row['author'];
		$Data_BK["book_code"] = $row['book_code'];
		$Data_BK["price"] = number_format($row['price'],0,',','.');
		$description = "".substr($row['description'],0,175)."...";
		$Data_BK["description"] = $description;
		$Data_BK["rating"] = $row['rating'];
		array_push($response["Data_BK"], $Data_BK);
	}
	$response["success"] = 1;
		echo json_encode($response);
}
else{
	$response["success"] = 0;
	echo json_encode($response);
}
?>
		