<form id="form1" name="form1" method="post" action="print_sale_report.php" target="new">
    <table width="700px" border="0" align="center" cellpadding="2" cellspacing="0" bgcolor="#FFFFFF">
        <tr>
            <th width="637" align="left" valign="middle" scope="col"><font color="#000000" face="Tahoma, Geneva, sans-serif" size="2"><b>SALE TRANSACRION DATE PERIOD :
            <input name="datestarttxt" type="text" id="datestarttxt" value="<?php echo $_POST['startdate'] ?>" size="10" readonly />
            S/D
            <input name="lastdatetxt" type="text" id="lastdatetxt" value="<?php echo $_POST['lastdate'] ?>" size="10" readonly /></b></font></th>

            <th width="55px" align="right" valign="middle" scope="col"><a href="print_sale_report.php"><input type="image" src="picture/print.png" width="16" height="16" title="Print" /></a></th>
        </tr>
    </table>
    <table width="700px" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
            <th colspan="4" align="right" scope="col"><a href="index.php"><img src="picture/menu.png" alt="" width="32" height="32" title="Menu" /></a></th>
        </tr>
        <tr>
            <th width="6%" align="center" scope="col" bgcolor="#CCCCCC">No</th>
            <th width="22%" align="center" scope="col" bgcolor="#CCCCCC">ID</th>
            <th width="55%" align="center" scope="col" bgcolor="#CCCCCC">Date</th>
            <th width="17%" align="center" scope="col" bgcolor="#CCCCCC">Total</th>
        </tr>
        <?php 
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
        <?php $no++;}?>
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
</form>