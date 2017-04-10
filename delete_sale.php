<?php
$sql = "DELETE from detail_sale_transactiontbl where id = '$_GET[id]'";
$process = mysql_query($sql);
$sql = "DELETE from sale_transactiontbl where id = '$_GET[id]'";
$process = mysql_query($sql);
if($process){
	echo "<script>alert('The Sale Transaction Data have been deleted!')</script>";
	echo "<meta http-equiv="refresh" content='0;home.php?go=Sale'>";
}
else{
	echo "<script>alert('The Sale Transaction Data failed!')</script>";
	echo "<meta http-equiv="refresh" content='0;home.php?go=Sale'>";
}
?>