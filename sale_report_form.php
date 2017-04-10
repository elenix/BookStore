<style type="text/css">
div.ui-datepicker{
	font-size:12px;
}
</style>
<link href="" rel="stylesheet">
<script src="jquery/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("#startdate").datepicker({
		showOn: "both", buttonImage: "", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});
	$("lastdate").datepicker({
		showOn: "both", buttonImage: "", buttonImageOnly: true, changeMonth: true, changeYear: true, dateFormat: "dd-mm-yy"});
})
</script>
<form name="form1" method="post" action="home.php?go=Sale_Report">
<table width="500px" border="0" align="center" cellpadding="2" cellspacing="2">
<tr>
<td width="32%" align="left" valign="top">
<a href="index.php"><img src="" width="32" height="32" title="Back" /></a>
</td>
</tr>
<tr>
<td scope="col">Start Date</td>
<td width="8" scope="col">:</td>
<td width="377px" scope="col"><input name="startdate" type="text" id="startdate" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly /></td>
</tr>
<tr>
<td>Last Date</td> 
<td width="8" scope="col">:</td>
<td width="377px" scope="col"><input name="lastdate" type="text" id="lastdate" value="<?php echo date('d-m-Y') ?>" size="6" maxlength="10" readonly /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="rptbtn" id="rptbtn" value="Process"></td>
</tr>
</table>
</form>