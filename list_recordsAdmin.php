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
$db_name="schoolmanagement"; // Database name
$tbl_name="admin"; // Table name
// Connect to server and select database.
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db($db_name)or die("cannot select DB");
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
<br />
<br />
<br />
<table width="400" align="center" border="0" cellspacing="1" cellpadding="0">
<tr>
<td>
<table width="400" border="1" cellspacing="0" cellpadding="3">
<tr>
<td colspan="4"><strong>List data from mysql </strong> </td>
</tr>
<tr>
<td align="center"><strong>Name</strong></td>
<td align="center"><strong>phone</strong></td>
<td align="center"><strong>Email</strong></td>
<td align="center"><strong>Update</strong></td>
<!--<td align="center"><strong>Delete</strong></td>-->
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td><?php echo $rows['name']; ?></td>
<td><?php echo $rows['phone']; ?></td>
<td><?php echo $rows['email']; ?></td>
<td align="center"><a href="update.php?id=<?php echo $rows['id']; ?>">Update</a></td>
<!--<td align="center"><a href="delete.php?id=<?php echo $rows['id']; ?>">Delete</a></td>-->
</tr>
<?php
}
?>
</table>
</td>
</tr>
</table>
<a href="index.php">Home</a>
<?php
mysql_close();
?>
</body>
</html>