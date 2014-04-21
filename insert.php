<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
</head>

<body>
<?php

$con=mysql_connect("localhost","root","");
if(!$con)
{
die('could not connect'.mysql_error());
}

mysql_select_db("courier",$con);
if ($_POST['type']=="client")
$tablechoice="client";
else $tablechoice="employee";

$sql="INSERT INTO $tablechoice(username, password,name,emailid,mobile,address,city,country) VALUES ('$_POST[username]','$_POST[password]','$_POST[fname]','$_POST[email]','$_POST[mobile]','$_POST[address]','$_POST[city]','$_POST[country]')";
$result=mysql_query($sql,$con);

if(!$result)
{
echo "Incorrect details !" . "</br>";
include 'register.php';
}
else {echo $tablechoice. " added !";}
mysql_close($con);
include 'index.php';
?>

</body>
</html>
