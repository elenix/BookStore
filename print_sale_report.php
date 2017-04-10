<table width="700px" border="0" align="center" cellpadding="4" cellspacing="0">
<tr>
<th colspan="5px" align="center" scope="col">BOOK STORE EBF</th>
</tr>
<tr>
<th colspan="5" align="center" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>Sale Transaction</b></font></th>
</tr>
<tr>
<th colspan="5" align="center" scope="col">PERIOD</th>
</tr>
<tr>
<th colspan="5" align="center" scope="col"><b><font color="#990000"><?php echo $_POST['datestarttxt'] ?> S/D <?php echo $_POST['lastdatetxt'] ?></font></b></th>
</tr>
<tr>
<th colspan="5" align="center" scope="col"><hr /></th>
</tr>
<tr>
<th width="8%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
<th width="40%" align="left" scope="col" bgcolor="#CCCCCC">ID</th>
<th width="33%" align="left" scope="col" bgcolor="#CCCCCC">Date</th>
<th width="19%" align="center" scope="col" bgcolor="#CCCCCC">Total</th>
</tr>
<?php
include "connection.php";
$no = 1;
$dte1 = substr($_POST['datestart'],6,4)."-".substr($_POST['datestart'],3,2)."-".substr($_POST['datestart'],0,2);
$dte2 = substr($_POST['datestart'],6,4)."-".substr($_POST['datestart'],3,2)."-".substr($_POST['datestart'],0,2);
$sql = "select * from sale_transactiontbl where date >= '$dte1' and date <='$dte2' order by id desc";
$process = mysql_query($sql);
while($record = mysql_fetch_array($process))
{
	$dte = $dte2 = substr($record['datet'],8,2)."-".substr($record['date'],5,2)."-".substr($record['date'],0,4);
?>
<tr>
<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
<td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['id'] ?></td>
<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $dte ?></td>
<td align="center" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record['total'], 0, ',','.') ?></td>
</tr>
<?php $no++; } ?>
<?php 
$sql_total = "select sum(total) as gtotal from sale_transactiontbl where date >= '$dte1' and date <='$dte2' order by id desc";
$process_total = mysql_query($sql_total);
$record_total = mysql_fetch_assoc($process_total);
?>
<tr>
<td align="center" scope="col" bgcolor="#FFFFFF">&nbsp;</td> 
<td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td> 
<td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td> 
<th align="right" scope="col" bgcolor="#FFFFFF"><hr /></th>
</tr>
<tr>
<td align="center" scope="col" bgcolor="#FFFFFF">&nbsp;</td> 
<td align="left" scope="col" bgcolor="#FFFFFF">&nbsp;</td> 
<th align="right" scope="col" bgcolor="#FFFFFF">Grand Total :</th> 
<td align="right" scope="col" bgcolor="#FFFFFF"><font color="#FF0000"><b><?php echo number_format($record_total['gtotal'],0,',','.') ?></b></font></td>
</tr>
</table>
<script language="javascript">
window.print() 
</script>