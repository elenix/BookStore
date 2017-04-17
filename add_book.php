<style type="text/css">
.main {
		margin: 5px 10px 10px 10px;
}
</style>
<?php
    $sql = "select * from booktbl order by id desc";
    $process = mysql_query($sql);
    $record = mysql_fetch_array($process);
?>
<div class="main">
<table width="100%" border="0px" align="center" cellpadding="0" cellspacing="0">
<tr>
    <th align="center" scope="col"><font face="Tahoma, Geneva, sans-serif" color="#000000" size="3">ADD BOOK DATA</font></th>
</tr>
<tr>
    <td><hr /></td>
</tr>
<tr>
<td>
<form id="form1" name="form1" method="post" action="home.php?go=Save_Book">
    <table width="450px" border="0" align="center">
    <tr>
        <td align="left" valign="middle"><a href="home.php?go=Book"><img src="picture/menu.png" alt="" width="32px" height="32px" title="MENU" /></a></td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="top">&nbsp;</td>
    </tr>
    <tr>
        <td width="30%" align="left" valign="middle">BOOK CODE</td>
        <td width="2%" align="left" valign="middle">:</td>
        <td width="68%" align="left" valign="middle"><input name="bookcdtxt" type="text" id="bookcdtxt" size="5" maxlength="5" value="<?php echo "B-"; echo $record['id']+1 ?>" readonly /></td>
    </tr>
    <tr>
        <td align="left" valign="middle">BOOK TITLE</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><input name="titletxt" type="text" id="titletxt" size="50" maxlength="50" /></td>
    </tr>
    <tr>
        <td align="left" valign="middle">AUTHOR</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><input name="authortxt" type="text" id="authortxt" size="35" maxlength="35" /></td>
    </tr>
    <tr>
        <td align="left" valign="middle">PRICE</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><input name="pricetxt" type="text" id="pricetxt" size="15" maxlength="10" /></td>
    </tr>
    <tr>
        <td align="left" valign="middle">DESCRIPTION</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><textarea name="descriptiontxt" rows="4" id="descriptiontxt"></textarea></td>
    </tr>
    <tr>
        <td align="left" valign="middle">CATEGORY</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><select name="categorylist" id="categorylist">
        <option selected="selected"></option>
        <?php 
        $sql1="select * from categorytbl order by id asc";
        $process1 = mysql_query($sql1);
        while($record1 = mysql_fetch_array($process1))
        {
        ?>
        <option value="<?php echo "$record1[category_code]";?>"><?php echo "$record1[category_code] - $record1[category_name]"; } ?></option>
        </select>
        </td>
    </tr>
    <tr>
        <td align="left" valign="middle">COVER</td>
        <td align="left" valign="middle">:</td>
        <td align="left" valign="middle"><input name="cover" type="text" id="cover" size="15" maxlength="15" /> In Small Letter</td>
    </tr>
    <tr>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle">&nbsp;</td>
        <td align="left" valign="middle"><label><input type="submit" name="Submit" value="Save" />
        </label>
        </td>
    </tr>
    </table>
</form>
</td>
</tr>
</table>

































