<?php
include "../connection.php";
$response = array();
$email = $_POST['email'];
$result = mysql_query("SELECT * FROM sale_transactiontbl inner join detail_sale_transactiontbl on sale_transactiontbl.id = detail_sale_transactiontbl.id inner booktbl on booktbl.book_code = detail_sale_transactiontbl.book_code where sale_transactiontbl.email = '$email' and sale_transactiontbl.status = '1'") or die (mysql_error());

if(mysql_num_rows($result) > 0){
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