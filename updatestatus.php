<?php 
print"Status Changed !!";
		if(isset($_POST['update']))
		{
			$cid=$_POST['cid'];
			$status=$_POST['status'];
			

			include("connect.php");
			$sql_connect=mysql_connect($host,$user,$pass) or die("cannot connect to database.please try after sometime");
			mysql_select_db($db,$sql_connect) or die("cannot find database");
			
			$select_user_query="SELECT * FROM `courier_table` WHERE `cid`='$cid'";
			$select_user=mysql_query($select_user_query);
		//	$row=mysql_fetch_row($select_user);
		//	$correctpass=$u['password'];
			$change=mysql_query("UPDATE `courier`.`courier_table` SET `status`='$status' WHERE `courier_table`.`cid`='$cid'");
			//session_start();
			//$_SESSION['change']=1;
			include("employee.php");
			echo "Status Changed !!";
			
					
					
	}

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
</head>

<body>
</body>
</html>