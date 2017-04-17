<?php
$sql = "select * from sale_transactiontbl where id = '$_GET[id]'";
$process = mysql_query($sql);
$record = mysql_fetch_array($process);
$dte = substr($record['date'],8,2)."-".substr($record['date'],5,2)."-".substr($record['date'],0,4);
?>
<form id="form1" name="form1" method="post" action="home.php?go=Sale">
    <table width="700px" border="0" align="center">
    <tr>
        <td width="12%" align="left" valign="middle">No Invoice</td>
        <td width="1%" align="left" valign="middle">:</td>
        <td width="87%" align="left" valign="top"><input name="noidtxt" type="text" id="noidtxt" value="<?php echo $record['id'] ?>" size="7" maxlength="50" readonly="readonly" /></td>
    </tr>
    <tr>
        <td align="left" valign="middle">Date</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="top"><input name="dte" type="text" id="dte" value="<?php echo $dte ?>" size="6" maxlength="10" readonly="readonly" /></td>
    </tr>
    <tr>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
        <td align="left" valign="top"><input name="addbtn" type="submit" id="addbtn" value="Return"/></td>
    </tr>
    <tr>
        <td colspan="3" align="left" valign="top"><hr /></td>
    </tr>
    <tr>
        <td colspan="3" align="left" valign="top"><table width="100%" border="0" cellpadding="4" cellspacing="0">
        <tr>
            <th width="5%" bgcolor="#CCCCCC" scope="col">No</th>
            <th width="15%" align="left" bgcolor="#CCCCCC" scope="col">Book Code</th>
            <th width="43%" align="left" bgcolor="#CCCCCC" scope="col">Book Title</th>
            <th width="16%" align="left" bgcolor="#CCCCCC" scope="col">Price</th>
            <th width="8%" align="left" bgcolor="#CCCCCC" scope="col">Total</th>
            <th width="13%" align="left" bgcolor="#CCCCCC" scope="col">Sub Total</th>
        </tr>
        <?php
            $no = 1;
            $sql1 = "select * from detail_sale_transactiontbl inner join booktbl on detail_sale_transactiontbl.book_code = booktbl.book_code where detail_sale_transactiontbl.id = '$record[id]'";
            $process1 = mysql_query($sql1);
            while ($record1 = mysql_fetch_array($process1))
            {
        ?>
        <tr>
            <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
            <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['book_code'] ?></td>
            <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record1['book_title'] ?></td>
            <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['price'],0,',','.') ?></td>
            <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $record1['total'] ?></td>
            <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record1['sub_total'],0,',','.') ?></td>
        </tr>
        <?php $no++ ; } ?>
        <?php
            $sql_total = "select sum(subtotal) as gtotal from detail_sale_transactiontbl where detail_sale_transactiontbl.id = '$record[id]'";
            $process_total = mysql_query($sql_total);
            $record_total = mysql_fetch_assoc($process_total);
        ?>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <th colspan="2" align="right">Grand Total :</th>
            <td align="right" bgcolor="#FFFF00"><font color="#FF0000"><b><?php echo number_format($record_total('gtotal'), 0, ',', '.') ?></b></font></td>
        </tr>
        </table></td>
    </tr>
    <tr>
        <td colspan="3" align="left" valign="top">&nbsp;</td>
    </tr>
    </table>
</form>




























