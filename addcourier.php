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


/*if($_POST['Submit'])
{		
	$sql="INSERT INTO `sender_table`(sname,orig,sadd,rname,dest,radd,mode,wt,num,date) VALUES ('$_POST[sname]','$_POST[orig]','$_POST[saddress]','$_POST[rname]','$_POST[dest]','$_POST[raddress]','$_POST[mode]','$_POST[wt]','$_POST[num]','$_POST[date]')";
$result=mysql_query($sql,$con);

	if(!$result)
	{	
		echo "Incorrect details !" . "</br>";
		include 'addc.php';
	}
	else {
		echo " Courier Loaded !";
	
		include 'addc.php';
	}
}*/
if($_POST['pay'])
{

if(strcmp($_POST['mode'],air)) $mode=100;
else if(strcmp($_POST['mode'],surface)) $mode=70;
else $mode=50;
$rate=$_POST['wt']*$_POST['num']*$mode;
$query="INSERT INTO `courier_table`(orig,dest,sname,rname,radd,rate,mode) VALUES ('$_POST[orig]','$_POST[dest]','$_POST[sname]','$_POST[rname]','$_POST[raddress]',$rate,'$_POST[mode]')";
$result=mysql_query($query,$con);

	if(!$result)
	{	
		echo "Incorrect details !" . "</br>";
		include 'addc.php';
	}
	else {
		echo " Courier Loaded !"."</br>";
		$query="select * from courier_table order by cid desc limit 1 ";
$result=mysql_query($query,$con);
	$row=mysql_fetch_row($result);
		echo "Courier ID for tracking purposes: ->> ".$row[0];
		echo "</br>";
		echo "Amount to be payed: ->> &#x20B9;".$row[7];
		include 'addc.php';
	}

}	
	mysql_close($con);
?>

</body>
</html>