<?php
$sql = "INSERT INTO categorytbl(category_code,category_name) VALUES ('$_POST[categorycdtxt]','$_POST[categorynmtxt]')";
$process = mysql_query($sql);
if($process){
	header("location:home.php?go=Category");
}
else{
	echo "Data cannot be save!";
}
?>