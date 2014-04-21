
<!--------------------------------------------->


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SidEx - Courier Management System</title>
</head>

<body>
<?php
if(isset($_POST['submit']))
{
	$u=$_POST['username'];
	$p=$_POST['password'];

	include("connect.php");
	$sql_connect=mysql_connect($host,$user,$pass) or die("cannot connect to database.please try after sometime");
	mysql_select_db($db,$sql_connect) or die("cannot find database");
	
	switch($_POST['type'])
	{
		case "client":
					$select_user_query="SELECT * FROM `client` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysql_query($select_user_query);
					if(mysql_num_rows($select_user)==1)
					{
						include 'client.php';
						//session_start();
						$_SESSION['type']="client";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username and Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					
					break;
		case "admin":
					$select_user_query="SELECT * FROM `admin` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysql_query($select_user_query);
					if(mysql_num_rows($select_user)==1)
					{
						include 'admin.php';
						//session_start();
						$_SESSION['type']="admin";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username and Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					break;
		case "employee":
					$select_user_query="SELECT * FROM `employee` WHERE `username`='$u' AND `password`='$p'";
					$select_user=mysql_query($select_user_query);
					if(mysql_num_rows($select_user)==1)
					
					{
						include 'employee.php';
						//session_start();
						$_SESSION['type']="employee";
						$_SESSION['username']=$u;
						//header('Location: client.php?name='.$u);
					}
					else
					{
						echo "Invalid Username and Password !!";
						unset($_POST['submit']);
						$error_login=1;
						include 'index.php';
					}
					break;
	}
}

	
?>
</body>
</html>