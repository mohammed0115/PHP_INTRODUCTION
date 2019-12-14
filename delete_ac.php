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
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$id=$_GET['id'];
$sql="DELETE FROM $tbl_name WHERE id='$id'";
$result=mysql_query($sql);
if($result){
echo "Deleted Successfully";
echo "<BR>";
echo "<a href='delete.php'>Back to main page</a>";
}
else {
echo "ERROR";
}
mysql_close();
?>
</body>
</html>