<?php
$sql = "INSERT INTO booktbl(book_code,book_title,author,price,description,category_code,cover) VALUES ('$_POST[bookcdtxt]','$_POST[titletxt]','$_POST[authortxt]','$_POST[pricetxt]','$_POST[descriptiontxt]','$_POST[categorylist]','$_POST[cover]')";
$process = mysql_query($sql);
if($process){
	header("location:home.php/go=Book");
}
else{
	echo "Data cannot be save!";
}
?>