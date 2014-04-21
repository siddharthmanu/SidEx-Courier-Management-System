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
			
			$sql="select * from employee";
					
			$result=mysql_query($sql,$con);
			include("report2.php");
			if(!$result)
			{
			echo "Incorrect details !" . "</br>";
			include 'admin.php';
			}
			else {
			
			echo "<table>";
			echo"username &nbsp; name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; email-id &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; mobile &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; city &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; country ";
			while( $row=mysql_fetch_row($result))
			{
				
				echo "<tr><td>$row[0]</td><td>&nbsp;&nbsp;</td><td>$row[2]</td><td>&nbsp;&nbsp;</td><td>$row[3]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[4]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[5]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[6]</td><td>&nbsp;&nbsp;&nbsp;&nbsp;</td><td>$row[7]</td></tr>";
			
			
			}
			
			echo "</table>"; }
        ?>

</body>
</html>