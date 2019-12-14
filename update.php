<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
<title>Untitled Document</title>
</head>
<body>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="test2"; // Database name
$tbl_name="test_mysql"; // Table name
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db($db_name)or die("cannot select DB");
$id=$_GET['id'];
$sql="SELECT * FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
$rows=mysql_fetch_array($result);
?>
<br />
<br />
<br />
<table width="400" border="0" align="center" cellspacing="1" cellpadding="0">
<tr>
<form name="form1" method="post" action="update_ac.php">
<td>
<table width="100%" border="1" cellspacing="1" cellpadding="3">
<tr>
<td>&nbsp;</td>
<td colspan="3"><strong>Update data in mysql</strong> </td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
<td align="center">&nbsp;</td>
</tr>
<tr>
<td align="center">&nbsp;</td>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>Lastname</strong></td>
<td align="center"><strong>Email</strong></td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="center"><input name="name" autofocus="" type="text" value="<?php echo $rows['name'];?>"></td>
<td align="center"><input name="phone" type="text" value="<?php echo $rows['phone'];?>" size="15"></td>
<td><input name="email" type="text" value="<?php echo $rows['email']; ?>" size="15"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input name="id" type="hidden" value="<?php echo $rows['id'];?>"></td>
<td align="center"><input type="submit" name="Submit" value="Update"></td>
<td>&nbsp;</td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<a href="index.php">Home</a>
<?php
mysql_close();
?>
</body>
</html>