<?php 

		if(isset($_POST['submit']))
		{
			$u=$_POST['username'];
			$op=$_POST['opassword'];
			$np=$_POST['npassword'];

			include("connect.php");
			$sql_connect=mysql_connect($host,$user,$pass) or die("cannot connect to database.please try after sometime");
			mysql_select_db($db,$sql_connect) or die("cannot find database");
			
			$select_user_query="SELECT * FROM `client` WHERE `username`='$u' AND `password`='$op'";
			$select_user=mysql_query($select_user_query);
		//	$row=mysql_fetch_row($select_user);
		//	$correctpass=$u['password'];
			$change=mysql_query("UPDATE `courier`.`client` SET `password`='$np' WHERE `client`.`username`='$u'");
			session_start();
			$_SESSION['change']=1;
			header("Location: client.php#contact");
			
					
					
	}

?>

