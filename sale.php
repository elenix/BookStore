<table width="100&" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
        <th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">SALE DATA</font></th>
    </tr>
    <tr>
        <td><hr /></td>
    </tr>
    <tr>
        <td align="center">
        <table width="700px" border="0" align="center" cellpadding="4" cellspacing="0">
        <tr>
            <td colspan="8" align="right" valign="middle" scope="col"><a href="index.php"><img src="picture/menu.png" width="32px" height="32" title="MENU" /></a></td>
        </tr>
        <tr>
            <th width="7%" align="center" bgcolor="#CCCCCC" scope="col">No</th>
            <th width="17%" align="center" bgcolor="#CCCCCC" scope="col">No Invoice</th>
            <th width="17%" align="center" bgcolor="#CCCCCC" scope="col">Date</th>
            <th width="49%" align="right" bgcolor="#CCCCCC" scope="col">Total</th>
            <th width="10%" align="center" bgcolor="#CCCCCC" scope="col">Action</th>
        </tr>
        <?php
            $no=1;
            $sql = "select * from sale_transactiontbl order by id desc";
            $process = mysql_query($sql);
            while($record = mysql_fetch_array($process))
            {
                $dte = substr($record['date'],8,2)."-".substr($record['date'],0,4);
        ?>
        <tr>
            <td align="center" scope="col" bgcolor="#FFFFFF"><?php echo $no ?></td>
            <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $record['status'] ?></td>
            <td align="left" scope="col" bgcolor="#FFFFFF"><?php echo $dte ?></td>
            <td align="right" scope="col" bgcolor="#FFFFFF"><?php echo number_format($record['total'], 0, ',','.') ?></td>
            <td align="center" scope="col" bgcolor="#FFFFFF"><a href="?go=Detail_Sale&amp;id=<?php echo $record['id']; ?>" title="Detail Sale" target="_self"><img src="picture/edit.png" width="15" height="15" /></a>&nbsp;&nbsp;<a onClick="return confirm('You sure want to delete this sale data?');" href="?go=Delete_Sale&amp;id=<?php echo $record['id']; ?>"><img src="picture/delete.png" width="15" height="15" /></a></td>
            </tr>
            <?php $no++; } ?>
        </table>
        <br />
        </td>
    </tr>
</table>