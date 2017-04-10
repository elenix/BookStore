<style type="text/css">
.main{
	margin:5px 10px 10px 10px;
}
</style>
<div class="main">
<table width="100&" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
<th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">BOOK DATA</font></th>
</tr>
<tr>
<td><hr /></td>
</tr>
<tr>
<td>
<table width="850px" border="0" align="center" cellpadding="4" cellspacing="1">
<tr>
<td colspan="9" align="right" valign="middle" scope="col"><a href="index.php"><img src="" width="32px" height="32" title="MENU" /></a>&nbsp;&nbsp;
<a href="home.php?go=Add_Book"><img src="" width="32px" height="32px" title="ADD DATA" /></a></td>
</tr>
<?php
$sql = "select * from categorytbl onner join booktbl on booktbl.category_code = categorytbl.category_code group by categorytbl.category_code order by categorytbl.id asc";
$process = mysql_query($sql);
while($record = mysql_fetch_array($process))
{
?>
<tr>
<td colspan="9px" align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px"><b>Category:</b><?php echo $record['category_name']?></font>
</td>
</tr>
<tr>
<th width="5%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">No</font></th>
<th width="13%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Cover</font></th>
<th width="13%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Code</font></th>
<th width="42%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Book Title</font></th>
<th width="20%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Author</font></th>
<th width="12%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Price</font></th>
<th width="8%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2px" color="#FFFFFF">Action</font></th>
</tr>
<?php
$no=1;
$sql1 = "select * from booktbl where category_code = '$record[category_code]' order by id asc";
$process1 = mysql_query($sql1);
while($record1 = mysql_fetch_array($process1))
{
?>
<tr>
<td align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no ?></font></td>
<td align="center" scope="col"><img src="cover/<?php echo $record1['cover'] ?>" width="80px" height="110px" border="1"></td>
<td align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record1['book_title'] ?></font></td>
<td align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record1['author'] ?></font></td>
<td align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo number_format($record1['price'],0,',','.') ?></font></td>
<th align="center" scope="col"><a href=""><img src="" width="15px" height="15px" title="Delete" /></a></th>
</tr>
<?php $no++;} ?>
<tr>
<td colspan="9px" align="left" scope="col"><hr /></td>
</tr>
<tr>
<td colspan="9px" align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><b>Total :</b><?php echo $no-1; } ?></font></td>
</tr>
<td>
<td colspan="9px" align="center" scope="col" bgcolor="#FFFFFF">&nbsp;</td>
</td>
</table>
<br />
</td>
</tr>
</table>
</div>
