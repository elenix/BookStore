<?php
$sql = "DELETE from categorytbl where id='$_GET[id]'";
$process = mysql_query($sql);
if($process){
	echo "<meta http-equiv='refresh' content='0;home.php?go=Category'>";
}
else{
	echo "Data not delete yet!";
}
?>