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
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
// select record from mysql
$sql="SELECT * FROM $tbl_name";
$result=mysql_query($sql);
?>
<table border="1" align="center" >
<tr>
<td><table border="1" >
<tr>
<td bgcolor="#FFFFFF">&nbsp;</td>
<td colspan="4"><strong>Delete data in mysql</strong> </td>
</tr>
<tr>
<td align="center"><strong>Id</strong></td>
<td align="center"><strong>Name</strong></td>
<td align="center" ><strong>Lastname</strong></td>
<td align="center" ><strong>Email</strong></td>
<td align="center" >&nbsp;</td>
</tr>
<?php
while($rows=mysql_fetch_array($result)){
?>
<tr>
<td ><?php echo $rows['id']; ?></td>
<td ><?php echo $rows['name']; ?></td>
<td ><?php echo $rows['lastname']; ?></td>
<td ><?php echo $rows['email']; ?></td>
<td ><a href="delete_ac.php?id=<?php echo $rows['id']; ?>">Delete</a></td>
</tr>
<?php
// close while loop
}
// close connection;
mysql_close();
?>
</table>
</tr>
</table>
<a href="index.php">Home</a> 
</body>
</html>