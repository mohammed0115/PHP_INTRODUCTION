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
mysql_connect($host, $username, $password)or die("cannot connect");
mysql_select_db($db_name)or die("cannot select DB");
// Get values from form
$name=$_POST['name'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
// Insert data into mysql
$sql="INSERT INTO $tbl_name(name, lastname, email)VALUES('$name', '$lastname', '$email')";
$result=mysql_query($sql);
// if successfully insert data into database, displays message "Successful".
if($result){
echo "Successful";
echo "<BR>";
echo "<a href='insert.php'>Back to main page</a>";
}
else {
echo "ERROR";
}
// close connection
mysql_close();
?>
</body>
</html>