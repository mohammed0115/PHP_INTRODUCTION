<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>Untitled Document</title>
</head>
<body>
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1">
<tr>
<td><form name="form1" method="post" action="insert_ac.php">
<table width="100%" border="0" cellspacing="1" cellpadding="3">
<tr>
<td colspan="3"><strong>Insert Administration </strong></td>
</tr>
<tr>
<td width="71">Class Name</td>
<td width="6">:</td>
<td width="301"><input name="name" autofocus="" type="text" id="name"></td>
</tr>
<tr>
<td>supervisor </td>
<td>:</td>
<td><select id="supervisor" name="n">

<?php 
$sql="SELECT `name` FROM `teacher`;";
$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){
echo "<option>";
echo $rows['name'];
echo "</option>";
}


?>
</td>
</tr>
<tr>
<td>subject</td>
<td>:</td>
<td><select id="subject" name="n">

<?php 
$sql="SELECT `name` FROM `subject`;";
$result=mysql_query($sql);

while($rows=mysql_fetch_array($result)){
echo "<option>";
echo $rows['Name'];
echo "</option>";
}


?></td>
</tr>
<tr>
<td colspan="3" align="center"><input type="submit" name="Submit" value="Save"></td>
</tr>
</table>
</form>
</td>
</tr>
</table>
<a href="index.php">Home</a> 
</body>
</html>