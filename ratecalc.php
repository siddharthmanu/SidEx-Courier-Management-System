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

if(isset($_POST['rate']))
		{
			$wt=$_POST['wt'];
			$num=$_POST['num'];
			if ($_POST['mode']=="air")
				$mode=100;
			else if ($_POST['mode']=="surface") $mode=70;
			else $mode=50;
			
			$rate=$wt*$num*$mode;

			echo "Rate = " . $rate;
			include 'addc.php';
		
			mysql_close($con);
		}
?>

</body>
</html>