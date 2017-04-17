<style type="text/css">
.main {
	margin:5px 10px 10px 10px;
}
</style>
<div class="main">
    <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">BOOK CATEGORY</font></th>
        </tr>
        <tr>
            <td><hr /></td>
        </tr>
        <tr>
        <td>
        <table width="400" border="0" align="center" cellpadding="4" cellspacing="1">
        <tr>
            <td colspan="4" align="right" valign="middle" scope="col"><a href="index.php"><img src="picture/menu.png" width="32" height="32" title="Menu" /></a>&nbsp;&nbsp;<a href="home.php?go=Add_Category"><img src="picture/add.png" width="32" height="32" title="Add Data" /></a></td>
        </tr>
        <tr>
            <th width="9%" align="center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">No</font></th>
            <th width="29%" align="left" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">ID</font></th>
            <th width="49%" align="left" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFFFF">Category Name</font></th>    
            <th width="13%" align="Center" bgcolor="#2A35A0" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2" color="#FFFF00">Action</font></th>
        </tr>
        <?php
            $no=1;
            $sql = "select * from categorytbl order by id asc";
            $process = mysql_query($sql);
            $totrecord = mysql_num_rows($process);
            while ($record = mysql_fetch_array($process))
            {
        ?>
        <tr>
            <td align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $no ?></font></td>
            <td align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['category_code'] ?></font></td>
            <td align="left" scope="col"><font face="Tahoma, Geneva, sans-serif" size="2"><?php echo $record['category_name']?></font></td>
            <th align="Center" scope="col"><a href="?go=Delete_Category&amp;id=<?php echo $record['id']; ?>"><img src="picture/delete.png" width="15" height="15" title="Delete" /></a></th>
        </tr>
          <?php $no++;}?>
          <tr>
            <td colspan="4" align="left" scope="col" bgcolor="#FFFFFF"><hr /></td>
          </tr>
          <tr>
            <td colspan="4" align="left" scope="col" bgcolor="#FFFFFF"><font face="Tahoma, Geneva, sans-serif" size="2"><b>Total : </b><?php echo $totrecord ?></font></td>
          </tr>
        </table>
        </td>
        </tr>
    </table>
</div>