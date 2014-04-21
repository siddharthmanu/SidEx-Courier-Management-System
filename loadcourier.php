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




$sql="SELECT * FROM `sender_table`";//(cid,orig,dest,sname,rname,radd,date,rate,mode,status) VALUES ('$_POST[num]','$_POST[orig]','$_POST[dest]','$_POST[sname]','$_POST[rname]','$_POST[raddress]','$_POST[date]','$_POST[status]','$_POST[num]','$_POST[date]',$rate,'$_POST[mode],'$_POST[status])";



$result=mysql_query($sql,$con);

if(!$result)
{
echo "Incorrect details !" . "</br>";
include 'addc.php';
}
else {

$row= mysql_fetch_row($result);
if(strcmp($row[6],air)) $mode=100;
else if(strcmp($row[6],surface)) $mode=70;
else $mode=50;
$rate=$row[7]*$row[8]*$mode;

$sql="INSERT INTO `courier_table`(orig,dest,sname,rname,radd,date,rate,mode) VALUES ('$row[1]','$row[4]','$row[0]','$row[3]','$row[5]','$row[9]',$rate,'$row[6]')";
$result=mysql_query($sql,$con);

}
?>

</body>
</html>